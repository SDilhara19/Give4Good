<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIVE4GOOD</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components/main-styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <?php require APPROOT . '/views/includes/header.php' ?>
    <?php require APPROOT . '/views/includes/side-bar.php' ?>
    <main>
        <h1>
            <?php echo $data['fundraiser'][0]->title; ?>
        </h1>
        <div class="fundraiser-container">
            <div class="fundraiser-left">
                <div class="fundraiser-image-container">
                    <div class="left-arrow">
                        <i class="fa-solid fa-chevron-left fa-2xl"></i>
                    </div>
                    <div class="fundraiser-image">
                        <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/fundraiser1.jpg" alt="image">
                    </div>
                    <div class="right-arrow">
                        <i class="fa-solid fa-chevron-right fa-2xl"></i>
                    </div>
                </div>
                <div class="fundraiser-count-row">
                    <p class="text-2">
                        <?php echo $data['fundraiser'][0]->donationcounts . " Donations"; ?>
                    </p>
                    <p class="text-2">
                        <?php echo $data['fundraiser'][0]->view_counts . " Views"; ?>
                    </p>
                </div>
                <div class="fundraiser-donee">
                    <div class="fundraiser-donee-name">
                        <i class="fa-solid fa-building"></i>
                        <p class="text-2">
                            <?php echo $data['fundraiser'][0]->username; ?>
                        </p>
                    </div>
                    <p class="text-3">Hardcoded No.21, UCSC, Reid Avenue, Colombo 7</p>
                </div>
                <div class="fundriaser-description">
                    <p class="text-1">
                        <?php echo $data['fundraiser'][0]->story; ?>
                    </p>
                </div>


            </div>

            <div class="fundraiser-right">
                <div class="fundraiser-amount">
                    <p class="text-2">
                        <?php echo $data['fundraiser'][0]->amount_collected; ?>
                    </p>
                    <p class="text-3">raised of
                        <?php echo $data['fundraiser'][0]->amount; ?>
                    </p>
                </div>
                <div class="fundraiser-progress-bar">
                    Progress bar
                </div>
                <div class="fundraiser-button-list">
                    <button class="main-color-button">
                        Donate
                    </button>

                    <button class="main-dark-button" onclick="window.location.href = '#all-merchs'">
                        Buy Merch
                    </button>
                    <button class="main-dark-button">
                        Share
                        <i class="fa-solid fa-share-nodes"></i>
                    </button>

                    <button class="main-white-button" onclick="window.location.href = '#donations-we-need'">
                        Send Donations
                    </button>
                </div>
                <div class="fundraiser-info">
                    <div class="info-box">
                        <p class="text-1">Payment methods</p>
                        <ul>
                            <li class="text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et</li>
                            <li class="text-3">Secure payments</li>
                        </ul>
                    </div>
                    <div class="info-box">
                        <p class="text-1">Buy Merch</p>
                        <ul>
                            <li class="text-3">Buy merch to assist the fundraiser</li>
                            <li class="text-3">Delivery estimated within 5 to 10 business days</li>
                        </ul>
                    </div>

                    <div class="info-box">
                        <p class="text-1">Send Donations</p>
                        <ul>
                            <li class="text-3">Good donations can be send to our given locations</li>
                            <li class="text-3">Contact to send donations</li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
        <div class="all-merchs" id="all-merchs">
            <h2>Buy and Help</h2>
            <div class="fundraiser-merch">
                <h3>Black short sleeve t-shirt</h3>
                <div class="fundraiser-merch-container">
                    <div class="fundraiser-merch-left">
                        <div class="merch-img-container">
                            <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/ tshirt.jpeg"
                                alt="merch-image">
                        </div>
                    </div>
                    <div class="fundraiser-merch-right">
                        <div class="merch-right-top">
                            <div class="merch-sizes">
                                <p class="text-2">Available Sizes:</p>
                                <div class="merch-sizes-right">
                                    <p>XS</p>
                                    <p>S</p>
                                    <p>M</p>
                                    <p>L</p>
                                    <p>XL</p>
                                    <p>XXL</p>
                                    <p>XXXL</p>
                                </div>
                            </div>
                            <div class="merch-colors">
                                <p class="text-2">Available Colours:</p>
                                <div class="merch-colors-right">
                                    <p>Red</p>
                                    <p>Black</p>
                                </div>
                            </div>
                        </div>

                        <div class="merch-right-bottom">
                            <div class="merch-price">
                                <h1>Rs. 2200.00</h1>
                                <p class="text-4 color-green">12% of this product is for the fundraiser</p>
                            </div>
                            <div class="merch-buy-button">
                                <button class="main-color-button">
                                    Buy NOW!
                                </button>
                                <p class="text-4 color-red"> Stock not Available</p>
                            </div>
                            <div class="merch-description">
                                <p class="text-4"> High quality Black and Red short sleeve T-shirt for unisex gender.
                                    Made from cotton cloth. High quality Black and Red short sleeve T-shirt for unisex
                                    gender.
                                    Madw Made from cotton cloth. High quality Black and Red short sleeve T-shirt for
                                    unisex gender.
                                    Madw Made from cotton cloth. High quality Black and Red short sleeve T-shirt for
                                    unisex gender.
                                    Madw Made from cotton cloth. High quality Black and Red short sleeve T-shirt for
                                    unisex gender.
                                    Madw Made from cotton cloth. High quality Black and Red short sleeve T-shirt for
                                    unisex gender.
                                    Madw</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="fundraiser-merch">
                <h3>Black short sleeve t-shirt</h3>
                <div class="fundraiser-merch-container">
                    <div class="fundraiser-merch-left">
                        <div class="merch-img-container">
                            <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/cap .webp" alt="merch-image">
                        </div>
                    </div>
                    <div class="fundraiser-merch-right">
                        <div class="merch-right-top">
                            <!-- <div class="merch-sizes">
                                <p class="text-2">Available Sizes:</p>
                                <div class="merch-sizes-right">
                                    <p>XSMall</p>
                                    <p>Small</p>
                                    <p>Medium</p>
                                    <p>L</p>
                                    <p>XL</p>
                                    <p>XXL</p>
                                    <p>XXXL</p>
                                </div>
                            </div> -->
                            <div class="merch-colors">
                                <p class="text-2">Available Colours:</p>
                                <div class="merch-colors-right">
                                    <p>Red</p>
                                    <p>Black</p>
                                </div>
                            </div>
                        </div>

                        <div class="merch-right-bottom">
                            <div class="merch-price">
                                <h1>Rs. 1000.00</h1>
                                <p class="text-4 color-green">15% of this product is for the fundraiser</p>
                            </div>
                            <div class="merch-buy-button">
                                <button class="main-color-button">
                                    Buy NOW!
                                </button>
                                <p class="text-4 color-yellow"> Stock Available</p>
                            </div>
                            <div class="merch-description">
                                <p class="text-4"> High quality Black and Red short sleeve T-shirt for unisex gender.
                                    Made from cotton cloth. </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="donations-we-need" id="donations-we-need">
            <h1>Donations we need</h1>
            <div class="material-card-container">
                <?php
                foreach ($data['materials'] as $material) { ?>
                    <div class="material-card">
                        <div class="material-img-container">
                            <img src="<?php echo URLROOT . $material->image; ?>">
                            <!-- <p><?php // echo URLROOT . $material->image; ?></p> -->
                        </div>
                        <div class="material-card-below">
                            <p class="text-1">
                                <?php echo $material->name; ?>
                            </p>
                            <button class="button-3 open-material-popup"
                                data-popup-id="<?php echo $material->material_id; ?>">View Details</button>
                        </div>
                    </div>
                    <dialog class="material-popup" id='material-popup-<?php echo $material->material_id; ?>'>
                        <span class="close-popup"
                            id='close-material-popup-<?php echo $material->material_id; ?>'>&times;</span>
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
                                <div>
                                    <p class="text-2">Contact information for more details</p>
                                    <table class="material-table">
                                        <tr>
                                            <th>email</th>
                                            <td class="text-3">dialog@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <th>phone</th>
                                            <td class="text-3">+9470 5643233</td>
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



        <div class="send-donations">
            <h1>Send Donations</h1>
            <div class="send-donation-card-container">
                <div class="send-donation-card">
                    <div class="send-donation-img-container">
                        <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/map.png" alt="">
                    </div>
                    <div class="send-donation-text">
                        <p class="text-2">Colombo 7</p>
                        <div class="send-donation-details">
                            <p class="text-1">Contact: </p>
                            <p class="text-3">+9470 3420012</p>
                            <p class="text-1">Location: </p>
                            <p class="text-3">No.21, Dharmapala Rd, Dematagoda</p>

                        </div>
                    </div>
                </div>
                <div class="send-donation-card">
                    <div class="send-donation-img-container">
                        <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/map.png" alt="">
                    </div>
                    <div class="send-donation-text">
                        <p class="text-2">Colombo 7</p>
                        <div class="send-donation-details">
                            <p class="text-1">Contact: </p>
                            <p class="text-3">+9470 3420012</p>
                            <p class="text-1">Location: </p>
                            <p class="text-3">No.21, Dharmapala Rd, Dematagoda</p>

                        </div>
                    </div>
                </div>
                <div class="send-donation-card">
                    <div class="send-donation-img-container">
                        <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/map.png" alt="">
                    </div>
                    <div class="send-donation-text">
                        <p class="text-2">Colombo 7</p>
                        <div class="send-donation-details">
                            <p class="text-1">Contact: </p>
                            <p class="text-3">+9470 3420012</p>
                            <p class="text-1">Location: </p>
                            <p class="text-3">No.21, Dharmapala Rd, Dematagoda</p>

                        </div>
                    </div>
                </div>
                <div class="send-donation-card">
                    <div class="send-donation-img-container">
                        <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/map.png" alt="">
                    </div>
                    <div class="send-donation-text">
                        <p class="text-2">Colombo 7</p>
                        <div class="send-donation-details">
                            <p class="text-1">Contact: </p>
                            <p class="text-3">+9470 3420012</p>
                            <p class="text-1">Location: </p>
                            <p class="text-3">No.21, Dharmapala Rd, Dematagoda</p>

                        </div>
                    </div>
                </div>

            </div>


        </div>

    </main>
    <?php require APPROOT . '/views/includes/footer.php' ?>
    <script src="<?php echo URLROOT ?>/public/js/header.js"></script>

</body>

</html>