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
        <span>Edit Your Details</span>
      </div>
     
  </div>
        <div class="dashDetails">
            <section class="section">
              <div class="card">
                <div class="left-container">
                <img class="profile_img" src="<?php echo URLROOT ?>/public/Assets/images/profile.jpeg" alt="">
                  <div><button>Upload Photo</button></div>
                </div>
                <div class="right-container">
                  <div class="profile-data">
        <div class="form-group">
            <label for="username">Name:</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="contact">Contact No:</label>
            <input type="text" id="contact" name="contact" placeholder="Enter your contact no" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" placeholder="Enter your address" required>
        </div>
        
    </form>
        
    </div>
   </div>
              <div class="form-group">
            <div><input type="submit" value="Save"></div>
            <div><input type="submit" value="Reset"></div>
            <div><input type="submit" value="Cancel"></div>
        </div>
        
            </section>
          
            </div>
    </div>
    <?php require APPROOT . '/views/includes/footer.php' ?>
</body>
</html>       
     
  
   