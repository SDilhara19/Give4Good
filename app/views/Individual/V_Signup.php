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

</head>

<body>
<?php require APPROOT . '/views/includes/header.php' ?>

<main>
<h1>Temporary Page</h1>

    <div class="form-container">
        <div class="right-col">
    <div class="form-container">

        <form action="Individual" method="post" enctype="multipart/form-data">


            <h1 class="form-topic"> Sign Up </h1>
 
            <input type="hidden" name="type" value="individual">

            <div class="form-input-title"> Username <span class="required">*</span></div>
            <input type="text" name="username" id="username" class="input">
            <span class="form-invalid"><?php if(!empty($data['username_err']))echo $data['username_err']; ?></span>

            <div class="form-input-title"> Email<span class="required">*</span></div>
            <input type="email" name="email" id="email" class="email-input">
            <span class="form-invalid"><?php if(!empty($data['email_err']))echo $data['email_err']; ?></span>

            <div class="form-input-title"> Password<span class="required">*</span></div>
            <input type="password" name="password" id="password" class="pwd-input">
            <span class="form-invalid"><?php if(!empty($data['password_err']))echo $data['password_err']; ?></span>

            <div class="form-input-title"> Confirm Password<span class="required">*</span></div>
            <input type="password" name="confirmpassword" id="confirmpassword" class="pwd-input">
            <span class="form-invalid"><?php if(!empty($data['confirmpassword_err']))echo $data['confirmpassword_err']; ?></span>
            <br><br>
            <div class="login__check">
                <div class="login__check-group">
                    <input type="checkbox" class="login__check-input">
                    <label for="" class="login__check-label">Remember me</label>
                </div>
                <a href="#" class="login__forgot">Forgot Password?</a>
            </div>
            <button class="button-submit" type="submit">Signup</button>
            <p class="login__register">
                Already have an account? <a href="#">Login</a>
            </p>
        </form>
    </div>
</div>
</div>
</body>

</html>
