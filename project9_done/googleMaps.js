//              https://developers.google.com/maps/   for all documentation 
//we need a global map to be able to easily add markers after map initialization
var map, infowindow;

function createMarker(domElm, latLongStr, imgEle) {

    //repurposed from JscripFromFlickr.js
    var locDetails = latLongStr.split('; ');

    if (locDetails.length == 2) {
        recordLocation = locDetails[0];
        var recordGPS = locDetails[1];
        recordGPS = recordGPS.split(',');
        var recordLat = recordGPS[0];
        var recordLon = recordGPS[1];
        //convert string to float
        recordLat = parseFloat(recordLat);
        recordLon = parseFloat(recordLon);

        var myLatlng = { lat: recordLat, lng: recordLon };
        if (typeof(google)) {
            //where we will save the marker temporarily
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map
            });
            //makes the focus go to entry
            marker.addListener('click', function() {
                //dom elm is the same as newdomelm ie its the referance to the actual object
                $(document).scrollTop(domElm.offset().top);
            });
            marker.addListener("mouseover", function(e) {
                infowindow.setContent(imgEle);
                infowindow.open(map, marker);
            });
        }

    }

}

$('body').on("mouseover", function(e) {
    var xx = e.pageX;
    var yy = e.pageY;
    console.log(xx + "--------" + yy)
})

function iterateRecords(data) {

    // console.log(data);

    $.each(data.result.records, function(recordKey, recordValue) {

        var recordTitle = recordValue['dc:title'];
        var recordImage = recordValue['150_pixel_jpg'];
        var recordDescription = recordValue['dc:description'];
        //save the location, remember to check what this value actualy looks like eg suburb, state; lat,long
        var recordLocation = recordValue['dcterms:spatial'];


        if (recordTitle && recordImage && recordDescription && recordLocation) {
            var newDomElm = $('<section class="record">').append(
                $('<h2>').text(recordTitle),
                $('<img>').attr('src', recordImage),
                $('<p>').text(recordDescription)
            );
            //adds element to the page
            $('#records').append(newDomElm);
            var imgEle = '<img src="' + recordImage + '">';
            //create a marker
            createMarker(newDomElm, recordLocation, imgEle);
        }
    });
}

//set up the map if you check where you put your api key you will see it has initmap as the call back

function initMap() {
    var uluru = { lat: -25.363, lng: 131.044 };
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: uluru
    });
    infowindow = new google.maps.InfoWindow({});
    if (localStorage.getItem('slqData')) {
        data = localStorage.getItem('slqData');
        data = JSON.parse(data);
        iterateRecords(data);
        console.log('From localStorage');
    } else {

        var data = {
            resource_id: 'f5ecd45e-7730-4517-ad29-73813c7feda8',
            limit: 1000

        }

        $.ajax({
            url: 'http://data.gov.au/api/action/datastore_search',
            data: data,
            dataType: 'jsonp',
            cache: true,
            success: function(data) {
                iterateRecords(data);
                data = JSON.stringify(data);
                localStorage.setItem('slqData', data);
                console.log('From API');

            }
        });
    }

}