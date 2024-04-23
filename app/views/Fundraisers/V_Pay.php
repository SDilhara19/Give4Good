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
                    <p class="text-4">Small difference to change their life for the better</p>
                </div>
                <div class="payment-form-container">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-input-title2 text-2">Donate
                            </div>
                            <input type="text" name="donate" id="donate" class="input" placeholder="">

                        </div>
                        <div class="form-row form-flex" stye="align-items: baseline;">
                            <div class="form-input-title2">Would you like to contribute to Give4Good</div>
                            <div class="checkbox-wrapper-2">
                                <input type="checkbox" class="sc-gJwTLC ikxBAC" name="contributeCheck"
                                    id="contributeCheck">
                            </div>
                        </div>
                        <div class="form-row" id='g4g' stye="display:none;">
                            <div class="form-input-title2 text-2">Give4Good
                            </div>
                            <input type="text" name="contribute" id="contribute" class="input" placeholder="">

                        </div>

                    </form>
                </div>
            </div>
            <div class="payment-container-bottom">
                <div class="fundraiser-count-row">
                    <div class="form-input-title2 text-2">Total</div>
                    <div class="text-1" id="total">0</div>
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const contributeCheckbox = document.getElementById('contributeCheck');
                        const contributeForm = document.getElementById('g4g');

                        // Function to show or hide the child form based on checkbox state
                        function toggleContributeForm() {
                            if (contributeCheckbox.checked) {
                                contributeForm.style.display = 'block';
                            } else {
                                contributeForm.style.display = 'none';
                            }
                        }

                        // Initial state check and toggle
                        toggleContributeForm();

                        // Add event listener to the checkbox
                        contributeCheckbox.addEventListener('change', toggleContributeForm);
                    });

                    document.addEventListener("DOMContentLoaded", function () {
        const donateInput = document.getElementById("donate");
        const contributeInput = document.getElementById("contribute");
        const totalDisplay = document.querySelector(".fundraiser-count-row .text-1");

        // Function to update total
        function updateTotal() {
            const donateAmount = parseFloat(donateInput.value) || 0;
            const contributeAmount = parseFloat(contributeInput.value) || 0;
            const totalAmount = donateAmount + contributeAmount;
            totalDisplay.textContent = totalAmount.toFixed(2); // Assuming you want to display total with two decimal places
        }

        // Add event listeners to donate and contribute inputs
        donateInput.addEventListener("input", updateTotal);
        contributeInput.addEventListener("input", updateTotal);

        // Initial update of total
        updateTotal();
    });
                </script>
                <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
                <button class="main-color-button" type="submit" onclick="paymentGateway()">Donate</button>
            </div>
        </div>
    </main>

    <script src="<?php echo URLROOT ?>/public/js/payment.js"></script>
    <script src="<?php echo URLROOT ?>/public/js/header.js"></script>

</body>

</html>