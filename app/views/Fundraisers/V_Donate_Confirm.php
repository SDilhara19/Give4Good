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
                    <p class="text-7">Donate</p>
                    <h2><?php echo $data->title; ?></h2>
                    <p class="text-4">Small to difference to change their life for the better</p>
                </div>
                <div class="payment-form-container">
                <div class="story-contact">
                    <table>
                        <tr>
                            <th>Donation Amount:</th>
                            <td class="text-3"><?php echo $data->donate; ?></td>
                            <!-- <td class="text-3">23</td> -->
                        </tr>
                        <tr>
                            <th>Contribution Amount:</th>
                            <td class="text-3"><?php echo $data->contribute; ?></td>
                            <!-- <td class="text-3">32</td> -->
                        </tr>
                    </table>
                </div>
                </div>
            </div>
            <div class="payment-container-bottom">
                <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
                <button id ="donateBtn" class="main-color-button" type="submit" onclick="paymentGateway()">Donate</button>
            </div>
        </div>
    </main>

    <script src="<?php echo URLROOT ?>/public/js/payment.js"></script>
    <script src="<?php echo URLROOT ?>/public/js/header.js"></script>

</body>

</html>