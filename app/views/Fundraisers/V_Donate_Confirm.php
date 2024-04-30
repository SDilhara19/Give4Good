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
        <div class="payment-container">
            <div class="payment-container-top">
                <div class="payment-heading">
                    <p class="text-7">Payment id: <?php echo $data['payment_id']; ?></p>
                    <h2><?php echo $data['fundraiser_title']; ?></h2>
                    <p class="text-4" style="margin-bottom: 1rem;">Small difference to change their life for the better</p>
                </div>
                <div class="payment-form-container">
                <div class="fundraiser-count-row">
                    <div class="form-input-title2 text-2">Donated Amount:</div>
                    <div class="text-1" id="total"><?php echo $data['donated_amount']; ?></div>
                </div>
                <div class="fundraiser-count-row">
                    <div class="form-input-title2 text-2">Contributed to Give4Good:</div>
                    <div class="text-1" id="total"><?php echo $data['contribution_amount']; ?></div>
                </div>
                </div>
            </div>
            <div class="payment-container-bottom">
           
               
                <div class="success-btn">Donation Successful!</div>
                <div >
                    <div class="form-input-title2 text-2" style="text-align: center;">Thank you!</div>
                    <div class="form-input-title2 text-2" style="text-align: center;">We value your effort</div>
             
                </div>
                <div class="go-back text-3" onclick="window.location.href = '<?php echo URLROOT ?>/Fundraiser/fundraiser/<?php echo $data['fundraiser_id']; ?>'" style="cursor: pointer; display: flex; align-items: center; gap:1rem;"><i class="fa-solid fa-angles-left"></i><div> Go Back</div></div>
            </div>
        </div>
    </main>

    <script src="<?php echo URLROOT ?>/public/js/payment.js"></script>
    <script src="<?php echo URLROOT ?>/public/js/header.js"></script>

</body>

</html>