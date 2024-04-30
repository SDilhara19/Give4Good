<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIVE4GOOD</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components/main-styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9e9a03ae37.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>

<body >
    <?php require APPROOT . '/views/includes/header.php' ?>
    <?php require APPROOT . '/views/includes/side-bar.php' ?>


    <main class="admin-merchandise" style="margin-right: 10rem; margin-left: 10rem">
        <h1 class="margin-bottom-0"><?php echo $data[0]->product_name ?></h1>
        <div class="ad-all-merchs" id="all-merchs">
            <div class="ad-fundraiser-merch " >
                <div  class="fundraiser-donee-name text-3"><i class="fa-solid fa-hand-holding-heart fa-l"></i>
                <div><?php echo $data[0]->fundraiser_title ?></div>

                </div>
                <div class="fundraiser-ad-merch-container">
                    <div class="fundraiser-ad-merch-left">
                        <div class="ad-merch-img-container">
                            <img src="<?php echo URLROOT . $data[0]->merch_image ?>" alt="merch-image">
                        </div>

                    </div>
                    <div class="ad-fundraiser-merch-right">
                        <div class="ad-merch-right-top">
                        <div class="ad-merch-full-description">
                                <p class="text-4"  style="text-align: justify"><?php echo $data[0]->description ?></p>
                            </div>
                        </div>

                        <div class="ad-merch-right-bottom">
                            <div class="ad-merch-price">
                                <h1><?php echo "Rs. " . $data[0]->price ?></h1>
                                <?php 
                                $percent_for_fund = round(($data[0]->amount_for_fund / $data[0]->price) * 100, 2); ?>
                                <p class="text-4 color-green"><?php echo ($percent_for_fund . "% ")?> of this product is for the fundraiser</p>
                            </div>

                           
                            <div class="ad-merch-button-list">
                                <button class="button-1-green" onclick="window.location.href = '<?php echo URLROOT ?>/Merchandise/buy/<?php echo $data[0]->id?>/<?php echo $data[0]->fundraiser_id; ?>'">
                                   Buy NOW
                                </button>
                                <!-- <button class="button-2-yellow" onclick="window.location.href = '#all-merchs'">
                                    Pending
                                </button> -->
                                <button class="button-3-red" onclick="window.location.href = '<?php echo URLROOT ?>/Fundraiser/fundraiser/<?php echo $data[0]->fundraiser_id; ?>'">
                                    View Fundraiser                                </button>

                            </div>


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