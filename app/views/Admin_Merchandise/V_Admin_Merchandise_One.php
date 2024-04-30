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
<<<<<<< HEAD
<<<<<<< HEAD
    <?php require APPROOT . '/views/includes/admin-header.php' ?>
    <?php require APPROOT . '/views/includes/admin-dashboard.php' ?>


    <main class="admin-merchandise">
        <h1 class="margin-bottom-0">Merchandise:
            <?php if (isset($data['fundraiser']) && is_array($data['fundraiser']) && count($data['fundraiser']) > 0 && isset($data['fundraiser'][0]->title)): ?>
                <h1 class="margin-bottom-0">Merchandise: <?php echo $data['fundraiser'][0]->title; ?></h1>
            <?php endif; ?>
        </h1>
        <div class="ad-all-merchs" id="all-merchs">
            <div class="ad-fundraiser-merch">
                <h2><?php echo $data['merchandise'][0]->product_name; ?></h2>
                <div class="fundraiser-ad-merch-container">
                    <div class="fundraiser-ad-merch-left">
                        <div class="ad-merch-img-container">
                            <img src="<?php echo URLROOT . $data['images'][0]->img ?>" alt="image">
                        </div>
                    </div>
                    <div class="ad-fundraiser-merch-right">
                        <div class="ad-merch-right-bottom">
                            <div class="ad-merch-price">
                                <h1>Price: <?php echo $data['merchandise'][0]->price; ?></h1>
                                <p class="text-4 color-green"><?php echo $data['merchandise'][0]->percentage . '%' ?> of
                                    this product is for the fundraiser</p>
                            </div>
                            <div class="ad-merch-stock">
                                <p>Initial Stock: <?php echo $data['merchandise'][0]->total_quantity; ?></p>
                                <p>Current Stock: <?php echo $data['merchandise'][0]->current_stock; ?></p>
                            </div>
                            <div class="ad-merch-full-description">
                                <p class="text-4"> <?php echo $data['merchandise'][0]->description; ?></p>
                            </div>
                            <div class="ad-merch-button-list">
                                <?php if ( $data['merchandise'][0]->status == 'Deactive') { ?>
                                    <button onclick='if(window.confirm("Are you sure you want to verify? <?php echo $data['merchandise'][0]->id ?>")) {
            window.open("<?php echo URLROOT ?>/Admin_Merchandise/setActive/<?php echo $data['merchandise'][0]->id ?>");
        }' class="button-1-green">Verify</button>
                                <?php } elseif ($data['merchandise'][0]->status == 'Active') { ?>
                                    <button onclick='if(window.confirm("Are you sure you want to verify? <?php echo $data['merchandise'][0]->id ?>")) {
            window.open("<?php echo URLROOT ?>/Admin_Merchandise/setDeactive/<?php echo $data['merchandise'][0]->id ?>");
        }' class="button-3-red">Reject</button>
                                <?php } elseif ($data['merchandise'][0]->status == 'Pending') { ?>
                                    <button onclick='if(window.confirm("Are you sure you want to verify? <?php echo $data['merchandise'][0]->id ?>")) {
            window.open("<?php echo URLROOT ?>/Admin_Merchandise/setDeactive/<?php echo $data['merchandise'][0]->id ?>");
        }' class="button-3-red">Reject</button>
        <button onclick='if(window.confirm("Are you sure you want to verify? <?php echo $data['merchandise'][0]->id ?>")) {
            window.open("<?php echo URLROOT ?>/Admin_Merchandise/setActive/<?php echo $data['merchandise'][0]->id ?>");
        }'' class="button-1-green">Verify</button>
                                <?php } ?>
                            </div>
=======
<?php require APPROOT . '/views/includes/admin-header.php' ?>
=======
    <?php require APPROOT . '/views/includes/admin-header.php' ?>
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
    <?php require APPROOT . '/views/includes/admin-dashboard.php' ?>


    <main class="admin-merchandise">
        <h1 class="margin-bottom-0">Merchandise:
            <?php if (isset($data['fundraiser']) && is_array($data['fundraiser']) && count($data['fundraiser']) > 0 && isset($data['fundraiser'][0]->title)): ?>
                <h1 class="margin-bottom-0">Merchandise: <?php echo $data['fundraiser'][0]->title; ?></h1>
            <?php endif; ?>
        </h1>
        <div class="ad-all-merchs" id="all-merchs">
            <div class="ad-fundraiser-merch">
                <h2><?php echo $data['merchandise'][0]->product_name; ?></h2>
                <div class="fundraiser-ad-merch-container">
                    <div class="fundraiser-ad-merch-left">
                        <div class="ad-merch-img-container">
                            <img src="<?php echo URLROOT . $data['images'][0]->img ?>" alt="image">
                        </div>
                    </div>
                    <div class="ad-fundraiser-merch-right">
                        <div class="ad-merch-right-bottom">
                            <div class="ad-merch-price">
                                <h1>Price: <?php echo $data['merchandise'][0]->price; ?></h1>
                                <p class="text-4 color-green"><?php echo $data['merchandise'][0]->percentage . '%' ?> of
                                    this product is for the fundraiser</p>
                            </div>
                            <div class="ad-merch-stock">
                                <p>Initial Stock: <?php echo $data['merchandise'][0]->total_quantity; ?></p>
                                <p>Current Stock: <?php echo $data['merchandise'][0]->current_stock; ?></p>
                            </div>
                            <div class="ad-merch-full-description">
                                <p class="text-4"> <?php echo $data['merchandise'][0]->description; ?></p>
                            </div>
                            <div class="ad-merch-button-list">
                                <?php if ( $data['merchandise'][0]->status == 'Deactive') { ?>
                                    <button onclick='if(window.confirm("Are you sure you want to verify? <?php echo $data['merchandise'][0]->id ?>")) {
            window.open("<?php echo URLROOT ?>/Admin_Merchandise/setActive/<?php echo $data['merchandise'][0]->id ?>");
        }' class="button-1-green">Verify</button>
                                <?php } elseif ($data['merchandise'][0]->status == 'Active') { ?>
                                    <button onclick='if(window.confirm("Are you sure you want to verify? <?php echo $data['merchandise'][0]->id ?>")) {
            window.open("<?php echo URLROOT ?>/Admin_Merchandise/setDeactive/<?php echo $data['merchandise'][0]->id ?>");
        }' class="button-3-red">Reject</button>
                                <?php } elseif ($data['merchandise'][0]->status == 'Pending') { ?>
                                    <button onclick='if(window.confirm("Are you sure you want to verify? <?php echo $data['merchandise'][0]->id ?>")) {
            window.open("<?php echo URLROOT ?>/Admin_Merchandise/setDeactive/<?php echo $data['merchandise'][0]->id ?>");
        }' class="button-3-red">Reject</button>
        <button onclick='if(window.confirm("Are you sure you want to verify? <?php echo $data['merchandise'][0]->id ?>")) {
            window.open("<?php echo URLROOT ?>/Admin_Merchandise/setActive/<?php echo $data['merchandise'][0]->id ?>");
        }'' class="button-1-green">Verify</button>
                                <?php } ?>
                            </div>
<<<<<<< HEAD


>>>>>>> main
=======
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
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