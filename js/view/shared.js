(function() {
    var GoogleMaps = function() {
        var myOptions = {
            center: new google.maps.LatLng(37.0625, -95.677068),
            zoom: 18,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            disableDefaultUI: true
        };

        var init = function() {
            var map = new google.maps.Map($(".maps-container"), myOptions);
        }

        $(document).ready(init);
    };

    window.rg12 = window.rg12 || {};
    window.rg12.maps = GoogleMaps();
})();
