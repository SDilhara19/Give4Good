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


  <div>
  <div class="form-container">

<form action="Admin_Login" method="post" enctype="multipart/form-data">


    <h1 class="form-topic"> Login </h1>
<fieldset>
    <!-- <input type="hidden" name="type" value="Individual"> -->

    <div class="form-input-title"> Username or email <span class="required">*</span></div>
    <input type="text" name="username/email" id="username/email" class="input">
    <span class="form-invalid"><?php if(!empty($data['username/email_err']))echo $data['username/email_err']; ?></span>

    <div class="form-input-title"> Password<span class="required">*</span></div>
    <input type="password" name="password" id="password" class="input">
    <span class="form-invalid"><?php if(!empty($data['password_err']))echo $data['password_err']; ?></span>

    <br><br>
    
    <button class="button-submit" type="submit">Login</button>
</fieldset>
</form>
</div>

    
    </div>
</body>
</html>