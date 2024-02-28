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
        <span>Change Password</span>
      </div> 
</div>
        <div class="dashDetails">
            <section>
            <div class="card">
                <div class="mid_container">
             <form>
                <div>
                <div class="form-group">
                <label for="username">Current Password :</label>
                <input type="password" id="password" name="password" placeholder="Current Password" required>
               </div>
                <div class="form-group">
                <label for="password">New Password :</label>
                <input type="password" id="password" name="password" placeholder="Current Password" required>
               </div>
               <div class="form-group">
                <label for="password">Confirm Password :</label>
                <input type="password" id="password" name="password" placeholder="Current Password" required>
                </div>
             </div>               
             </form>
                
            </div>
            <div class="form-group">
            <div><input type="submit" value="Save"></div>
            <div><input type="submit" value="Cancel"></div>
        </div>
            </section>
        </div>
    </div>
    <?php require APPROOT . '/views/includes/footer.php' ?>
</body>
</html>       
     
  
   