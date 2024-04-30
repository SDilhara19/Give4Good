<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIVE4GOOD</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components/main-styles.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components-3/Admin_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body>
    <?php require APPROOT . '/views/includes/admin-header.php' ?>
    <?php require APPROOT . '/views/includes/admin-dashboard.php' ?>
    <main class="admin-fundraiser">
<<<<<<< HEAD
<<<<<<< HEAD
        <h1 class="margin-bottom-0"><?php echo $data['fundraiser'][0]->title; ?></h1>
        <p class="text-3">Category: <?php echo $data['fundraiser'][0]->Category; ?></p>
=======
        <h1 class="margin-bottom-0">Help us to assist them walk</h1>
        <p class="text-3">Category: Health</p>
>>>>>>> main
=======
        <h1 class="margin-bottom-0"><?php echo $data['fundraiser'][0]->title; ?></h1>
        <p class="text-3">Category: <?php echo $data['fundraiser'][0]->Category; ?></p>
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
        <div class="fundraiser-container">
            <div class="fundraiser-left">
                <div class="fundraiser-image-container">
                    <div class="left-arrow">
                        <i class="fa-solid fa-chevron-left fa-2xl"></i>
                    </div>
                    <div class="fundraiser-image">
<<<<<<< HEAD
<<<<<<< HEAD
                        <img src="<?php echo URLROOT . $data['images'][0]->img?>" alt="image">
=======
                        <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/fundraiser1.jpg" alt="image">
>>>>>>> main
=======
                        <img src="<?php echo URLROOT . $data['images'][0]->img?>" alt="image">
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
                    </div>
                    <div class="right-arrow">
                        <i class="fa-solid fa-chevron-right fa-2xl"></i>
                    </div>
                </div>
                <div class="fundraiser-count-row">
<<<<<<< HEAD
<<<<<<< HEAD
                    <p class="text-2"><?php echo $data['fundraiser'][0]->donationcounts . " Donations"; ?></p>
                    <p class="text-2"><?php echo $data['fundraiser'][0]->view_counts . " Views"; ?></p>
=======
                    <p class="text-2">40 Donations</p>
                    <p class="text-2">121 Views</p>
>>>>>>> main
=======
                    <p class="text-2"><?php echo $data['fundraiser'][0]->donationcounts . " Donations"; ?></p>
                    <p class="text-2"><?php echo $data['fundraiser'][0]->view_counts . " Views"; ?></p>
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
                </div>
                <div class="fundraiser-donee">
                    <div class="fundraiser-donee-name">
                        <i class="fa-solid fa-building"></i>
<<<<<<< HEAD
<<<<<<< HEAD
                        <p class="text-2"> <?php echo $data['fundraiser'][0]->username; ?></p>
                    </div>
                    <p class="text-3"><?php echo $data['fundraiser'][0]->Address; ?></p>
                </div>
                <div class="fundriaser-description">
                    <p class="text-1"> <?php echo $data['fundraiser'][0]->story; ?></p>
=======
                        <p class="text-2">Dialog</p>
=======
                        <p class="text-2"> <?php echo $data['fundraiser'][0]->username; ?></p>
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
                    </div>
                    <p class="text-3"><?php echo $data['fundraiser'][0]->Address; ?></p>
                </div>
                <div class="fundriaser-description">
<<<<<<< HEAD
                    <p class="text-1"> Wanted to take a moment to shed some light on an important issue that needs our
                        attention: the living conditions in slum areas. Many individuals and families in these
                        communities face daily challenges, from inadequate housing to limited access to basic amenities.
                        But here's the thing: we have the power to make a difference! ✨ By coming together as a
                        community, we can support and uplift those living in slum areas. Here are a few ways you can get
                        involved: Volunteer your time: Consider reaching out to local organizations that work directly
                        with these communities. You can offer your skills, whether it's teaching classes, organizing
                        workshops, or providing mentorship. Your presence and support</p>
>>>>>>> main
=======
                    <p class="text-1"> <?php echo $data['fundraiser'][0]->story; ?></p>
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
                </div>


            </div>

            <div class="fundraiser-right">
                <div class="fundraiser-button-list">
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
                    <?php if ($data['fundraiser'][0]->status == 'Active') { ?>
                        <button onclick='if(window.confirm("Are you sure you want to deactivate the <?php echo $data['fundraiser'][0]->fundraiser_id ?>")){
            window.open("<?php echo URLROOT ?>/Admin_Fundraisers/setDeactive/<?php echo$data['fundraiser'][0]->fundraiser_id ?>");
        }' class="button-3-red">Deactivate</button>
                    <?php } elseif ($data['fundraiser'][0]->status == 'Deactive') { ?>
                        <button onclick='if(window.confirm("Are you sure you want to activate the <?php echo $data['fundraiser'][0]->fundraiser_id ?>")){
            window.open("<?php echo URLROOT ?>/Admin_Fundraisers/setActive/<?php echo $data['fundraiser'][0]->fundraiser_id ?>");
        }' class="button-1-green">Activate</button>
                    <?php } elseif ($data['fundraiser'][0]->status == 'Pending') { ?>
                        <button onclick='if(window.confirm("Are you sure you want to activate the <?php echo $data['fundraiser'][0]->fundraiser_id ?>")){
            window.open("<?php echo URLROOT ?>/Admin_Fundraisers/setActive/<?php echo $fundraiser->fundraiser_id ?>");
        }' class="button-1-green">Activate</button>
                        <button onclick='if(window.confirm("Are you sure you want to deactivate the <?php echo $data['fundraiser'][0]->fundraiser_id ?>")){
            window.open("<?php echo URLROOT ?>/Admin_Fundraisers/setDeactive/<?php echo $data['fundraiser'][0]->fundraiser_id ?>");
        }' class="button-3-red">Deactivate</button>
                    <?php } ?>
<<<<<<< HEAD
                </div>


                <p class="text-3">Current status: <?php echo $data['fundraiser'][0]->status; ?></p>

                <div class="fundraiser-amount">
                    <p class="text-2"><?php echo $data['fundraiser'][0]->amount_collected; ?></p>
                    <p class="text-3"><?php echo $data['fundraiser'][0]->amount; ?></p>
                </div>
                <div class="fundraiser-progress-bar">
                    <div class="fundraiser-progress"
                        style="width: <?php echo $data['fundraiser'][0]->progress . '%' ?>"></div>
=======
                    <button class="button-1-green">
                        Activate
                    </button>

                    <button class="button-2-yellow" onclick="window.location.href = '#all-merchs'">
                        Set pending
                    </button>
                    <button class="button-3-red">
                        Deactivate
                    </button>

=======
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
                </div>


                <p class="text-3">Current status: <?php echo $data['fundraiser'][0]->status; ?></p>

                <div class="fundraiser-amount">
                    <p class="text-2"><?php echo $data['fundraiser'][0]->amount_collected; ?></p>
                    <p class="text-3"><?php echo $data['fundraiser'][0]->amount; ?></p>
                </div>
                <div class="fundraiser-progress-bar">
<<<<<<< HEAD
                    Progress bar
>>>>>>> main
=======
                    <div class="fundraiser-progress"
                        style="width: <?php echo $data['fundraiser'][0]->progress . '%' ?>"></div>
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
                </div>
                <hr>
                <div class="fundraiser-info">
                    <div class="info-box">
                        <table class="info-table">
                            <tr>
                                <th>Created date</th>
<<<<<<< HEAD
<<<<<<< HEAD
                                <td class="text-3"><?php echo $data['fundraiser'][0]->created_date; ?></td>
                            </tr>
                            <tr>
                                <th>Modified date</th>
                                <td class="text-3"><?php echo $data['fundraiser'][0]->modified_date; ?></td>
                            </tr>
                            <tr>
                                <th>End date</th>
                                <td class="text-3"><?php echo $data['fundraiser'][0]->end_date; ?></td>
=======
                                <td class="text-3">23-02-2023</td>
=======
                                <td class="text-3"><?php echo $data['fundraiser'][0]->created_date; ?></td>
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
                            </tr>
                            <tr>
                                <th>Modified date</th>
                                <td class="text-3"><?php echo $data['fundraiser'][0]->modified_date; ?></td>
                            </tr>
                            <tr>
                                <th>End date</th>
<<<<<<< HEAD
                                <td class="text-3">23-02-2024</td>
>>>>>>> main
=======
                                <td class="text-3"><?php echo $data['fundraiser'][0]->end_date; ?></td>
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
                            </tr>
                        </table>
                    </div>


                </div>
            </div>
        </div>

        <div class="reports">
            <h1>Reports & Documents</h1>
            <div class="all-report-container">
<<<<<<< HEAD
<<<<<<< HEAD
                <?php foreach($data['image'] as $doc){?>
                <div class="report-container">
                    <div class="report-container-top">
                        <a href="<?php echo URLROOT ?>/Admin_Fundraisers/fundraiser_doc/<?php echo $doc -> id?>" >
                            <div class="report-image-container">
                            <img src="<?php echo URLROOT . $data['image'][0]->img?>" alt="image">

=======
=======
                <?php foreach($data['image'] as $doc){?>
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
                <div class="report-container">
                    <div class="report-container-top">
                        <a href="<?php echo URLROOT ?>/Admin_Fundraisers/fundraiser_doc/<?php echo $doc -> id?>" >
                            <div class="report-image-container">
<<<<<<< HEAD
                                <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/Fundraisers/Documents-Medical/1_Medical.webp"
                                    alt="image">
>>>>>>> main
=======
                            <img src="<?php echo URLROOT . $data['image'][0]->img?>" alt="image">

>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
                            </div>
                        </a>
                    </div>
                    <div class="report-container-bottom">
                        <p>Medical Report</p>
                    </div>
                </div>
<<<<<<< HEAD
<<<<<<< HEAD
                <?php }?>
=======
                <div class="report-container">
                    <div class="report-container-top">
                        <div class="report-image-container">
                            <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/Fundraisers/Documents-Medical/1_Medical.webp"
                                alt="image">
                        </div>
                    </div>
                    <div class="report-container-bottom">
                        <p>Medical Report</p>
                    </div>
                </div>
                <div class="report-container">
                    <div class="report-container-top">
                        <div class="report-image-container">
                            <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/Fundraisers/Documents-Medical/1_Medical.webp"
                                alt="image">
                        </div>
                    </div>
                    <div class="report-container-bottom">
                        <p>Medical Report</p>
                    </div>
                </div>
                <div class="report-container">
                    <div class="report-container-top">
                        <div class="report-image-container">
                            <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/Fundraisers/Documents-Medical/1_Medical.webp"
                                alt="image">
                        </div>
                    </div>
                    <div class="report-container-bottom">
                        <p>Medical Report</p>
                    </div>
                </div>
>>>>>>> main
=======
                <?php }?>
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
            </div>
        </div>
        <div class="donations-we-need" id="donations-we-need">
            <h1>Donations Expected</h1>
            <div class="material-card-container">
<<<<<<< HEAD
<<<<<<< HEAD
            <?php foreach ($data['materials'] as $material) { ?>
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
                            <span style="font-size: 0.65rem;">Required<?php echo URLROOT . $material->image; ?> amount can vary. Its best to contact for updated
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
=======
=======
            <?php foreach ($data['materials'] as $material) { ?>
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
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
                            <span style="font-size: 0.65rem;">Required<?php echo URLROOT . $material->image; ?> amount can vary. Its best to contact for updated
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

<<<<<<< HEAD
        </div>
>>>>>>> main
=======
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
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d

    </main>
    <script src="<?php echo URLROOT ?>/public/js/popup.js"></script>
    <script>
<<<<<<< HEAD
<<<<<<< HEAD
        setupPopup('#open-material-popup', '.material-popup', '.close-material-popup');
    </script>
=======
    setupPopup('#open-material-popup', '.material-popup', '.close-material-popup');
  </script>
>>>>>>> main
=======
        setupPopup('#open-material-popup', '.material-popup', '.close-material-popup');
    </script>
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
    <?php require APPROOT . '/views/includes/footer.php' ?>
</body>

</html>