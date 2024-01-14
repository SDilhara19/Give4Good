<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GIVE4GOOD</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/styles.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components-3/Admin_style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/9e9a03ae37.js" crossorigin="anonymous"></script>
</head>
<body>
<?php require APPROOT . '/views/includes/admin-header.php' ?>
<?php require APPROOT . '/views/includes/admin-dashboard.php' ?>
    
      <div class="main--content">
        <div class="header--wrapper">
          <div class="header--title">
            <i class="fa-solid fa-bars"></i>
            <span>Add an admin</span>
          </div>
         
          <div class="user--info">
            <div class="search--box">
              <i class="fa-solid fa-magnifying-glass"></i>
              <input type="text" placeholder="Search Name"/>
            </div>  
          </div>  
        </div>
  <h3>Add an Admin</h3>
  <form>
    <label for="adminUsername">Admin Username:</label>
    <input type="text" id="adminUsername" name="adminUsername" required>

    <label for="adminPassword">Admin Password:</label>
    <input type="password" id="adminPassword" name="adminPassword" required>

    <button type="submit">Add Admin</button>
  </form>
</body>
</html>
