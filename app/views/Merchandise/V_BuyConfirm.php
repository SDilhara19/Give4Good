<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIVE4GOOD</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components/main-styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9e9a03ae37.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>

<body class="merch-body">
    <?php require APPROOT . '/views/includes/header.php' ?>
    <?php require APPROOT . '/views/includes/side-bar.php' ?>

    <main class="merch-main">
        <h1 style="margin-bottom: 0"><?php echo $data['merch_name']; ?></h1>
        <div class="text-2">Fundraiser: <?php echo $data['fundraiser_title']; ?></div>
        <div class="merch-buy-con">
            <div class="merch-buy-con-left">
                <div class="merch-buy-details">
                    <div class="merch-img-con">
                        <img src="<?php echo URLROOT . $data['merch_image'] ?>" alt="merch-image">
                    </div>
                    <div class="merch-data-con">
                        <div class="merch-des fade-effect"><?php echo $data['description'] ?></div>
                        <div class="merch-con-below">
                            <div class="merch-data-con-below-left text-2">
                                <?php echo "Rs. " . $data['total'] ?>
                            </div>
                            <div class="merch-data-con-below-right">
                                
                                <!-- <script>
                                    var input = document.getElementById('theInput');
                                    document.getElementById('plus').onclick = function () {
                                        input.value = parseInt(input.value, 10) + 1
                                    }
                                    document.getElementById('minus').onclick = function () {
                                        input.value = parseInt(input.value, 10) - 1
                                    }
                                </script> -->
                            </div>


                        </div>
                        <p class="text-1 color-green" style="margin-left: 2rem;">
                            <?php echo 'Rs. ' . $data['contribution'] ?> of your purchase is donated to the fundraiser
                      
                        </p>
                    </div>
                </div>
                <div class="merch-delivery-details">
                    <div class="text-2">Delivery Details</div>

                 <div class="text-2"><?php echo $data['address'] ?></div>
                 <div class="text-2"><?php echo $data['province'] ?></div>
                 <div class="text-2"><?php echo $data['district'] ?></div>
                 <div class="text-2"><?php echo $data['zipcode'] ?></div>
                 <div class="text-2"><?php echo $data['contact'] ?></div>


                </div>
            </div>
            <div class="merch-buy-con-right">
                <h4>Confirmation</h4>
                <div class="fundraiser-count-row">
                    <p class="text-2">
                        Product cost
                    </p>
                    <p class="text-2">
                        <?php echo "Rs. " .  $data['price']; ?>
                     
                        
                    </p>
                </div>
                <div class="fundraiser-count-row">
                    <p class="text-2">
                        Quantity
                    </p>
                    <p class="text-2" id="quantity-final">
                    <?php echo $data['quantity']; ?>
                    </p>
                </div>
                <hr>
                <div class="fundraiser-count-row" style="justify-content: space-between">
                    <div class="text-2">
                        Total
                    </div>
                    <div class="text-2" id="totalAmount">
                    <?php echo $data['total']; ?>
                    </div>
                </div>
                <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>

                <button  type="submit" onclick="merchPaymentGateway()" class="main-color-button">
                    Payment Successful
                </button>
                <p class="text-7">Payment id: <?php echo $data['payment_id']; ?></p>

                <div class="go-back text-3" onclick="window.location.href = '<?php echo URLROOT ?>/Merchandise'" style="cursor: pointer; display: flex; align-items: center; gap:1rem;"><i class="fa-solid fa-angles-left"></i><div> Go Back</div></div>

            </div>

        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const quantityInput = document.getElementById("theInput");
                const quantityFinal = document.getElementById("quantity-final");
                const price = document.getElementById("priceOne");
                const totalDisplay = document.querySelector("#totalAmount");

                // Function to update total
                function updateTotal() {
                    const quantity = parseFloat(quantityInput.value) || 0;
                    quantityFinal.textContent = quantity;
                    const priceN = parseFloat(price.value);
                    console.log(priceN); // Debugging line
                    console.log(price.textContent)
                    const totalAmount = quantity * priceN;
                    totalDisplay.textContent = totalAmount.toFixed(2);
                }

                // Add event listeners to donate and contribute inputs
                quantityInput.addEventListener("input", updateTotal);

                // Button click event listeners
                document.getElementById('plus').onclick = function () {
                    quantityInput.value = parseInt(quantityInput.value, 10) + 1;
                    updateTotal();
                };

                document.getElementById('minus').onclick = function () {
                    if (parseInt(quantityInput.value, 10) > 0) {
                        quantityInput.value = parseInt(quantityInput.value, 10) - 1;
                        updateTotal();
                    }
                };

                // Initial update of total
                updateTotal();
            });

        </script>

    </main>
    <!-- <script src="<?php // echo URLROOT ?>/public/js/material.js"></script> -->
    <script src="<?php echo URLROOT ?>/public/js/header.js"></script>
    <script src="<?php echo URLROOT ?>/public/js/districts.js"></script>  
    <script src="<?php echo URLROOT ?>/public/js/payment.js"></script>
    <script src="<?php echo URLROOT ?>/public/js/merchPayment.js"></script>

    <?php require APPROOT . '/views/includes/footer.php' ?>
</body>

</html>