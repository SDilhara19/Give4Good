<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIVE4GOOD</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components/main-styles.css">
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
   

    <main class="admin-document">
        <h1><?php echo $data['fundraiser']->title?></h1>
    <div class="document-container">
        <div class="document-left">
            <img style="object-fit: contain; max-width: 100%; max-height: 100%; display: block;" src="<?php echo URLROOT . $data['image'][0]->document_image; ?>" alt="image">
        </div>
        <div class="document-right">
            <div class="info-box">
                <table class="info-table">
                    <tr>
                        <th>Created date</th>
                        <td class="text-3"><?php echo $data['fundraiser']->created_date ?></td>
                    </tr>
                    <tr>
                        <th>Modified date</th>
                        <td class="text-3"><?php echo $data['fundraiser']->modified_date; ?></td>
                    </tr>
                    <tr>
                        <th>End date</th>
                        <td class="text-3"><?php echo $data['fundraiser']->end_date; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</main>

    <script src="<?php echo URLROOT ?>/public/js/material.js"></script>
    <?php require APPROOT . '/views/includes/footer.php' ?>
</body>

</html>