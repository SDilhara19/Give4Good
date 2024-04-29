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
  <?php if ($_SESSION['userType']=='individual') { 
  require APPROOT . '/views/includes/indvProfileSideBar.php';
}else if($_SESSION['userType']=='organisation'){ 
require APPROOT . '/views/includes/orgProfileSideBar.php';
} 
?> 
  <div class="main--content">
    <div class="header--wrapper">
      <div class="header--title">
        <i class="fa-solid fa-bars"></i>
        <span>Change Password</span>
      </div>
    </div>
    <div class="dashDetails">
      <section>
         <div class="card">
           <div class="mid_container">
             <form>
                <div class="form-group">
                  <label>Current Password</label>
                  <input type="password" id="password" name="c_password" placeholder="Current Password" required>
                </div>
                <div class="form-group">
                  <label>New Password </label>
                  <input type="password" id="password" name="n_password" placeholder="New Password" required>
                </div>
                <div class="form-group">
                  <label>Confirm New Password </label>
                  <input type="password" id="password" name="confirm_password" placeholder="Confirm New Password" required>
                </div>

                <div class="form-group">
                    <div>
                       <input type="submit" value="Save">
                       <input type="submit" value="Cancel">
                    </div>
                </div>
              </form>
            </div>
          </div>
      </section>
    </div>
  </div>
    <script src="<?php echo URLROOT ?>/public/js/header.js"></script>
  <?php require APPROOT . '/views/includes/footer.php' ?>
</body>

</html>