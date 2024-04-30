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
        <div class="story-heading">
            <h1>Success Stories</h1>
            <a href="<?php echo URLROOT ?>/Success_Story/add"><i class="fa-solid fa-circle-plus fa-2xl"></i></a>
        </div>
        <div class="stories-container">
            <?php foreach ($data['success_stories'] as $story): ?>
                <div class="story-card" id="<?php echo $story->successstory_id; ?>">
                    <div class="story-card-left">
                        <div class="story-card-img-container">
                        <img src="<?php echo URLROOT . "../public/Assets/Uploaded-Images/Success-Story/" . $story->story_image; ?>" alt="Story Image">
                        </div>
                    </div>
                    <div class="story-card-right">
                        <div class="story-description">
                            <h1><?php echo $story->title; ?></h1>
                            <div class="fundraiser-donee-name">
                                <?php if ($story->type == "individual"): ?>
                                    <i class="fa-solid fa-user fa-sm text-3"></i>
                                <?php elseif ($story->type == "organisation"): ?>
                                    <i class="fa-solid fa-building fa-sm text-3"></i>
                                <?php endif; ?>
                                <p class="text-4">
                                <?php echo (isset($_SESSION['userName']) && $story->username == $_SESSION['userName']) ? 'Mine' : $story->username; ?>

                                </p>
                            </div>
                            <p><?php echo $story->story; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <script src="<?php echo URLROOT ?>/public/js/header.js"></script>

</body>

</html>