<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIVE4GOOD</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/styles.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components-3/Admin_style.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components/main-styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9e9a03ae37.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php require APPROOT . '/views/includes/admin-header.php' ?>
    <?php require APPROOT . '/views/includes/admin-dashboard.php' ?>

    <div class="main--content">
        <?php require APPROOT . '/views/Admin_Stories/stories-header.php' ?>
        <div class="dashDetails">
            <div class="container">
                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Story ID</th>
                                <th>Username</th>
                                <th class="action-th">Title</th>
                                <th>Contact</th>
                                <th>User Type</th>
                                <th>Status</th>
                                <th class="action-th">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data as $stories) {
                                ?>

                                <tr>
                                    <td>
                                        <?php echo $stories->id; ?>
                                    </td>
                                    <td>
                                        <?php echo $stories->username; ?>
                                    </td>
                                    <td>
                                        <?php echo $stories->title; ?>
                                    </td>
                                    <td>
                                        <?php echo $stories->contact; ?>
                                    </td>
                                    <td>
                                        <?php echo $stories->type; ?>
                                    </td>
                                    <td>
                                        <?php echo $stories->status; ?>
                                    </td>
                                    <td class="action-td">
                                        <span class="action-icons open-story-popup"
                                            data-popup-id="<?php echo $stories->id; ?>">
                                            <i class="fa-solid fa-info"></i>
                                        </span>
                                        
                                          
                                        <a class="action-icons">                                                                   
                                        <i class="fa-solid fa-check" onclick='if (window.confirm("Are you sure you want to activate the <?php echo $stories->title; ?> story?")) {
  window.open("<?php echo URLROOT ?>/Admin_Stories/setActive/<?php echo $stories->id ?>");
}'></i>
                                    </a>
                                        
                                        <a href="" class="action-icons">
                                            <i class="fa-solid fa-lock" onclick='if (window.confirm("Are you sure you want to deactivate the <?php echo $stories->title; ?> story?")) {
  window.open("<?php echo URLROOT ?>/Admin_Stories/setDeactive/<?php echo $stories->id ?>");
}'></i>
                                        </a>

                                    </td>
                                    <td>

                                        <dialog class="popup-story" id='story-popup-<?php echo $stories->id; ?>'>
                                            <span class="close-popup"
                                                id='close-story-popup-<?php echo $stories->id; ?>'>&times;</span>
                                            <div class="popup-container story-popup-container">

                                                <div class="story-card">
                                                    <div class="story-card-left">
                                                        <div class="story-card-img-container">
                                                            <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/Stories/Story1.jpeg"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="story-card-right">
                                                        <div class="story-description">
                                                            <h1><?php echo $stories->title; ?></h1>
                                                            <div class="fundraiser-donee-name">
                                                                <i class="fa-solid fa-building fa-sm text-3"></i>
                                                                <p class="text-4"><?php echo $stories->username; ?></p>
                                                            </div>
                                                            <p><?php echo $stories->description; ?>
                                                            </p>
                                                        </div>
                                                        <div class="story-contact">
                                                            <table>
                                                                <tr>
                                                                    <th>email:</th>
                                                                    <td class="text-3"><?php echo $stories->email; ?>m</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Contact:</th>
                                                                    <td class="text-3"><?php echo $stories->contact; ?></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </dialog>
                                    </td>
                                    <script src="<?php echo URLROOT ?>/public/js/popup.js"></script>
                                    <script>
                                        setupPopup('.open-story-popup[data-popup-id="<?php echo $stories->id; ?>"]', '#story-popup-<?php echo $stories->id; ?>', '#close-story-popup-<?php echo $stories->id; ?>');
                                    </script>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>

</html>