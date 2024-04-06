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
  <div class="under-header">
    <?php require APPROOT . '/views/includes/side-bar.php' ?>

    <main>
    
    
    <div class="home-box">
        <div class="left-home-box">
          <p class="large-text">Join Us</p>
          <p class="medium-text">To make a</p>
          <p class="xlarge-text">Better World</p>
          <button class="highlighted-button"
            onclick="window.location.href = '<?php echo URLROOT ?>/Fundraiser/fundraiser'">Donate Now!</button>
        </div>
        <div class="right-home-box">
          <img src="public/Assets/images/child.jpg" alt="img">
        </div>

      </div>
      <h1>Featured Topics..</h1>
      <div class="home-fundraisers">
        <?php
        foreach ($data as $fundraiser) {
          ?>
          <article class="home-fundraiser-card"
            onclick="window.location.href = href='<?php echo URLROOT ?>/Fundraiser/fundraiser'">
            <div class="home-fundraiser-img">
              <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/fundraiser1.jpg" alt="image">
            </div>
            <div class="home-fundraiser-below">
              <div class="fundraiser-donee-name">
                <i class="fa-solid fa-building fa-sm text-3"></i>
                <p class="text-4">
                  <?php echo $fundraiser->username; ?>
                </p>
              </div>
              <p class="text-1">
                <?php echo $fundraiser->title; ?>
              </p>
              <div class="progress-bar text-4">
                progress-bar
              </div>
              <p class="text-1">Rs.
                <?php echo $fundraiser->amount; ?> raised
              </p>
            </div>




          </article>


          <?php
        }
        ?>
      </div>

      <div class="more-button">
        <button class="main-color-button" onclick="window.location.href = '<?php echo URLROOT ?>/fundraiser'"> More>>
        </button>
      </div>

      <h1>Stories</h1>

      <div class="home-stories">

        <article class="home-story-card">
          <div class="home-story-img">
            <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/Stories/Story1.jpeg" alt="">
          </div>
          <div class="home-story-below">
            <div class="fundraiser-donee-name">
              <i class="fa-solid fa-building fa-sm text-3"></i>
              <p class="text-4">LEO Club UOC</p>
            </div>
            <p class="text-1">Aarogya 6.0</p>
          </div>
        </article>
        <article class="home-story-card">
          <div class="home-story-img">
            <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/Stories/Story2.png" alt="">
          </div>
          <div class="home-story-below">
            <div class="fundraiser-donee-name">
              <i class="fa-solid fa-building fa-sm text-3"></i>
              <p class="text-4">John Dave</p>
            </div>
            <p class="text-1">In need of a O+ kidney</p>
          </div>
        </article>
        <article class="home-story-card">
          <div class="home-story-img">
            <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/Stories/Story3.jpeg" alt="">
          </div>
          <div class="home-story-below">
            <div class="fundraiser-donee-name">
              <i class="fa-solid fa-building fa-sm text-3"></i>
              <p class="text-4">LEO Club UOC</p>
            </div>
            <p class="text-1">Sahurda Wiyamana</p>
          </div>




        </article>
        <article class="home-story-card">
          <div class="home-story-img">
            <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/Stories/Story4.jpeg" alt="">
          </div>
          <div class="home-story-below">
            <div class="fundraiser-donee-name">
              <i class="fa-solid fa-building fa-sm text-3"></i>
              <p class="text-4">LEO Club UOC</p>
            </div>
            <p class="text-1">Nisagini 6.0</p>
          </div>

        </article>

      </div>

      <div class="more-button">
        <button class="main-color-button"
          onclick="window.location.href = '<?php echo URLROOT ?>/Stories'">More>></button>
      </div>

    </main>

  </div>



  <?php require APPROOT . '/views/includes/footer.php' ?>
</body>
<script src="<?php echo URLROOT ?>/public/js/header.js"></script>


</html>