<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIVE4GOOD</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components/main-styles.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components-3/Admin_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9e9a03ae37.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>

<body>
<?php require APPROOT . '/views/includes/admin-header.php' ?>
    <?php require APPROOT . '/views/includes/admin-dashboard.php' ?>
   

    <main class="admin-merchandise">
        <h1 class="margin-bottom-0">Merchandise: Help us to assist them walk</h1>
        <div class="ad-all-merchs" id="all-merchs">
            <div class="ad-fundraiser-merch">
                <h2>Black short sleeve t-shirt</h2>
                <div class="fundraiser-ad-merch-container">
                    <div class="fundraiser-ad-merch-left">
                        <div class="ad-merch-img-container">
                            <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/Fundraisers/Merchandise/tshirt.jpeg"
                                alt="merch-image">
                        </div>
                        <div class="ad-merch-image-gallery">
                            <div class="ad-merch-image">
                                <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/Fundraisers/Merchandise/tshirt.jpeg" alt="">
                            </div>
                            <div class="ad-merch-image">
                                <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/Fundraisers/Merchandise/tshirt merch.jpeg" alt="">
                            </div>
                            <div class="ad-merch-image">
                                <img src="" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ad-fundraiser-merch-right">
                        <div class="ad-merch-right-top">
                            <div class="ad-merch-sizes">
                                <p class="text-2">Available Sizes:</p>
                                <div class="ad-merch-sizes-right">
                                    <p>XS</p>
                                    <p>S</p>
                                    <p>M</p>
                                    <p>L</p>
                                    <p>XL</p>
                                    <p>XXL</p>
                                    <p>XXXL</p>
                                </div>
                            </div>
                            <div class="ad-merch-colors">
                                <p class="text-2">Available Colours:</p>
                                <div class="ad-merch-colors-right">
                                    <p>Red</p>
                                    <p>Black</p>
                                </div>
                            </div>
                        </div>

                        <div class="ad-merch-right-bottom">
                            <div class="ad-merch-price">
                                <h1>Rs. 2200.00</h1>
                                <p class="text-4 color-green">12% of this product is for the fundraiser</p>
                            </div>
                            <div class="ad-merch-stock">
                                <p>Initial Stock: 230 units</p>
                                <p>Current Stock: 210 units</p>
                            </div>
                            <div class="ad-merch-full-description">
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
                                    Maddfw</p>
                            </div>
                            <div class="ad-merch-button-list">
                                <button class="button-1-green">
                                    Verify
                                </button>
                                <!-- <button class="button-2-yellow" onclick="window.location.href = '#all-merchs'">
                                    Pending
                                </button> -->
                                <button class="button-3-red">
                                    Reject
                                </button>
                               
                            </div>


                        </div>

                    </div>
                </div>

            </div>

        </div>



    </main>
    <script src="<?php echo URLROOT ?>/public/js/material.js"></script>
    <?php require APPROOT . '/views/includes/footer.php' ?>
</body>

</html>