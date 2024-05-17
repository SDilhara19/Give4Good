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

<body class="fundraiser-form-bg">
  <script src="<?php echo URLROOT ?>/public/js/form-image.js"></script>

  <?php require APPROOT . '/views/includes/header.php' ?>
  <?php require APPROOT . '/views/includes/side-bar.php' ?>
  <main>
    <div class="fundraiser-form-container">
      <div class="fundraiser-form-progress-bar">
        <div class="form-progress-bar-container-hori">
          <div class="form-inactive-progress-bar-container-hori">
            <div class="form-inactive-progress-bar-hori"></div>
            <div class="inactive-progress-mark-hori"></div>
          </div>
          <div class="form-progress-bar-hori">
            <div class="progress-step-hori">
              <div class="progress-hori active"></div>
              <div class="progress-mark-hori active"></div>
              <p class="progress-text-hori active">Fundraiser details</p>
            </div>
            <div class="progress-step-hori">
              <div class="progress-hori"></div>
              <div class="progress-mark-hori"></div>
              <p class="progress-text-hori">Verification</p>
            </div>
            <div class="progress-step-hori">
              <div class="progress-hori"></div>
              <div class="progress-mark-hori"></div>
              <p class="progress-text-hori">Materials</p>
            </div>
          </div>
        </div>
      </div>
      <div class="fundraiser-form-title">
        <p class="text-2"> A few steps away from starting your fundraiser</p>
      </div>
      <div class="fundraiser-form">
        <form action="" method="post" enctype="multipart/form-data" id="fundraiser-form">

          <?php require APPROOT . '/views/Fundraisers/fundraiser_includes/form-1.php' ?>
          <?php require APPROOT . '/views/Fundraisers/fundraiser_includes/form-1.2.php' ?>
          <?php require APPROOT . '/views/Fundraisers/fundraiser_includes/form-1.3.php' ?>
          <?php require APPROOT . '/views/Fundraisers/fundraiser_includes/form-2.php' ?>
          <?php require APPROOT . '/views/Fundraisers/fundraiser_includes/form-3.php' ?>




        </form>
      </div>
    </div>
  </main>

  <?php require APPROOT . '/views/includes/footer.php' ?>
  <script src="<?php echo URLROOT ?>/public/js/header.js"></script>
  <script src="<?php echo URLROOT ?>/public/js/multistep-form.js"></script>
    <!-- <script src="<?php echo URLROOT ?>/public/js/indv-fundraiser.js"></script> -->
    <script src="<?php echo URLROOT ?>/public/js/form-validation.js"></script>
  <script>setupImagePreview("#birth_certificate", "#birth_certificate_preview");</script>
</body>

</html>