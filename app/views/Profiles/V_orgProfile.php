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
    <?php require APPROOT . '/views/includes/orgProfileSideBar.php' ?>
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
                <img class="logo_img" src="<?php echo URLROOT ?>/public/Assets/images/LogoBlack.png" alt="">
                </div>
                <div class="right-container">
                  <table class="table-profile">
                    <tr>
                        <td>Name :</td>
                        <td>Rotract Club</td>
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
                    <tr>
                      <td>President - Name :</td>
                      <td>SA Silva</td>
                    </tr>
                    <tr>
                      <td>President - Email :</td>
                      <td>silva1@gmail.com</td>
                    </tr>
                    <tr>
                      <td>President - Contact :</td>
                      <td>0784512365</td>
                    </tr>
                    <tr>
                      <td>Treasurer - Name :</td>
                      <td>K Liyange</td>
                    </tr>
                    <tr>
                      <td>Treasurer - Email :</td>
                      <td>liyanage23@gmail.com</td>
                    </tr>
                    <tr>
                      <td>Treasurer - Contact :</td>
                      <td>0774548752</td>
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
     
  
   