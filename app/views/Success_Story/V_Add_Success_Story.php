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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <?php require APPROOT . '/views/includes/header.php' ?>
    <?php require APPROOT . '/views/includes/side-bar.php' ?>
    <main>
        <div class="form-container">
            <form action="<?php echo URLROOT; ?>/Success_Story/Add" method="post" enctype="multipart/form-data">
                <h1 class="form-topic"> Add Success Story </h1>

                <fieldset>
                    <div class="form-input-title">Fundraiser</div>
                    <select name="fundraiser_id" id="fundraiser_id" class="input">
                        <?php foreach ($data['fundraisers'] as $fundraiser) : ?>
                            <option value="<?php echo $fundraiser->fundraiser_id; ?>"><?php echo $fundraiser->title; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <span class="form-invalid"><?php if (!empty($data['fundraiser_id_err'])) echo $data['fundraiser_id_err']; ?></span>

                    <div class="form-input-title">Success Story<span class="required">*</span></div>
                    <textarea name="story" id="story" class="story_description" rows="5" maxlength="500" placeholder="Write your success story here"></textarea>
                    <span class="form-invalid"><?php if (!empty($data['story_err'])) echo $data['story_err']; ?></span>

                    <div class="form-input-title">Image<span class="required">*</span></div>
                    <input type="file" accept="image/png, image/jpeg" name="story_image" id="story_image">
                    <span class="form-invalid"><?php if (!empty($data['story_image_err'])) echo $data['story_image_err']; ?></span>

                    <br><br>
                    <div class="submit-button-div">
                        <button class="button-submit" type="submit">Add Success Story</button>
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