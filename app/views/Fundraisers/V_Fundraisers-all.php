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
  <style>
    .search-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: rgb(237, 237, 237);

      /* margin-bottom: 20px;  */
    }

    .search-box {
      border-radius: 15px;
      display: flex;
      align-items: center;
      gap: 5px;
      padding: 4px 12px;
      margin-bottom: 8px;
      margin-left: auto;
    }

    .search-box i:hover {
      transform: scale(1.2);
    }

    .search-box input {
      border: 1px solid rgb(237, 237, 237);
    }
  </style>
</head>

<body>
  <?php require APPROOT . '/views/includes/header.php' ?>
  <?php require APPROOT . '/views/includes/side-bar.php' ?>
  <main>
    <h1>Fundraisers </h1>
    <div class="text-2" style="margin-bottom: 2rem;">Help to make their life better</div>

    <form>
     

    </form>




    <div class="home-fundraisers">
      <?php
      foreach ($data as $fundraiser) {
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
  </main>
  <!-- <script>
    var searchInput = document.getElementById("search");

    document.getElementById("searchForm").addEventListener("submit", function (event) {
      if (searchInput.value.trim() === "") {
        event.preventDefault(); // Prevent form submission
        window.location.reload(); // Reload the page
      }
    });
  </script> -->
  
  <?php require APPROOT . '/views/includes/footer.php' ?>
  <script src="<?php echo URLROOT ?>/public/js/header.js"></script>

</body>

</html>