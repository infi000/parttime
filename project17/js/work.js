var VIDEOLIST = {
    v1: ' <iframe width="560" height="315" src="https://www.youtube.com/embed/KD5MWv3EW28" frameborder="0" allowfullscreen></iframe>',
    v2: '<iframe width="100%" height="480" src="https://www.youtube.com/embed/gFhR8xUE5ZU" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>',
    v3: '<iframe width="100%" height="480" src="https://www.youtube.com/embed/aLDOrjrdm3o" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>',
    v4: '<iframe width="100%" height="480" src="https://www.youtube.com/embed/ezqpgpnFaBA" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>',
    v5: '<iframe width="100%" height="480" src="https://www.youtube.com/embed/x-Ezacf22Oc" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>'
};

$(".btn-video").on("click", function(e) {
    var type = $(this).attr('datatype');
    $("#video").modal("show");
    $("#video .modal-body").html(VIDEOLIST[type]);
});

$('#video').on('hidden.bs.modal', function(e) {
    $("#video .modal-body").html(" ")
});

$(".btn-wish").on("click", function(e) {
    $("#wish").modal("show")
    setTimeout(function() {
        $('#wish').modal('hide');
    }, 1000)
})

window.onload = loadScript;

function loadScript() {
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyBzE9xAESye6Kde-3hT-6B90nfwUkcS8Yw&sensor=false&callback=initialize";
    document.body.appendChild(script);
}

function initialize() {
    var dell = { lat: 46.227638, lng: 2.213749000000007 };
    var map = new google.maps.Map(document.getElementById('googleMap'), {
        zoom: 4,
        center: dell
    });
    var marker = new google.maps.Marker({
        position: dell,
        map: map
    });
}