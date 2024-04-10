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
    <script src="https://kit.fontawesome.com/9e9a03ae37.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <?php require APPROOT . '/views/includes/header.php' ?>
    <?php require APPROOT . '/views/includes/side-bar.php' ?>


    <main>
        <h1 class="margin-bottom-0">Category</h1>
        <div class="category-container">
        <div class="category-row-1 pd-lf">
                <div class="category-row">
                    <div class="category">
                        <a href="<?php echo URLROOT ?>/Admin/documents/education">
                            <img src="<?php echo URLROOT ?>/public/Assets/images/categories/education.png" alt="">
                        </a>
                    </div>
                    <div class="category">
                        <a href="<?php echo URLROOT ?>/Admin/documents/sport">
                            <img src="<?php echo URLROOT ?>/public/Assets/images/categories/sport.png" alt="">
                        </a>
                    </div>
                    <div class="category">
                        <a href="<?php echo URLROOT ?>/Admin/documents/health">
                            <img src="<?php echo URLROOT ?>/public/Assets/images/categories/health.png" alt="">
                        </a>
                    </div>
                    <div class="category">
                        <a href="<?php echo URLROOT ?>/Admin/documents/housing">
                            <img src="<?php echo URLROOT ?>/public/Assets/images/categories/housing.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="category-row-2 pd-rt">
                <div class="category-row">
                    <div class="category">
                        <a href="<?php echo URLROOT ?>/Admin/documents/animals">
                            <img src="<?php echo URLROOT ?>/public/Assets/images/categories/animals.png" alt="">

                        </a>
                    </div>
                    <div class="category">
                        <a href="<?php echo URLROOT ?>/Admin/documents/disasters">
                            <img src="<?php echo URLROOT ?>/public/Assets/images/categories/disasters.png" alt="">
                        </a>
                    </div>
                    <div class="category">
                        <a href="<?php echo URLROOT ?>/Admin/documents/environment">
                            <img src="<?php echo URLROOT ?>/public/Assets/images/categories/environment.png" alt="">
                        </a>
                    </div>
                    <div class="category">
                        <a href="<?php echo URLROOT ?>/Admin/documents/community">
                            <img src="<?php echo URLROOT ?>/public/Assets/images/categories/community.png" alt="">
                        </a>
                    </div>
                </div>

            </div>
        </div>





    </main>

</body>

</html>