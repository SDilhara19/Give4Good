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
   

    <main class="admin-document">
        <h1>Medical Report: Help us to assist them walk</h1>
       <div class="document-container">
            <div class="document-left">
                <img src="" alt="">
            </div>
            <div class="document-right">
                <div class="info-box">
                    <table class="info-table">
                        <tr>
                            <th>Created date</th>
                            <td class="text-3">23-02-2023</td>
                        </tr>
                        <tr>
                            <th>Modified date</th>
                            <td class="text-3">23-02-2023</td>
                        </tr>
                        <tr>
                            <th>End date</th>
                            <td class="text-3">23-02-2024</td>
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