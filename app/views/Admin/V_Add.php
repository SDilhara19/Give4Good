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

  <div class="form-container">
        <div class="right-col">
    <div class="form-container">

        <form action="Admin/add" method="post" enctype="multipart/form-data">


            <h1 class="form-topic"> Add Admin </h1>
 
            <input type="hidden" name="type" value="admin">

            <div class="form-input-title"> Username <span class="required">*</span></div>
            <input type="text" name="username" id="username" class="input">
            <span class="form-invalid"><?php if(!empty($data['username_err']))echo $data['username_err']; ?></span>

            <div class="form-input-title"> Email<span class="required">*</span></div>
            <input type="email" name="email" id="email" class="input">
            <span class="form-invalid"><?php if(!empty($data['email_err']))echo $data['email_err']; ?></span>

            <div class="form-input-title"> Password<span class="required">*</span></div>
            <input type="password" name="password" id="password" class="input">
            <span class="form-invalid"><?php if(!empty($data['password_err']))echo $data['password_err']; ?></span>

            <div class="form-input-title"> Confirm Password<span class="required">*</span></div>
            <input type="password" name="confirmpassword" id="confirmpassword" class="input">
            <span class="form-invalid"><?php if(!empty($data['confirmpassword_err']))echo $data['confirmpassword_err']; ?></span>
            <br><br>
            
            </div>
            <button class="button-submit" type="submit">Signup</button>
           
        </form>
      
    </div>
</div>
</div>
</body>
</html>
