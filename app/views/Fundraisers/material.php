<div class="donations-we-need" id="donations-we-need">
    <h1>Donations we need</h1>
    <div class="material-card-container">
        <?php
        foreach ($data['materials'] as $material) { ?>
            <div class="material-card">
                <div class="material-img-container">
                    <img src="<?php echo URLROOT . $material->image; ?>">
                    <!-- <p><?php // echo URLROOT . $material->image;  ?></p> -->
                </div>
                <div class="material-card-below">
                    <p class="text-1">
                        <?php echo $material->name; ?>
                    </p>
                    <button class="button-3 open-material-popup" data-popup-id="<?php echo $material->material_id; ?>">View
                        Details</button>
                </div>
            </div>
            <dialog class="material-popup" id='material-popup-<?php echo $material->material_id; ?>'>
                <span class="close-popup" id='close-material-popup-<?php echo $material->material_id; ?>'>&times;</span>
                <h2>
                    <?php echo $material->name; ?>
                </h2>
                <div class="material-popup-container">
                    <div class="material-popup-left">
                        <div class="material-popup-img-container">
                            <img src="<?php echo URLROOT . $material->image; ?>" alt="">
                        </div>
                    </div>
                    <div class="material-popup-right">
                        <div>
                            <p class="text-2">Description</p>
                            <p class="text-3">
                                <?php echo $material->description; ?>
                            </p>
                            <p class="text-2">Number of units required</p>
                            <p class="text-3">
                                <?php echo $material->units; ?>
                            </p>
                        </div>
                        <div class="donee-name text-8">
                            <i class='bx bxs-info-circle'></i>
                            <span style="font-size: 0.65rem;">Required amount can vary. Its best to contact for updated
                                details</span>
                        </div>
                        <div>
                            <p class="text-2">Contact information for more details</p>
                            <table class="material-table">
                                <tr>
                                    <th>email</th>
                                    <td class="text-3">
                                        <?php echo $data['fundraiser'][0]->email; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>phone</th>
                                    <td class="text-3">
                                        <?php echo $data['fundraiser'][0]->phone; ?>
                                    </td>
                                </tr>
                            </table>
                        </div>


                    </div>
                </div>

            </dialog>
            <script src="<?php echo URLROOT ?>/public/js/popup.js"></script>

            <script>
                setupPopup('.open-material-popup[data-popup-id="<?php echo $material->material_id; ?>"]', '#material-popup-<?php echo $material->material_id; ?>', '#close-material-popup-<?php echo $material->material_id; ?>');
            </script>
            <?php
        } ?>
    </div>
</div>
<?php
        if (!empty($data['map_locations']) || !empty($data['locations'])) { ?>
   
<div class="send-donations">

    <h1>Send Donations</h1>
    <?php
        if (!empty($data['map_locations'])) { ?>
    <div class="map" id="map">

    </div>

        <?php } ?>
    <?php
        if (!empty($data['locations'])) { ?>
         
    <div class="send-donation-card-container">
        <?php foreach ($data['locations'] as $location) { ?>
            <div class="send-donation-card">
                <div class="send-donation-text">
                    <p class="text-2">
                        <?php echo $location->area; ?>
                    </p>
                    <div class="send-donation-details">
                        <p class="text-1">Contact: </p>
                        <p class="text-3"><?php echo $location->contact; ?></p>
                        <p class="text-1">Location: </p>
                        <p class="text-3"> <?php echo $location->address; ?></p>

                    </div>
                </div>
            </div>

        <?php } ?>
    </div>
 
      <?php  }?>
    <script>
        // Initialize and add the map
        let map;

        async function initMap() {
            // The location of the center of the map
            const center = { lat: <?php echo $data['map_locations'][0]->latitude ?>, lng: <?php echo $data['map_locations'][0]->longitude ?> };

            // The map, centered at the specified location
            map = new google.maps.Map(document.getElementById("map"), {
                zoom: 9.8,
                center: center,
                mapId: "DEMO_MAP_ID",
            });

            // Sample set of coordinates (latitude and longitude)
            const coordinates = [
                <?php foreach ($data['map_locations'] as $location) { ?>
                { lat: <?php echo $location->latitude ?>, lng: <?php echo $location->longitude ?> },
                <?php } ?>
            ];
            // Loop through the coordinates and add a marker for each one
            coordinates.forEach(coord => {
                new google.maps.Marker({
                    position: coord,
                    map: map,
                    title: "Marker"
                });
            });
        }

        // Initialize the map when the page loads
        initMap();
    </script>

    <!-- Include the Google Maps JavaScript API with your API key -->
    <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo GOOGLE_MAP ?>&callback=initMap" async
        defer></script>
</div>

   <?php }?>