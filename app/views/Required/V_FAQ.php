<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GIVE4GOOD</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/styles.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components/main-styles.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components/includes-styles/faq_style.css">
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
    <ul id="accordion">
        <li>
        <label style="color: #0E6F4B; text-align: center; display: block; margin: auto;">FAQ (Frequently Asked Questions)</label>
        </li>
        <li>
            <label for="first">What is Give4Good?<span>&#x3e;</span></label>
            <input type ="radio" name="accordion" id="first">
            <div class ="content">
                <p>Give4Good is a donation and fundraising platform. If you like to donate someone, you can find people who wants your donations. If you want donations, you can start a fundraise.</p>
            </div>
        </li>
        <li>
            <label for="second">What is Give4Good?<span>&#x3e;</span></label>
            <input type ="radio" name="accordion" id="second">
            <div class ="content">
                <p>Give4Good is a donation and fundraising platform. If you like to donate someone, you can find people who wants your donations. If you want donations, you can start a fundraise.</p>
            </div>
        </li>
        <li>
            <label for="third">What is Give4Good?<span>&#x3e;</span></label>
            <input type ="radio" name="accordion" id="third">
            <div class ="content">
                <p>Give4Good is a donation and fundraising platform. If you like to donate someone, you can find people who wants your donations. If you want donations, you can start a fundraise.</p>
            </div>
        </li>
        <li>
            <label for="fourth">What is Give4Good?<span>&#x3e;</span></label>
            <input type ="radio" name="accordion" id="fourth">
            <div class ="content">
                <p>Give4Good is a donation and fundraising platform. If you like to donate someone, you can find people who wants your donations. If you want donations, you can start a fundraise.</p>
            </div>
        </li>
        <li>
            <label for="fifth">What is Give4Good?<span>&#x3e;</span></label>
            <input type ="radio" name="accordion" id="fifth">
            <div class ="content">
                <p>Give4Good is a donation and fundraising platform. If you like to donate someone, you can find people who wants your donations. If you want donations, you can start a fundraise.</p>
            </div>
        </li>
        <li>
            <label for="sixth">What is Give4Good?<span>&#x3e;</span></label>
            <input type ="radio" name="accordion" id="sixth">
            <div class ="content">
                <p>Give4Good is a donation and fundraising platform. If you like to donate someone, you can find people who wants your donations. If you want donations, you can start a fundraise.</p>
            </div>
        </li>
    </ul>
    </main>
<?php require APPROOT . '/views/includes/footer.php' ?>  
<script src="<?php echo URLROOT ?>/public/js/header.js"></script>

</body>
</html>     