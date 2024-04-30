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
        <h1 class="margin-bottom-0"><?php echo $data['fundraiser'][0]->title; ?></h1>
        <p class="text-3">Category: <?php echo $data['fundraiser'][0]->Category; ?></p>
        <div class="fundraiser-container">
            <div class="fundraiser-left">
                <div class="fundraiser-image-container">
                    <div class="left-arrow">
                        <i class="fa-solid fa-chevron-left fa-2xl"></i>
                    </div>
                    <div class="fundraiser-image">
                        <img src="<?php echo URLROOT . $data['images'][0]->img?>" alt="image">
                    </div>
                    <div class="right-arrow">
                        <i class="fa-solid fa-chevron-right fa-2xl"></i>
                    </div>
                </div>
                <div class="fundraiser-count-row">
                    <p class="text-2"><?php echo $data['fundraiser'][0]->donationcounts . " Donations"; ?></p>
                    <p class="text-2"><?php echo $data['fundraiser'][0]->view_counts . " Views"; ?></p>
                </div>
                <div class="fundraiser-donee">
                    <div class="fundraiser-donee-name">
                        <i class="fa-solid fa-building"></i>
                        <p class="text-2"> <?php echo $data['fundraiser'][0]->username; ?></p>
                    </div>
                    <p class="text-3"><?php echo $data['fundraiser'][0]->Address; ?></p>
                </div>
                <div class="fundriaser-description">
                    <p class="text-1"> <?php echo $data['fundraiser'][0]->story; ?></p>
                </div>


            </div>

            <div class="fundraiser-right">
                <div class="fundraiser-button-list">
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
                </div>


                <p class="text-3">Current status: <?php echo $data['fundraiser'][0]->status; ?></p>

                <div class="fundraiser-amount">
                    <p class="text-2"><?php echo $data['fundraiser'][0]->amount_collected; ?></p>
                    <p class="text-3"><?php echo $data['fundraiser'][0]->amount; ?></p>
                </div>
                <div class="fundraiser-progress-bar">
                    <div class="fundraiser-progress"
                        style="width: <?php echo $data['fundraiser'][0]->progress . '%' ?>"></div>
                </div>
                <hr>
                <div class="fundraiser-info">
                    <div class="info-box">
                        <table class="info-table">
                            <tr>
                                <th>Created date</th>
                                <td class="text-3"><?php echo $data['fundraiser'][0]->created_date; ?></td>
                            </tr>
                            <tr>
                                <th>Modified date</th>
                                <td class="text-3"><?php echo $data['fundraiser'][0]->modified_date; ?></td>
                            </tr>
                            <tr>
                                <th>End date</th>
                                <td class="text-3"><?php echo $data['fundraiser'][0]->end_date; ?></td>
                            </tr>
                        </table>
                    </div>


                </div>
            </div>
        </div>

        <div class="reports">
            <h1>Reports & Documents</h1>
            <div class="all-report-container">
                <?php foreach($data['image'] as $doc){?>
                <div class="report-container">
                    <div class="report-container-top">
                        <a href="<?php echo URLROOT ?>/Admin_Fundraisers/fundraiser_doc/<?php echo $doc -> id?>" >
                            <div class="report-image-container">
                            <img src="<?php echo URLROOT . $data['image'][0]->img?>" alt="image">

                            </div>
                        </a>
                    </div>
                    <div class="report-container-bottom">
                        <p>Medical Report</p>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
        <div class="donations-we-need" id="donations-we-need">
            <h1>Donations Expected</h1>
            <div class="material-card-container">
                <div class="material-card">
                    <div class="material-img-container">
                    <img src="<?php echo URLROOT . $data['mImage'][0]->img?>" alt="image">
                    </div>
                    <div class="material-card-below">
                        <p class="text-1"><?php echo $data['materials'][0]->name; ?></p>
                        <button class="button-3" id="open-material-popup">View Details</button>
                    </div>
                </div>


                <div class="material-card">
                    <div class="material-img-container">
                    <img src="<?php echo URLROOT . $data['mImage'][0]->img?>" alt="image">
                    </div>
                    <div class="material-card-below">
                        <p class="text-1"> <?php echo $data['materials'][0]->name; ?></p>
                        <button class="button-3">View Details</button>
                    </div>
                </div>
                <div class="material-card">
                    <div class="material-img-container">
                    <img src="<?php echo URLROOT . $data['mImage'][0]->img?>" alt="image">
                    </div>
                    <div class="material-card-below">
                        <p class="text-1"><?php echo $data['materials'][0]->name; ?></p>
                        <button class="button-3">View Details</button>
                    </div>
                </div>


            </div>
        </div>

        <dialog class="material-popup">
            <span class="close-material-popup">&times;</span>
            <h2><?php echo $data['materials'][0]->name; ?></h2>
            <div class="material-popup-container">
                <div class="material-popup-left">
                    <div class="material-popup-img-container">
                    <img src="<?php echo URLROOT . $data['mImage'][0]->img?>" alt="image">
                    </div>
                </div>
                <div class="material-popup-right">
                    <p class="text-2">Description</p>
                    <p class="text-3"><?php echo $data['materials'][0]->description; ?></p>
                    <p class="text-2">Units:</p>
                    <p class="text-3"><?php echo $data['materials'][0]->units; ?></p>
                    <p class="text-2">Contact information for more details: <?php echo $data['fundraiser'][0]->phone; ?> </p>
                    <table class="material-table">
                        <tr>
                            <th>email</th>
                            <td class="text-3"><?php echo $data['fundraiser'][0]->email; ?></td>
                        </tr>
                        <tr>
                            <th>phone</th>
                            <td class="text-3"><?php echo $data['fundraiser'][0]->phone; ?></td>
                        </tr>
                    </table>

                </div>
            </div>

        </dialog>

        <div class="send-donations">
            <h1>Locations</h1>
            <div class="send-donation-card-container">
                <div class="send-donation-card">
                    <div class="send-donation-img-container">
                    <img src="<?php echo URLROOT . $data['mImage'][0]->img?>" alt="image">
                    </div>
                    <div class="send-donation-text">
                        <p class="text-2"> <?php echo $data['locations'][0]->area; ?></p>
                        <div class="send-donation-details">
                            <p class="text-1">Contact: </p>
                            <p class="text-3"><?php echo $data['locations'][0]->contact; ?></p>
                            <p class="text-1">Location: </p>
                            <p class="text-3"><?php echo $data['locations'][0]->address; ?></p>

                        </div>
                    </div>
                </div>
                <div class="send-donation-card">
                    <div class="send-donation-img-container">
                        <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/map.png" alt="">
                    </div>
                    <div class="send-donation-text">
                        <p class="text-2"><?php echo $data['locations'][0]->area; ?></p>
                        <div class="send-donation-details">
                            <p class="text-1">Contact: </p>
                            <p class="text-3"><?php echo $data['locations'][0]->contact; ?></p>
                            <p class="text-1">Location: </p>
                            <p class="text-3"><?php echo $data['locations'][0]->address; ?></p>

                        </div>
                    </div>
                </div>
                <div class="send-donation-card">
                    <div class="send-donation-img-container">
                        <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/map.png" alt="">
                    </div>
                    <div class="send-donation-text">
                        <p class="text-2"><?php echo $data['locations'][0]->area; ?></p>
                        <div class="send-donation-details">
                            <p class="text-1">Contact: </p>
                            <p class="text-3"><?php echo $data['locations'][0]->contact; ?></p>
                            <p class="text-1">Location: </p>
                            <p class="text-3"><?php echo $data['locations'][0]->address; ?></p>

                        </div>
                    </div>
                </div>
                <div class="send-donation-card">
                    <div class="send-donation-img-container">
                        <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/map.png" alt="">
                    </div>
                    <div class="send-donation-text">
                        <p class="text-2"><?php echo $data['locations'][0]->area; ?></p>
                        <div class="send-donation-details">
                            <p class="text-1">Contact: </p>
                            <p class="text-3"><?php echo $data['locations'][0]->contact; ?></p>
                            <p class="text-1">Location: </p>
                            <p class="text-3"><?php echo $data['locations'][0]->address; ?></p>

                        </div>
                    </div>
                </div>

            </div>


        </div>

    </main>
    <script src="<?php echo URLROOT ?>/public/js/popup.js"></script>
    <script>
        setupPopup('#open-material-popup', '.material-popup', '.close-material-popup');
    </script>
    <?php require APPROOT . '/views/includes/footer.php' ?>
</body>

</html>