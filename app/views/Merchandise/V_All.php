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
    <h1>Buy products to help fundraise..</h1>
    <div class="home-fundraisers">
      <?php
      foreach ($data as $merch) {
        ?>

        <article class="home-fundraiser-card"
          onclick="window.location.href = href='<?php echo URLROOT ?>/Fundraiser/fundraiser/<?php echo $merch->id; ?>'">
          <div class="home-fundraiser-img">
            <img src="<?php echo URLROOT . $merch->merch_image ?>" alt="image">
          </div>
          <div class="home-fundraiser-below">
              <div class="right-fade-effect"> </div>
              <div class="home-fundraiser-below-container">
                <div class="fundraiser-donee-name">
          
                  <i class="fa-solid fa-hand-holding-heart text-3"></i>
                  
                  <p class="text-4">
                    <?php echo  $merch->fundraiser_title; ?>
                  </p>
                </div>
                <p class="text-1">
                  <?php echo $merch->product_name; ?>
                </p>
                <div class="fundraiser-small-progress-bar-container">
                  <div class="fundraiser-small-progress-bar">
                    <div class="fundraiser-small-progress" style="width: <?php echo $merch->progress . '%' ?> ">
                    </div>
                  </div>
                </div>
                <p class="text-1">Rs.
                  <?php echo $merch->price; ?> raised
                </p>
              </div>
            </div>

        </article>
        <?php
      }
      ?>
   

    </div>
  </main>
  <?php require APPROOT . '/views/includes/footer.php' ?>
  <script src="<?php echo URLROOT ?>/public/js/header.js"></script>

</body>

</html>