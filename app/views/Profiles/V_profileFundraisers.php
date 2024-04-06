<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GIVE4GOOD</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/styles.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components/profile_style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/9e9a03ae37.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php require APPROOT . '/views/includes/header.php' ?>
  <?php require APPROOT . '/views/includes/indvProfileSideBar.php' ?>
  <div class="main--content">
    <div class="header--wrapper">
      <div class="header--title">
        <span>Your Fundraisers</span>
      </div>
    </div>

    <div class="dashDetails1">
      <div class="profile-fundraisers-container">
        <div class="profile-fundraiser-one">
          <div class="profile-fundraiser-img">
            <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/fundraiser1.jpg" alt="image">
          </div>
          <div class="profile-fundraiser-details">
          <p class="text-1">Help Andrew to travel for work</p>
              <div class="progress-bar text-4">
                progress-bar
              </div>
              <div class="progress-bar text-4">
                 Active
              </div>
              <p class="text-1">Rs.20 000 raised</p>
              </div>
        </div>
        <div class="profile-fundraiser-one"></div>
        <div class="profile-fundraiser-one"></div>
        <div class="profile-fundraiser-one"></div>
        <div class="IMG-CON">
          <img src="" alt="">
        </div>

      </div>
    </div>
  </div>
  <?php require APPROOT . '/views/includes/footer.php' ?>

</body>

</html>