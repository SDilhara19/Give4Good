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
            <form action="add" method="post" enctype="multipart/form-data">
                <h1 class="form-topic"><?php echo $data[0]->title ?> </h1>
                 
                <fieldset>
                    <!-- <legend class="text-2"> </legend> -->
                    
                    <div class="form-input-title">Reason<span class="required">*</span></div>
                    <textarea name="reason" id="reason" class="story_description" rows="3"
                        maxlength="500" placeholder=" "></textarea>
                    <span class="form-invalid"><?php if(!empty($data['reason_err']))echo $data['reason_err']; ?></span>

                    <div class="form-input-title">Others</div>
                    <input type="file" accept="image/png, image/jpeg" name="complaint_image" id="form_image">

                    <div class="form-image-container">
                        <img src="https://placehold.co/600x70?text=Upload+Image" alt="image here">
                    </div>
                    <span class="form-invalid"><?php if(!empty($data['story_image_err']))echo $data['story_image_err']; ?></span>


                    <div class="contact">
                        <div class="form-input-title">CONTACT<span class="required">*</span></div>
                        <div class="form-row form-flex" >
                            <div class="flx-1">
                                <input type="radio" id="default_contact" name="contact" value="option1" checked
                                    onchange="toggleFormPart('option1')" />

                                <label for=" default_contact">Default</label>
                                <div id="formPart1">
                                    <div style="margin: 1rem">phone: <?php echo $_SESSION['userContact']?></div>
                                    <div style="margin: 1rem">email: <?php echo $_SESSION['userEmail']?></div>
                                </div>
                            </div>

                            <div class="flx-1">
                                <input type="radio" id="new_contact" name="contact" value="option2" onchange="toggleFormPart('option2')"/>
                            <label for=" new_contact">New</label>
                                <div id="formPart2" style="display: none;">
                                    <div class="form-input-title">PHONE<span class="required">*</span></div>
                                    <input type="tel" name="phone" id="phone" class="input">
                                    <span class="form-invalid"><?php if(!empty($data['phone_err']))echo $data['phone_err']; ?></span>
                                    <div class="form-input-title">EMAIL<span class="required">*</span></div>
                                    <input type="email" name="email" id="email" class="input">
                                    <span class="form-invalid"><?php if(!empty($data['email_err']))echo $data['email_err']; ?></span>
                                </div>

                            </div>

                        </div>
                    </div>

                    <br><br>
                    <div class="submit-button-div">
                        <button class="button-3-red" type="submit">Report</button>
                    </div>

                </fieldset>
            </form>



        </div>


    </main>

    <script src="<?php echo URLROOT ?>/public/js/form-image.js"></script>
    <script src="<?php echo URLROOT ?>/public/js/toggleFormPart.js"></script>
    <script>setupImagePreview("#form_image", ".form-image-container img");</script>

    <?php require APPROOT . '/views/includes/footer.php' ?>
    <script src="<?php echo URLROOT ?>/public/js/header.js"></script>
    
</body>

</html>