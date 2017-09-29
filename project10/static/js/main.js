 function loadScript() {
     var script = document.createElement("script");
     script.type = "text/javascript";
     script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyBzE9xAESye6Kde-3hT-6B90nfwUkcS8Yw&sensor=false&callback=initialize";
     document.body.appendChild(script);
 }

 function initialize() {
     var dell = { lat: 30.4014389, lng: -97.66273849999999 };
     var map = new google.maps.Map(document.getElementById('googleMap'), {
         zoom: 4,
         center: dell
     });
     var marker = new google.maps.Marker({
         position: dell,
         map: map
     });
 }

 function isEmail(str) {
     var reg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/;
     return reg.test(str);
 }