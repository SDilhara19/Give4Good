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
</head>
<body>
    <?php require APPROOT . '/views/includes/header.php' ?>
    <?php require APPROOT . '/views/includes/indvProfileSideBar.php' ?>
      <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
              <i class="fa-solid fa-bars"></i>
              <span>Your Profile</span>
            </div> 
        </div>
        <div class="dashDetails">
          <section>
            <div class="card">
                <div class="left-container">
                  <img class="profile_img" src="<?php echo URLROOT ?>/public/Assets/images/profile.jpeg" alt="">
                  <h3 class="gradienttext">John Doe</h3>
                  <h3 class="gradienttext">45</h3>
                </div>
                <div class="right-container">
                  <h3 class="gradienttext">Profile Details</h3>
                  <table class="table-profile">
                    <tr>
                      <td>Name :</td>
                      <td>John Doe</td>
                    </tr>
                    <tr>
                      <td>Age :</td>
                      <td>35</td>
                    </tr>
                    <tr>
                      <td>Mobile :</td>
                      <td>+91 XXXXXXXXXX</td>
                    </tr>
                    <tr>
                      <td>Email :</td>
                      <td>john@example.com</td>
                    </tr>
                    <tr>
                      <td>Address :</td>
                      <td>123 Main St, Anytown, USA</td>
                    </tr>
                  </table>
                  
                </div>
            </div>
          </section>
        </div>
      </div>
    <?php require APPROOT . '/views/includes/footer.php' ?>
</body>
</html>       
     
  
   