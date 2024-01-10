<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIVE4GOOD</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/styles.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components-2/signup-styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>
<body>
<?php require APPROOT . '/views/includes/header.php' ?>
<main>
<h1>Temporary Page</h1>

<div class="right-col">
    <div class="form-container">

        <form action="Users" method="post" enctype="multipart/form-data">


            <h1 class="form-topic"> Login </h1>
 
            <!-- <input type="hidden" name="type" value="Individual"> -->

            <div class="form-input-title"> Username or email <span class="required">*</span></div>
            <input type="text" name="username/email" id="username/email" class="input">
            <span class="form-invalid"><?php if(!empty($data['username/email_err']))echo $data['username/email_err']; ?></span>

            <div class="form-input-title"> Password<span class="required">*</span></div>
            <input type="password" name="password" id="password" class="input">
            <span class="form-invalid"><?php if(!empty($data['password_err']))echo $data['password_err']; ?></span>

            <br><br>
            
            <button class="form-button" type="submit">Login</button>
            <p class="login__register">
            Don't have an account? <a href="<?php echo URLROOT ?>/Individual">Register</a>
            </p>
        </form>
    </div>
</div>
</div>
</main>
</body>

</html>