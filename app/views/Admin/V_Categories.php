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
  <script src="https://kit.fontawesome.com/9e9a03ae37.js" crossorigin="anonymous"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <?php require APPROOT . '/views/includes/admin-header.php' ?>

  <?php require APPROOT . '/views/includes/admin-dashboard.php' ?>


    <main class="admin-category">
        <h1 class="margin-bottom-0" style="margin-bottom: 0;">Organisation Category</h1>
        <p class="text-2">Add or remove required documents when starting a fundraiser by an Organisation</p>
        <div class="category-container">
        <div class="category-row-1 pd-lf">
                <div class="category-row">
                    <div class="category">
                        <a href="<?php echo URLROOT ?>/Admin/documents/organisation/education">
                            <img src="<?php echo URLROOT ?>/public/Assets/images/categories/education.png" alt="">
                        </a>
                    </div>
                    <div class="category">
                        <a href="<?php echo URLROOT ?>/Admin/documents/organisation/sport">
                            <img src="<?php echo URLROOT ?>/public/Assets/images/categories/sport.png" alt="">
                        </a>
                    </div>
                    <div class="category">
                        <a href="<?php echo URLROOT ?>/Admin/documents/organisation/health">
                            <img src="<?php echo URLROOT ?>/public/Assets/images/categories/health.png" alt="">
                        </a>
                    </div>
                    <div class="category">
                        <a href="<?php echo URLROOT ?>/Admin/documents/organisation/housing">
                            <img src="<?php echo URLROOT ?>/public/Assets/images/categories/housing.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="category-row-2 pd-rt">
                <div class="category-row">
                    <div class="category">
                        <a href="<?php echo URLROOT ?>/Admin/documents/organisation/animals">
                            <img src="<?php echo URLROOT ?>/public/Assets/images/categories/animals.png" alt="">

                        </a>
                    </div>
                    <div class="category">
                        <a href="<?php echo URLROOT ?>/Admin/documents/organisation/disasters">
                            <img src="<?php echo URLROOT ?>/public/Assets/images/categories/disasters.png" alt="">
                        </a>
                    </div>
                    <div class="category">
                        <a href="<?php echo URLROOT ?>/Admin/documents/organisation/environment">
                            <img src="<?php echo URLROOT ?>/public/Assets/images/categories/environment.png" alt="">
                        </a>
                    </div>
                    <div class="category">
                        <a href="<?php echo URLROOT ?>/Admin/documents/organisation/community">
                            <img src="<?php echo URLROOT ?>/public/Assets/images/categories/community.png" alt="">
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <h1 class="margin-bottom-0" style="margin-bottom: 0;">Individual Category</h1>
        <p class="text-2">Add or remove required documents when starting a fundraiser by an Individual</p>
        <div class="category-container">
        <div class="category-row-1 pd-lf">
                <div class="category-row">
                    <div class="category">
                        <a href="<?php echo URLROOT ?>/Admin/documents/individual/education">
                            <img src="<?php echo URLROOT ?>/public/Assets/images/categories/education.png" alt="">
                        </a>
                    </div>
                    <div class="category">
                        <a href="<?php echo URLROOT ?>/Admin/documents/individual/sport">
                            <img src="<?php echo URLROOT ?>/public/Assets/images/categories/sport.png" alt="">
                        </a>
                    </div>
                    <div class="category">
                        <a href="<?php echo URLROOT ?>/Admin/documents/individual/health">
                            <img src="<?php echo URLROOT ?>/public/Assets/images/categories/health.png" alt="">
                        </a>
                    </div>
                    <div class="category">
                        <a href="<?php echo URLROOT ?>/Admin/documents/individual/housing">
                            <img src="<?php echo URLROOT ?>/public/Assets/images/categories/housing.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
           
        </div>




    </main>

</body>

</html>