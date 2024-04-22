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

</head>

<body>
    <?php require APPROOT . '/views/includes/header.php' ?>
    <main>
        <div class="select-user-container flx-dir-row">
            <div class="flx-1 flx-dir-col user-individual">
                <div class="select-user-img-con">
                    <img src="<?php echo URLROOT ?>/public/Assets/images/user-individual.png" alt="">
                </div>
                <div class="select-user-button-con">
                    <button class="main-white-button" onclick="window.location.href = '<?php echo URLROOT ?>/Individual'">Individual Signup</button>
                </div>
                <ul class="select-user-function-con ">
                    <li  >
                        <img src="<?php echo URLROOT ?>/public/Assets/images/check.png" alt="">
                        <p class="text-2">
                            Donate
                        </p>
                    </li>
                    <li  >
                        <img src="<?php echo URLROOT ?>/public/Assets/images/check.png" alt="">
                        <p class="text-2">
                        Monetary fundraise
                        </p>
                    </li>
                    <li  >
                        <img src="<?php echo URLROOT ?>/public/Assets/images/check.png" alt="">
                        <p class="text-2">
                        Material fundraise
                        </p>
                    </li>
                    <li  >
                        <img src="<?php echo URLROOT ?>/public/Assets/images/check.png" alt="">
                        <p class="text-2">
                        Upload Stories
                      </p>
                    </li>
                    
                </ul>

            </div>
            <div class="flx-1 flx-dir-col user-organisation">
                <div class="select-user-img-con">
                    <img src="<?php echo URLROOT ?>/public/Assets/images/user-organisation.png" alt="">
                </div>
                <div class="select-user-button-con">
                    <button class="main-color-button text-2" onclick="window.location.href = '<?php echo URLROOT ?>/Organisation'">Organisation Signup</button>
                </div>
                <ul class="select-user-function-con ">
                    <li  >
                        <img src="<?php echo URLROOT ?>/public/Assets/images/check.png" alt="">
                        <p class="text-2">
                            Donate
                        </p>
                    </li>
                    <li  >
                        <img src="<?php echo URLROOT ?>/public/Assets/images/check.png" alt="">
                        <p class="text-2">
                        Monetary fundraise
                        </p>
                    </li>
                    <li  >
                        <img src="<?php echo URLROOT ?>/public/Assets/images/check.png" alt="">
                        <p class="text-2">
                        Material fundraise
                        </p>
                    </li>
                    <li  >
                        <img src="<?php echo URLROOT ?>/public/Assets/images/check.png" alt="">
                        <p class="text-2">
                        Sell merchandise
                      </p>
                    </li>
                    <li  >
                        <img src="<?php echo URLROOT ?>/public/Assets/images/check.png" alt="">
                        <p class="text-2">
                        Upload Stories
                      </p>
                    </li>
                    
                </ul>

            </div>
        </div>
    </main>
<script src="<?php echo URLROOT ?>/public/js/header.js"></script>

</body>

</html>