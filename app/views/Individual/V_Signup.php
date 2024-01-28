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
    <div class="signup-page">
        <div class="signup-container">
            <div class="signup-left">
                <div class="signup-background-container">
                    <img src="public/Assets/images/signup-photo.jpg" alt="image">
                </div>
                <div class="signup-logo-container">
                    <img src="public/Assets/images/LogoBlack.png" alt="image">
                </div>
            </div>
            <div class="signup-right">
                <div class="form-topic">
                    <h1>Signup</h1>
                    <div class="space"></div>
                </div>

                <div class="form-container">
                    <div class="login-form-top">
                        <form action="Individual" method="post" enctype="multipart/form-data">

                            <input type="hidden" name="type" value="individual">

                            <div class="form-input-title"> USERNAME <span class="required">*</span> <span
                                    class="form-invalid">
                                    <?php if (!empty($data['username_err']))
                                        echo $data['username_err']; ?>
                                </span></div>
                            <input type="text" name="username" id="username" class="input">


                            <div class="form-input-title"> EMAIL<span class="required">*</span> <span
                                    class="form-invalid">
                                    <?php if (!empty($data['email_err']))
                                        echo $data['email_err']; ?>
                                </span></div>
                            <input type="email" name="email" id="email" class="input">


                            <div class="form-input-title"> PASSWORD<span class="required">*</span> <span
                                    class="form-invalid">
                                    <?php if (!empty($data['password_err']))
                                        echo $data['password_err']; ?>
                                </span></div>
                            <input type="password" name="password" id="password" class="input">


                            <div class="form-input-title"> CONFIRM PASSWORD<span class="required">*</span><span
                                    class="form-invalid">
                                    <?php if (!empty($data['confirmpassword_err']))
                                        echo $data['confirmpassword_err']; ?>
                                </span></div>
                            <input type="password" name="confirmpassword" id="confirmpassword" class="input">

                    </div>
                    <div class="login-form-bottom">
                        <div class="submit-button-div">
                            <button class="button-submit" type="submit">Signup</button>
                        </div>

                        <p class="login-register text-5">
                            Already have an account? <a href="<?php echo URLROOT ?>/Users">Login</a>
                        </p>
                    </div>


                </div>
                </form>
            </div>
        </div>
    </div>

    </div>
</body>

</html>