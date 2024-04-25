
    <script>
        let map;
        let markers = [];

        function initMap() {

            map = new google.maps.Map(document.getElementById("map"), {
                zoom: 9.8,
                center: { lat: 6.9271, lng: 79.8612 },
                mapTypeId: "terrain",
            });.
            map.addListener("click", function (event) {
                addMarker(event.latLng);
            });
        }



        function addMarker(position) {
            const marker = new google.maps.Marker({
                position,
                map,

            });
            const latLng = { lat: position.lat(), lng: position.lng() };
            markers.push(latLng);
            const locationsInput = document.getElementById('locations');
    locationsInput.value = JSON.stringify\\(markers); // Assuming you want to store markers as a JSON string

        }


        window.initMap = initMap;
    </script>

</head>

<body>

    <form id="locationForm" action="" method="post">
        <input type="hidden" name="latitude" id="latitude">
        <input type="hidden" name="longitude" id="longitude">
        <input type="hidden" name="locations" id='locations'>
        <input type="submit" value="Submit" id='submitButton'>
        <div id="floating-panel">

        </div>
    </form>
    <div id="map"></div>

    <p>Click on the map to add markers.</p>

    
      <script>



function submitLocations{
    document.getElementById('locations').value = markers
}

      </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo GOOGLE_MAP ?>&callback=initMap&v=weekly"
        defer></script>

</body>

</html>