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
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="share.js" defer></script>
    <style>
        * {
            /* colours */
            --primary-color: #36CF97;
            /* --primary-color: #4EB790; */
            --secondary-color: #CFF5E7;
            --dark-green: #0E6F4B;
            --black-sub: #2E353E;
            --white-color: #FFFFFF;
            --red-color: #FC0606;
            --border-grey: #e1e4e8;
            --grey-color: #b0b1b2;
            --yellow-color: #D09705;
            --light-gradient: linear-gradient(180deg, #4EB790 0%, #20EBA0 100%);
            --dark-gradient: linear-gradient(180deg, #52BE96 0%, #31946F 53.12%, #0E6F4B 100%);
            --new-blue: #0C3461;
            /* text colors */
            --text-color: #2E353E;
        }

        .share-btn {
            background: var(--dark-gradient);
            /* border: none; */
            color: var(--white-color);
            /* position:; */
            /* border-radius: 50%; */
            /* width: 60px; */
            /* height: 60px; */
            /* font-size: 30px;
          padding-top: 2.5px;
          padding-right: 3px; */
            cursor: pointer;
            z-index: 2;
            /* font: var(--large-font-size); */
            font-weight: 700;
            border-radius: 100px;
            /* box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25); */
            margin: 1rem;
            width: 100%;
            letter-spacing: 0.02rem;
            padding-top: 1rem;
            padding-bottom: 1rem;
            border: none;
        }

        .share-options {
            position: absolute;
            bottom: 0%;
            left: 70%;
            z-index: 2500;
            transform: translate(-50%, -50%);
            width: auto;
            height: auto;
            transform-origin: border;
            transform: scale(0);
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
            background: var(--secondary-color);
            padding: 20px;
            transition: .5s;
            transition-delay: .5s;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        
            /* bottom: -8%; */
           
           height: 280px; }

        .share-options.active {
            transform: scale(1);
            transition-delay: 0s;
        }

        .title {
            /* opacity:0;
            transition:.5s;
            transition-delay:0s ; */
            font-size: 20px;
            text-transform: capitalize;
            border-bottom: 3px solid #fff;
            width: fit-content;
            padding: 0 20px 3px 0
        }

        .social-media {
            /* opacity:0;
            transition:.5s;
            transition-delay:0s ; */
            width: 100%;
            height: 120px;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            margin: 10px 0;
            justify-content: center;

        }

        .social-media-btn {
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #000;
            color: #fff;
            line-height: 50px;
            font-size: 25px;
            cursor: pointer;
            margin: 10px;
            text-align: center;


        }

        .social-media-btn:nth-child(1) {
            background: #25D366;
        }

        .social-media-btn:nth-child(2) {
            background: #1877F2;
        }

        .link-container {
            /* opacity:0;
            transition:.5s;
            transition-delay:0s ; */
            width: 100%;
            position: relative;
            height: 40px;
            display: flex;
            align-items: center;
            border-radius: 40px;
            background-color: #fff;
            overflow: hidden;
            padding: 0 10px;
            border: 1px solid var(--border-grey);
        }

        .link {
            width: 80%;
            height: 100%;
            line-height: 40px;
            color: #2E353E;

        }

        .copy-btn {
            position: absolute;
            right: 0;
            cursor: pointer;
            background: #2E353E;
            color: #ffffff;
            border: none;
            height: 100%;
            width: 30%;
            text-transform: capitalize;
            font-size: 16px;
        }

        .share-option.active .title,
        .share-option.active .social-media,
        .share-option.active .link-container {
            opacity: 1;
            transition: .5s;
            transition-delay: .5s;
        }
    </style>
</head>

<body>
    <?php require APPROOT . '/views/includes/header.php' ?>
    <?php require APPROOT . '/views/includes/side-bar.php' ?>
    <main>
        <?php if ($data['fundraiser'][0]->parent_funding==1){ ?>
            <img class='bg-img' src="<?php echo URLROOT ?>/public/Assets/images/parent_fundiing.png" alt="">
            <h1 style="margin-bottom: 0;">
            <?php echo $data['fundraiser'][0]->title; ?></h1>
            <div class="text-2" stlye="margin-top: 0; margin-bottom: 3rem;">Parent Fundraising</div>
        <?php }  else {?>
            <h1>
            <?php echo $data['fundraiser'][0]->title; ?>
        </h1>
            <?php } ?>
       
        <div class="fundraiser-container">
            <div class="fundraiser-left">
                <div class="fundraiser-image-container">
                    <div class="left-arrow">
                        <i class="fa-solid fa-chevron-left fa-2xl" style="font-size: 3em;"
                            onclick="showPrevImage()"></i>
                    </div>
                    <div class="fundraiser-image">

                        <img id="current-image" src="<?php echo URLROOT . $data['images'][0]->img ?>" alt="image">
                    </div>
                    <div class="right-arrow">
                        <i class="fa-solid fa-chevron-right fa-2xl" onclick="showNextImage()"
                            style="font-size: 3em;"></i>
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
                    <?php if ($data['fundraiser'][0]->anonymous == 1) { ?>
                        <div class="fundraiser-donee-name">
                            <i class="fas fa-user-secret"></i>

                            <p class="text-2">Anonymous </p>
                        </div>
                    <?php } else  if ($data['fundraiser'][0]->parent_funding==1){ ?>
                        <div class="fundraiser-count-row">
                        <div class="fundraiser-donee-name">
                                <i class="fa-solid fa-user"></i>
                            <p class="text-2">
                                <?php echo $data['fundraiser'][0]->username; ?>
                            </p>
                            
                        </div>
                       
                        <div class="fundraiser-donee-name">
                        <p class="text-2">
                                <?php echo $data['child'][0]->child_fullname; ?>
                            </p>
                        <i class="fa-solid fa-child"></i>
                          
                            
                        </div>
                        </div>
                        
                        <p class="text-3">
                            <?php echo $data['fundraiser'][0]->address; ?>
                        </p>
            <?php } 
                    else { ?>
                        <div class="fundraiser-donee-name">
                            <?php if ($data['fundraiser'][0]->type == 'organisation') { ?>
                                <i class="fa-solid fa-building"></i>

                            <?php }
                            if ($data['fundraiser'][0]->type == 'individual') { ?>
                                <i class="fa-solid fa-user"></i>

                            <?php } ?>
                            <p class="text-2">
                                <?php echo $data['fundraiser'][0]->username; ?>
                            </p>
                        </div>
                        <p class="text-3">
                            <?php echo $data['fundraiser'][0]->address; ?>
                        </p>

                    <?php }
                    ?>

                </div>
                <div class="fundriaser-description">
                    <p class="text-1">
                        <?php echo ucfirst($data['fundraiser'][0]->story); ?>
                    </p>
                </div>

              
                <div class="ad-merch-button-list">
                    <button class="button-3-red"
                        onclick="window.location.href = '<?php echo URLROOT ?>/Fundraiser/complaints'">Report</button>
                </div>
                <?php if ($data['fundraiser'][0]->parent_funding==1){?>
                    <div class="text-2" style="margin-top: 2rem;">A note from the child</div>
                    <div class="child-note">

                    <p class="text-1">
                        <?php echo ucfirst($data['child'][0]->dependent_note); ?>
                    </p>
                </div>
<?php  }?>

              
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
                    <?php
        if (!empty($data['merchandise'])) {?>
            <button class="main-dark-button" onclick="window.location.href = '#all-merchs'">
                        Buy Merch
                    </button>
      <?php  }
        ?>
                   

                    <button class="share-btn" id="shareButton"> Share
                        <i class="fa-solid fa-share-nodes"></i>
                    </button>
                    <div class="share-options">
                        <p class="title">Share</p>
                        <div class="social-media">
                            <button class="social-media-btn"><a
                                    href="https://api.whatsapp.com/send?phone=&text=Check out this link and help please... http://localhost/give4good/Fundraiser/fundraiser/<?php echo $data['fundraiser'][0]->fundraiser_id; ?>"
                                    onclick='shareViaWhatsApp()'><i class="fa-brands fa-whatsapp"></i></a></button>
                            <button class="social-media-btn"><a
                                    href="https://www.facebook.com/sharer.php?u=http://localhost/give4good/Fundraiser/fundraiser/<?php echo $data['fundraiser'][0]->fundraiser_id; ?>"
                                    onclick='shareViaFacebook()'><i class="fa-brands fa-facebook"></i></a></button>

                        </div>
                        <div class="link-container">
                            <p class="link">
                                http://localhost/give4good/Fundraiser/fundraiser/<?php echo $data['fundraiser'][0]->fundraiser_id; ?>
                            </p>
                            <button class="copy-btn" onclick='copyUrl()'>Copy</button>
                        </div>
                    </div>


                    <!-- <script src="share.js">
                        // document.getElementById("shareButton").addEventListener("click", function() {
                        //     // Call the share function defined in share.js
                        //     share();
                        // });

                    </script> -->

                    <?php
        if (!empty($data['materials'])) { ?>
            <button class="main-white-button" onclick="window.location.href = '#donations-we-need'">
                        Send Donations
                    </button>
     <?php   }
        ?>
                   
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
        if (!empty($data['materials']) || !empty($data['locations']) || !empty($data['map_locations'])) {
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
    <script src="<?php echo URLROOT ?>/public/js/share.js"></script>
    <script src="<?php echo URLROOT ?>/public/js/copy.js"></script>

</body>

</html>