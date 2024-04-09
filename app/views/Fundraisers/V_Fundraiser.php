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
                        <i class="fa-solid fa-chevron-left fa-2xl" style="font-size: 3em;" onclick="showPrevImage()"></i>
                    </div>
                    <div class="fundraiser-image">

                        <img id="current-image" src="<?php echo URLROOT . $data['images'][0]->img ?>" alt="image">
                    </div>
                    <div class="right-arrow">
                        <i class="fa-solid fa-chevron-right fa-2xl" onclick="showNextImage()" style="font-size: 3em;"></i>
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
                    <p class="text-3">
                    <?php echo $data['fundraiser'][0]->address; ?>
                    </p>
                </div>
                <div class="fundriaser-description">
                    <p class="text-1">
                        <?php echo $data['fundraiser'][0]->story; ?>
                    </p>
                </div>


            </div>

            <div class="fundraiser-right">
                <div class="fundraiser-progress-bar-container">
                    <div class="fundraiser-progress-bar">
                        <div class="fundraiser-progress"
                            style="width: <?php echo $data['fundraiser'][0]->progress . '%' ?>"></div>
                    </div>
                </div>
                <div class="fundraiser-amount">
                    <p class="text-2">
                        <?php echo $data['fundraiser'][0]->amount_collected; ?>
                    </p>
                    <p class="text-3">raised of
                        <?php echo $data['fundraiser'][0]->amount; ?>
                    </p>
                </div>


                <div class="fundraiser-button-list">

                    <button
                        onclick="window.location.href = '<?php echo URLROOT ?>/Donate/pay/<?php echo $data['fundraiser'][0]->fundraiser_id; ?>'"
                        class="main-color-button">
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
        <?php
        if (!empty($data['merchandise'])) {
            require_once APPROOT . '/views/fundraisers/merchandise.php';
        }
        ?>


        <?php
        if (!empty($data['materials'])) {
            require_once APPROOT . '/views/fundraisers/material.php';
        }
        ?>


       

    </main>
    <?php require APPROOT . '/views/includes/footer.php' ?>

    <script>
            var currentImageIndex = 0;
            var images = <?php echo json_encode($data['images']); ?>;

            function showNextImage() {
                currentImageIndex = (currentImageIndex + 1) % images.length;
                document.getElementById('current-image').src = "<?php echo URLROOT ?>" + images[currentImageIndex].img;
            }

            function showPrevImage() {
                currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
                document.getElementById('current-image').src = "<?php echo URLROOT ?>" + images[currentImageIndex].img;
            }
        </script>
    <script src="<?php echo URLROOT ?>/public/js/header.js"></script>

</body>

</html>