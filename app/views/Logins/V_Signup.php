
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
