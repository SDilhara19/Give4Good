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
              <p class="progress-text-hori">Residential Details</p>
            </div>
            <div class="progress-step-hori">
              <div class="progress-hori"></div>
              <div class="progress-mark-hori"></div>
              <p class="progress-text-hori">Bank Details</p>
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
  <?php require APPROOT . '/views/Fundraisers/fundraiser_includes/form-2.php' ?>
  <?php require APPROOT . '/views/Fundraisers/fundraiser_includes/form-3.php' ?>

         
       

        </form>
      </div>
    </div>
  </main>
  <script type="text/javascript">
    var images = [];

    function image_select() {
      console.log("select");
      var image = document.getElementById('fundraiser_image').files;
      console.log(image)
      for (var i = 0; i < image.length; i++) {
        if (check_duplicate(image[i].name)) {
          images.push({
            "name": image[i].name,
            "url": URL.createObjectURL(image[i]),
            "file": image[i],
          });
        }
        else {
          alert(image[i].name + " is already added");
        }

      }
      // document.getElementById('input_image').reset();/\
      console.log(images)
      document.getElementById('fundraiser_image').value = "";
      document.getElementById("fund-images-box").innerHTML = image_show()
      console.log("*****************")
      console.log(images)

    }

    function image_show() {
      var image = "";
      images.forEach((i) => {
        image += `<div class="fund-images-con">
                      <img src="`+ i.url + `" alt="">
                      <span onclick="delete_image(`+ images.indexOf(i) + `)">&times;</span>
                    </div>`;
      })
      return image;
    }

    function delete_image(e) {
      images.splice(e, 1);
      document.getElementById('fund-images-box').innerHTML = image_show();
    }

    function check_duplicate(name) {
      var image = true;
      if (images.length > 0) {
        for (e = 0; e < images.length; e++) {
          if (images[e].name == name) {
            image = false;
            break;
          }
        }
      }
      return image
    }
  
 
</script>

  <?php require APPROOT . '/views/includes/footer.php' ?>
  <script src="<?php echo URLROOT ?>/public/js/header.js"></script>
  <script src="<?php echo URLROOT ?>/public/js/multistep-form.js"></script>
  <script>setupImagePreview("#birth_certificate", "#birth_certificate_preview");</script>
</body>

</html>