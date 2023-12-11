<?php require APPROOT . '/views/includes/login_header.php' ?>

<div class="right-col">
    <div class="form-container">

        <form action="Organisation " method="post" enctype="multipart/form-data">


            <h1 class="form-topic"> Sign Up </h1>
 
            <input type="hidden" name="type" value="Organisation">

            <div class="form-input-title"> Organisation Name<span class="required">*</span></div>
            <input type="text" name="username" id="username" class="text-input">
            <span class="form-invalid"><?php if(!empty($data['username_err']))echo $data['username_err']; ?></span>

            <div class="form-input-title">Registration No.<span class="required">*</span></div>
            <input type="text" name="regNo" id="regNo" class="text-input">
            <span class="form-invalid"><?php if(!empty($data['regNo_err']))echo $data['regNo_err']; ?></span>

            <div class="form-input-title">Email<span class="required">*</span></div>
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
            <button class="form-button" type="submit">Signup</button>
            <p class="login__register">
                Already have an account? <a href="#">Login</a>
            </p>
        </form>
    </div>
</div>
</div>
</body>

</html>