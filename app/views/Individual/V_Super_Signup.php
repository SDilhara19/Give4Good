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

        <div class="form-container">
            <form action="super" method="post" enctype="multipart/form-data">
                <h1 class="form-topic"> Super User Sign Up </h1>

                <fieldset>
                    <div class="super-signup-profile-image">
                        <img src="" alt="">
                    </div> 
                    <div class="form-input-title">FULLNAME<span class="required">*</span></div>
                    <input type="text" name="fullname" id="fullname" class="input"
                        placeholder="Full name as in National Identity Card">
                    <span class="form-invalid">
                        <?php if (!empty($data['fullname_err']))
                            echo $data['fullname_err']; ?>
                    </span>
                    

                    <div class="form-flex">
                        <div class="form-flex-left">
                            <div class="form-input-title">NATIONAL ID<span class="required">*</span></div>
                            <input type="text" name="nicNo" id="nicNo" class="input"
                                placeholder="National Identity Card Number">
                                <span class="form-invalid">
                        <?php if (!empty($data['nicNo_err']))
                            echo $data['nicNo_err']; ?>
                    </span>
                        </div>

                        <div class="form-flex-right">
                            <div class="form-input-title">DATE OF BIRTH<span class="required">*</span></div>
                            <input type="date" name="dob" id="dob" class="input">
                            <span class="form-invalid">
                        <?php if (!empty($data['dob_err']))
                            echo $data['dob_err']; ?>
                    </span>
                        </div>


                    </div>

                    <div class="form-flex">
                        <div class="form-flex-left">
                        <div class="form-input-title">NIC Image-Front<span class="required">*</span></div>
                    <input type="file" accept="image/png, image/jpeg" name="nic_front_image" id="nic_front_image">
                    <div class="nic-form-image-container">
                        <img src="<?php echo URLROOT ?>/public/Assets/images/nic.jpg" alt="image here"  id="nic-front">
                    </div>
                    <span class="form-invalid"><?php if(!empty($data['story_image_err']))echo $data['story_image_err']; ?></span>

                        </div>

                        <div class="form-flex-right">
                            <div class="form-input-title">NIC Image-Back<span class="required">*</span></div>
                    <input type="file" accept="image/png, image/jpeg" name="nic_back_image" id="nic_back_image">

                    <div class="nic-form-image-container" id="nic-back">
                        <img src="<?php echo URLROOT ?>/public/Assets/images/nic.jpg" alt="image here">
                    </div>
                    <span class="form-invalid"><?php if(!empty($data['nic_back_image_err']))echo $data['nic_back_image_err']; ?></span>

                        </div>


                    </div>
                    <br><br>
                    <button class="main-button" type="submit">Next</button>
                </fieldset>
            </form>
        </div>

        <div class="form-container">
            <form action="superlocation" method="post" enctype="multipart/form-data">
                <h1 class="form-topic"> Super User Sign Up </h1>

                <fieldset>
                    <!-- <legend class="text-2"> Personal Info</legend> -->
                    <div class="form-input-title">ADDRESS<span class="required">*</span></div>
                    <input type="text" name="address" id="address" class="input"
                        placeholder="Permanent residence address">
                    <span class="form-invalid">ERROR</span>

                    <div class="form-flex">
                        <div class="form-flex-left">
                            <div class="form-input-title">PROVINCE<span class="required">*</span></div>
                            <select name="province" id="province" onchange="selectedProvince()" class="input">
                                <option value="none">None</option>
                                <option value="Western">Western Province</option>
                                <option value="Central">Central Province</option>
                                <option value="Westedrn">Western</option>
                            </select>
                            <span class="form-invalid"></span>
                        </div>

                        <div class="form-flex-right">
                            <div class="form-input-title">DISTRICT<span class="required">*</span></div>
                            <select name="district" id="district" class="input">
                                <option value="none">None</option>
                            </select>
                            <span class="form-invalid"></span>
                        </div>

                    </div>
                    <div class="form-flex">
                        <div class="form-flex-left">
                            <div class="form-input-title">ZIP CODE<span class="required">*</span></div>
                            <input type="text" name="zipcode" id="zipcode" class="input" placeholder="Zip code">
                            <span class="form-invalid"></span>
                        </div>

                        <div class="form-flex-right">
                            <div class="form-input-title">CONTACT<span class="required">*</span></div>
                            <input type="tel" name="contact" id="contact" class="input">
                            <span class="form-invalid"></span>
                        </div>

                    </div>


                    <br><br>
                    <button class="main-button" type="submit">Signup</button>
                </fieldset>
            </form>
        </div>




        </div>


        
    </main>

    <script src="<?php echo URLROOT ?>/public/js/districts.js"></script>
<script src="<?php echo URLROOT ?>/public/js/form-image.js"></script>
<script>
    setupImagePreview("#form_image", ".form-image-container img");
    setupImagePreview("#nic_front_image", "#nic-front");
    setupImagePreview("#nic_back_image", "#nic-back");
</script>
    
</body>

</html>