(function() {

    var map;
    var init = function() {
      var mapOptions = {
                center: new google.maps.LatLng(59.92652, 10.7256),
                zoom: 16,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                disableDefaultUI: true
            };
      map = new google.maps.Map(document.getElementById('maps-container'),
          mapOptions);
    }

    google.maps.event.addDomListener(window, 'load', init);

})();