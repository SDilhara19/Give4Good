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
            <form action="Stories/add" method="post" enctype="multipart/form-data">
                <h1 class="form-topic"> Add your story </h1>

                <fieldset>
                    <!-- <legend class="text-2"> </legend> -->


                    <div class="form-input-title">STORY TITLE<span class="required">*</span></div>
                    <input type="text" name="story_title" id="story_title" class="input"
                        placeholder="Title to be displayed">
                    <span class="form-invalid">ERROR</span>

                    <div class="form-input-title">IMAGE<span class="required">*</span></div>
                    <input type="file" accept="image/png, image/jpeg" name="story_image" id="form_image">

                    <div class="form-image-container">
                        <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/ tshirt.jpeg" alt="image here">
                    </div>
                    <span class="form-invalid">ERROR</span>

                    <div class="form-input-title">DESCRIPTION<span class="required">*</span></div>
                    <textarea name="story_description" id="story_description" class="story_description" rows="3"
                        maxlength="120" placeholder="Description to be displayed"></textarea>
                    <span class="form-invalid">ERROR</span>


    <div class="contact">
    <div class="form-input-title">CONTACT<span class="required">*</span></div>
    <div class="form-flex">
                        <div class="form-flex-left">
                            <input type="radio" id="default_contact" name="contact" value="default_contact" checked />
                            <label for="default_contact">Default</label>
                            <p>phone: 007</p>
                            <p>phone: 007</p>
                        </div>

                        <div class="form-flex-right">
                            <input type="radio" id="new_contact" name="contact" value="new_contact" />
                            <label for="new_contact">New</label>
                            <div class="form-input-title">PHONE<span class="required">*</span></div>
                            <input type="tel" name="phone" id="phone" class="input">
                            <span class="form-invalid"></span>
                            <div class="form-input-title">EMAIL<span class="required">*</span></div>
                            <input type="email" name="email" id="email" class="input">
                            <span class="form-invalid"></span>
                        </div>

                    </div>
    </div>
                    


                    <br><br>
                    <div class="submit-button-div">
                    <button class="button-submit" type="submit">Signup</button>
                    </div>
                    
                </fieldset>
            </form>



        </div>


    </main>

    <script src="<?php echo URLROOT ?>/public/js/form-image.js"></script>
    <?php require APPROOT . '/views/includes/footer.php' ?>
</body>

</html>