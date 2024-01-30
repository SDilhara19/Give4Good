<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIVE4GOOD</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/styles.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components-3/Admin_style.css">
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
                            foreach ($data as $story) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $story->id; ?>
                                    </td>
                                    <td>
                                        <?php echo $story->username; ?>
                                    </td>
                                    <td>
                                        <?php echo $story->title; ?>
                                    </td>
                                    <td>
                                        <?php echo $story->contact; ?>
                                    </td>
                                    <td>
                                        <?php echo $story->type; ?>
                                    </td>
                                    <td>
                                        <?php echo $story->status; ?>
                                    </td>
                                    <td class="action-td">
                                        <a href="<?php echo URLROOT ?>/Admin_Merchandise/info/<?php echo $merchandise->id ?>"
                                            class="action-icons">
                                            <i class="fa-solid fa-info"></i>
                                        </a>
                                        <a href="<?php echo URLROOT ?>/Admin_Stories/setActive/<?php echo $story->id ?>"
                                            class="action-icons">
                                            <i class="fa-solid fa-play"></i>
                                        </a>
                                        <a href="<?php echo URLROOT ?>/Admin_Stories/setDeactive/<?php echo $story->id ?>"
                                            class="action-icons">
                                            <i class="fa-solid fa-lock"></i>
                                        </a>

                                    </td>
                                    
                                </tr>
                                
                                <?php
                            }
                            ?>
                    </table>
                </div>
            </div>
        </div>
</body>

</html>