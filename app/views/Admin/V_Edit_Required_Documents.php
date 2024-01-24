<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIVE4GOOD</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/styles/components/main-styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body>
    <?php require APPROOT . '/views/includes/header.php' ?>


    <main class="admin-document">
        <h1>Medical Report: Help us to assist them walk</h1>
        <p class="text-3">Edit documents required to start a fundraiser for Education b an Individual</p>



       <div class="edit-document-container">
            <div class="edit-document-left">
                <div class="add-container">
                    <div class=".admin-add-remove fundraiser-donee-name">
                        <i class="fa-solid fa-circle-plus"></i>
                        <p class="text-2">Add Document or Report</p>
                    </div>
                </div>
                <div class="remove-container">
                    <div class=".admin-add-remove fundraiser-donee-name">
                        <i class="fa-solid fa-circle-minus"></i>
                        <p class="text-2">Remove Document or Report</p>
                    </div>
                </div>
                
            </div>
            <div class="edit-document-right">
                <h3>Current required documents and Reports</h3>
                <div class="current-document-list">
                    <div class="admin-current-documents fundraiser-donee-name">
                        <i class="fa-solid fa-circle-minus"></i><p class="text-2">Remove Document or Report</p>
                    </div>
                </div>
            </div>
       </div>



    </main>
    <script src="<?php echo URLROOT ?>/public/js/material.js"></script>
    <?php require APPROOT . '/views/includes/footer.php' ?>
</body>

</html>