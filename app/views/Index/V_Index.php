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
          <button class="highlighted-button" onclick="window.location.href = '<?php echo URLROOT ?>/Fundraiser'">Donate
            Now!</button>
        </div>
        <div class="right-home-box">
          <img src="public/Assets/images/child.jpg" alt="img">
        </div>

      </div>
      <h1>Featured Topics..</h1>
      <div class="home-fundraisers">
        <?php
        foreach ($data[0] as $fundraiser) {
          ?>
          <article class="home-fundraiser-card"
            onclick="window.location.href = href='<?php echo URLROOT ?>/Fundraiser/fundraiser/<?php echo $fundraiser->fundraiser_id; ?>'">
            <div class="home-fundraiser-img">
              <img src="<?php echo URLROOT . $fundraiser->img ?>" alt="image">
            </div>
            <div class="home-fundraiser-below">
              <div class="right-fade-effect"> </div>
              <div class="home-fundraiser-below-container">
                <div class="fundraiser-donee-name">
                  <?php
                  if ($fundraiser->type == "individual") { ?>
                    <i class="fa-solid fa-user fa-sm text-3"></i>
                  <?php } elseif ($fundraiser->type == "organisation") { ?>
                    <i class="fa-solid fa-building fa-sm text-3"></i>
                  <?php } ?>
                  <p class="text-4">
                    <?php echo ($fundraiser->username == $_SESSION['userName']) ? 'Mine' : $fundraiser->username; ?>
                  </p>
                </div>
                <p class="text-1">
                  <?php echo $fundraiser->title; ?>
                </p>
                <div class="fundraiser-small-progress-bar-container">
                  <div class="fundraiser-small-progress-bar">
                    <div class="fundraiser-small-progress" style="width: <?php echo $fundraiser->progress . '%' ?> ">
                    </div>
                  </div>
                </div>
                <p class="smallfont" >Rs.
                  <?php echo $fundraiser->amount_collected; ?> of Rs. <?php echo $fundraiser->amount; ?> raised
                </p>
              </div>
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
        <?php
        foreach ($data[1] as $story) {
          ?>
          <article class="home-story-card"
            onclick="window.location.href = href='<?php echo URLROOT ?>/Stories/Index#<?php echo $story->id; ?>'">
            <div class="home-story-img">
              <img src="<?php echo URLROOT . $story->image; ?>" alt="">
            </div>
            <div class="home-story-below">
              <div class="fundraiser-donee-name">
                <?php
                if ($story->type == "individual") { ?>
                  <i class="fa-solid fa-user fa-sm text-3"></i>
                <?php } elseif ($story->type == "organisation") { ?>
                  <i class="fa-solid fa-building fa-sm text-3"></i>
                <?php } ?>
                <p class="text-4">
                  <?php echo ($story->username == $_SESSION['userName']) ? 'Mine' : $story->username; ?>

                </p>
              </div>
              <p class="text-1">
                <?php echo $story->title; ?>
              </p>
            </div>
          </article>
          <?php
        }
        ?>


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