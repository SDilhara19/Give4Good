<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GIVE4GOOD</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/styles.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components-2/signup-styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body>
<?php require APPROOT . '/views/includes/header.php' ?>

<head> <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/styles/components/signup-styles.css"></head>
  

<main>

    <div class="split-container">
        <div class="left_box">
            <div class="textbox">
            <img src="./public/Assets/images/Ind.jpg" alt="Individual">
            <div> <button class="my-button"><a href="<?php echo URLROOT ?>/SignupInd"><h1> Sign up as an Individual</h1></a></button>
            </div>
            <h4>Will be able to publish stories</h4>
            <h4>Will be able to Raise monetary Funds</h4>
            <h4>Will be able to Raise Material Funds</h4>
            </div>
        </div>
        <div class="right_box">
            <img src="./public/Assets/images/Org.jpg" alt="Organization">
            <div> <button class="my-button"><a href="<?php echo URLROOT ?>/SignupOrg"><h1>Sign Up as an Organisation</h1></a></button>
            </div>
            <h3>Should be a governmant registered and approved Organization</h3>
            <h4>Will be able to Raise monetary Funds</h4>
            <h4>Will be able to Raise Material Funds</h4>
            <h4>Will be able to Sell Merchandise</h4>
            <h4>Will be able to View and Manage Profile</h4>                                                                
            
        </div>
    </div>

</main>
    <?php require APPROOT . '/views/includes/footer.php' ?>
</body>
</html>
