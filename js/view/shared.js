(function() {

    var map;
    var init = function() {
        var myLatlng = new google.maps.LatLng(59.92684,10.725421);
        var mapOptions = {
                center: myLatlng,
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                panControl: false,
                zoomControl: true,
                scaleControl: false
            };
        map = new google.maps.Map(document.getElementById('maps-container'),
          mapOptions);

        var marker = new google.maps.Marker({
            position:   myLatlng,
            map:        map,
            title:      "Rosenborggata 12"
        });
    }

    google.maps.event.addDomListener(window, 'load', init);

})();