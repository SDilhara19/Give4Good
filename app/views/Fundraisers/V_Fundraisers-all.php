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
    <h1>Featured Topics..</h1>
    <div class="home-fundraisers">
      <?php
      foreach ($data as $fundraiser) {
        ?>

        <article class="home-fundraiser-card"
          onclick="window.location.href = href='<?php echo URLROOT ?>/Fundraiser/fundraiser/<?php echo $fundraiser->fundraiser_id; ?>'">
          <div class="home-fundraiser-img">
            <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/fundraiser1.jpg" alt="image">
          </div>
          <div class="home-fundraiser-below">
            <div class="fundraiser-donee-name">
              <?php
              if ($fundraiser->type == "individual") { ?>
                <i class="fa-solid fa-user fa-sm text-3"></i>
              <?php } elseif ($fundraiser->type == "organisation") { ?>
                <i class="fa-solid fa-building fa-sm text-3"></i>
              <?php } ?>

              <p class="text-4">
                <?php echo $fundraiser->username; ?>
              </p>
            </div>
            <p class="text-1">
              <?php echo $fundraiser->title; ?>
            </p>
            <div class="fundraiser-small-progress-bar-container">
                <div class="fundraiser-small-progress-bar">
                    <div class="fundraiser-small-progress" style="width: <?php echo $fundraiser->progress . '%;' ?> "></div>
                </div>
                </div>
            <p class="text-1">
              <?php echo "Rs. " . $fundraiser->amount . " raised"; ?>
            </p>
          </div>

        </article>
        <?php
      }
      ?>
      <article class="home-fundraiser-card">
        <div class="home-fundraiser-img">
          <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/fundraiser1.jpg" alt="image">
        </div>
        <div class="home-fundraiser-below">
          <div class="fundraiser-donee-name">
            <i class="fa-solid fa-building fa-sm text-3"></i>
            <p class="text-4">Manusath Derana</p>
          </div>
          <p class="text-1">Help Andrew to travel for work</p>
          <div class="progress-bar text-4">
            progress-bar
          </div>
          <p class="text-1">Rs.20 000 raised</p>
        </div>
      </article>
      <article class="home-fundraiser-card">
        <div class="home-fundraiser-img">
          <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/fundraiser1.jpg" alt="image">
        </div>
        <div class="home-fundraiser-below">
          <div class="fundraiser-donee-name">
            <i class="fa-solid fa-building fa-sm text-3"></i>
            <p class="text-4">Manusath Derana</p>
          </div>
          <p class="text-1">Help Andrew to travel for work</p>
          <div class="progress-bar text-4">
            progress-bar
          </div>
          <p class="text-1">Rs.20 000 raised</p>
        </div>
      </article>
      <article class="home-fundraiser-card">
        <div class="home-fundraiser-img">
          <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/fundraiser1.jpg" alt="image">
        </div>
        <div class="home-fundraiser-below">
          <div class="fundraiser-donee-name">
            <i class="fa-solid fa-building fa-sm text-3"></i>
            <p class="text-4">Manusath Derana</p>
          </div>
          <p class="text-1">Help Andrew to travel for work</p>
          <div class="progress-bar text-4">
            progress-bar
          </div>
          <p class="text-1">Rs.20 000 raised</p>
        </div>
      </article>
      <article class="home-fundraiser-card">
        <div class="home-fundraiser-img">
          <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/fundraiser1.jpg" alt="image">
        </div>
        <div class="home-fundraiser-below">
          <div class="fundraiser-donee-name">
            <i class="fa-solid fa-building fa-sm text-3"></i>
            <p class="text-4">Manusath Derana</p>
          </div>
          <p class="text-1">Help Andrew to travel for work</p>
          <div class="progress-bar text-4">
            progress-bar
          </div>
          <p class="text-1">Rs.20 000 raised</p>
        </div>
      </article>
      <article class="home-fundraiser-card">
        <div class="home-fundraiser-img">
          <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/fundraiser1.jpg" alt="image">
        </div>
        <div class="home-fundraiser-below">
          <div class="fundraiser-donee-name">
            <i class="fa-solid fa-building fa-sm text-3"></i>
            <p class="text-4">Manusath Derana</p>
          </div>
          <p class="text-1">Help Andrew to travel for work</p>
          <div class="progress-bar text-4">
            progress-bar
          </div>
          <p class="text-1">Rs.20 000 raised</p>
        </div>




      </article>
      <article class="home-fundraiser-card">
        <div class="home-fundraiser-img">
          <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/fundraiser1.jpg" alt="image">
        </div>
        <div class="home-fundraiser-below">
          <div class="fundraiser-donee-name">
            <i class="fa-solid fa-building fa-sm text-3"></i>
            <p class="text-4">Manusath Derana</p>
          </div>
          <p class="text-1">Help Andrew to travel for work</p>
          <div class="progress-bar text-4">
            progress-bar
          </div>
          <p class="text-1">Rs.20 000 raised</p>
        </div>
      </article>
      <article class="home-fundraiser-card">
        <div class="home-fundraiser-img">
          <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/fundraiser1.jpg" alt="image">
        </div>
        <div class="home-fundraiser-below">
          <div class="fundraiser-donee-name">
            <i class="fa-solid fa-building fa-sm text-3"></i>
            <p class="text-4">Manusath Derana</p>
          </div>
          <p class="text-1">Help Andrew to travel for work</p>
          <div class="progress-bar text-4">
            progress-bar
          </div>
          <p class="text-1">Rs.20 000 raised</p>
        </div>
      </article>
      <article class="home-fundraiser-card">
        <div class="home-fundraiser-img">
          <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/fundraiser1.jpg" alt="image">
        </div>
        <div class="home-fundraiser-below">
          <div class="fundraiser-donee-name">
            <i class="fa-solid fa-building fa-sm text-3"></i>
            <p class="text-4">Manusath Derana</p>
          </div>
          <p class="text-1">Help Andrew to travel for work</p>
          <div class="progress-bar text-4">
            progress-bar
          </div>
          <p class="text-1">Rs.20 000 raised</p>
        </div>
      </article>
      <article class="home-fundraiser-card">
        <div class="home-fundraiser-img">
          <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/fundraiser1.jpg" alt="image">
        </div>
        <div class="home-fundraiser-below">
          <div class="fundraiser-donee-name">
            <i class="fa-solid fa-building fa-sm text-3"></i>
            <p class="text-4">Manusath Derana</p>
          </div>
          <p class="text-1">Help Andrew to travel for work</p>
          <div class="progress-bar text-4">
            progress-bar
          </div>
          <p class="text-1">Rs.20 000 raised</p>
        </div>
      </article>
      <article class="home-fundraiser-card">
        <div class="home-fundraiser-img">
          <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/fundraiser1.jpg" alt="image">
        </div>
        <div class="home-fundraiser-below">
          <div class="fundraiser-donee-name">
            <i class="fa-solid fa-building fa-sm text-3"></i>
            <p class="text-4">Manusath Derana</p>
          </div>
          <p class="text-1">Help Andrew to travel for work</p>
          <div class="progress-bar text-4">
            progress-bar
          </div>
          <p class="text-1">Rs.20 000 raised</p>
        </div>




      </article>
      <article class="home-fundraiser-card">
        <div class="home-fundraiser-img">
          <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/fundraiser1.jpg" alt="image">
        </div>
        <div class="home-fundraiser-below">
          <div class="fundraiser-donee-name">
            <i class="fa-solid fa-building fa-sm text-3"></i>
            <p class="text-4">Manusath Derana</p>
          </div>
          <p class="text-1">Help Andrew to travel for work</p>
          <div class="progress-bar text-4">
            progress-bar
          </div>
          <p class="text-1">Rs.20 000 raised</p>
        </div>
      </article>
      <article class="home-fundraiser-card">
        <div class="home-fundraiser-img">
          <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/fundraiser1.jpg" alt="image">
        </div>
        <div class="home-fundraiser-below">
          <div class="fundraiser-donee-name">
            <i class="fa-solid fa-building fa-sm text-3"></i>
            <p class="text-4">Manusath Derana</p>
          </div>
          <p class="text-1">Help Andrew to travel for work</p>
          <div class="progress-bar text-4">
            progress-bar
          </div>
          <p class="text-1">Rs.20 000 raised</p>
        </div>
      </article>
      <article class="home-fundraiser-card">
        <div class="home-fundraiser-img">
          <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/fundraiser1.jpg" alt="image">
        </div>
        <div class="home-fundraiser-below">
          <div class="fundraiser-donee-name">
            <i class="fa-solid fa-building fa-sm text-3"></i>
            <p class="text-4">Manusath Derana</p>
          </div>
          <p class="text-1">Help Andrew to travel for work</p>
          <div class="progress-bar text-4">
            progress-bar
          </div>
          <p class="text-1">Rs.20 000 raised</p>
        </div>
      </article>
      <article class="home-fundraiser-card">
        <div class="home-fundraiser-img">
          <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/fundraiser1.jpg" alt="image">
        </div>
        <div class="home-fundraiser-below">
          <div class="fundraiser-donee-name">
            <i class="fa-solid fa-building fa-sm text-3"></i>
            <p class="text-4">Manusath Derana</p>
          </div>
          <p class="text-1">Help Andrew to travel for work</p>
          <div class="progress-bar text-4">
            progress-bar
          </div>
          <p class="text-1">Rs.20 000 raised</p>
        </div>
      </article>

    </div>
  </main>
  <?php require APPROOT . '/views/includes/footer.php' ?>
  <script src="<?php echo URLROOT ?>/public/js/header.js"></script>

</body>

</html>