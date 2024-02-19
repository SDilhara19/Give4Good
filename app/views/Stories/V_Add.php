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
                <h1 class="form-topic"> Add your story </h1>

                <fieldset>
                    <!-- <legend class="text-2"> </legend> -->


                    <div class="form-input-title">STORY TITLE<span class="required">*</span></div>
                    <input type="text" name="story_title" id="story_title" class="input"
                        placeholder="Title to be displayed">
                    <span class="form-invalid"><?php if(!empty($data['story_title_err']))echo $data['story_title_err']; ?></span>

                    <div class="form-input-title">IMAGE<span class="required">*</span></div>
                    <input type="file" accept="image/png, image/jpeg" name="story_image" id="form_image">

                    <div class="form-image-container">
                        <img src="https://placehold.co/600x70?text=Upload+Image" alt="image here">
                    </div>
                    <span class="form-invalid"><?php if(!empty($data['story_image_err']))echo $data['story_image_err']; ?></span>

                    <div class="form-input-title">DESCRIPTION<span class="required">*</span></div>
                    <textarea name="story_description" id="story_description" class="story_description" rows="3"
                        maxlength="500" placeholder="Description to be displayed"></textarea>
                    <span class="form-invalid"><?php if(!empty($data['story_description_err']))echo $data['story_description_err']; ?></span>


                    <div class="contact">
                        <div class="form-input-title">CONTACT<span class="required">*</span></div>
                        <div class="form-flex">
                            <div class="form-flex-left">
                                <input type="radio" id="default_contact" name="contact" value="option1" checked
                                    onchange="toggleFormPart('option1')" />

                                <label for=" default_contact">Default</label>
                                <div id="formPart1" style="display: block;">
                                    <p>phone: 007</p>
                                    <p>phone: 007</p>
                                </div>
                            </div>

                            <div class="form-flex-right">
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
                        <button class="button-submit" type="submit">Add Story</button>
                    </div>

                </fieldset>
            </form>



        </div>


    </main>

    <script src="<?php echo URLROOT ?>/public/js/form-image.js"></script>
    <script src="<?php echo URLROOT ?>/public/js/toggleFormPart.js"></script>
    <script>setupImagePreview("#form_image", ".form-image-container img");</script>

    <?php require APPROOT . '/views/includes/footer.php' ?>
</body>

</html>