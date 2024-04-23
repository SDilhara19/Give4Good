<!DOCTYPE html>
<html>
<head>
    <title>Location Picker</title>
    
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    <h2>Select Location</h2>
    <div id="map"></div>
    <form id="locationForm" action="" method="post">
        <input type="hidden" name="latitude" id="latitude">
        <input type="hidden" name="longitude" id="longitude">
        <input type="submit" value="Submit">
    </form>
    <script>
        var map;
var marker;

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 0, lng: 0},
        zoom: 2
    });

    map.addListener('click', function(event) {
        placeMarker(event.latLng);
    });
}

function placeMarker(location) {
    if (marker) {
        marker.setPosition(location);
    } else {
        marker = new google.maps.Marker({
            position: location,
            map: map
        });
    }
    document.getElementById('latitude').value = location.lat();
    document.getElementById('longitude').value = location.lng();
}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo GOOGLE_MAP ?>&libraries=places&callback=initMap" async defer></script>

</body>
</html>
