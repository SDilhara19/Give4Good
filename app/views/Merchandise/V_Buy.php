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
        <h1 style="margin-bottom: 0"><?php echo $data['merchandise'][0]->product_name ?></h1>
        <div class="text-2">Fundraiser: <?php echo $data['fundraiser'][0]->title ?></div>
        <div class="merch-buy-con">
            <div class="merch-buy-con-left">
                <div class="merch-buy-details">
                    <div class="merch-img-con">
                        <img src="<?php echo URLROOT . $data['merchandise'][0]->merch_image ?>" alt="merch-image">
                    </div>
                    <div class="merch-data-con">
                        <div class="merch-des fade-effect"><?php echo $data['merchandise'][0]->description ?></div>
                        <div class="merch-con-below">
                            <div class="merch-data-con-below-left text-2">
                                <?php echo "Rs. " . $data['merchandise'][0]->price ?>
                            </div>
                            <div class="merch-data-con-below-right">
                                <div class="quantity buttons_added">
                                    <input id="minus" type="button" class="minus" value="-">
                                    <input id="theInput" type="number" size="4" class="input-text qty text" title="Qty"
                                        value="1" min="0" step="1">
                                    <input id="plus" type="button" class="plus" value="+">
                                </div>
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
                        <p class="text-4 color-green">
                            <?php echo $data['merchandise'][0]->percent_for_fund . '%' ?> of this product is for the
                            fundraiser
                        </p>
                    </div>
                </div>
                <div class="merch-delivery-details">
                    <div class="text-2">Delivery Details</div>

                    <div class="form-row">
                        <div class="form-input-title2">Delivery Address<span class="required">*</span></div>
                        <input type="text" name="address" id="address" class="input" placeholder="" maxlength="200"
                            value="<?php echo $data['fundraiser'][0]->address ?>">
                        <span class="form-invalid">
                            <?php // if(!empty($data['address_err']))echo $data['address_err'];                         ?>
                        </span>
                    </div>
                    <div class="form-row form-flex">
                        <div class="form-flex-left flx-1">
                            <div class="form-input-title">Province<span class="required">*</span></div>
                            <select name="province" id="province" onchange="selectedProvince()" class="input"
                                value="<?php echo $data['location'][0]->province ?>">
                                <option value="Western">Western Province</option>
                                <option value="Central">Central Province</option>
                                <option value="Eastern">Eastern Province</option>
                                <option value="Southern">Southern Province</option>
                                <option value="Northern">North Province</option>
                                <option value="North Western">North Western Province</option>
                                <option value="North Western">North Central Province</option>
                                <option value="Sabaragamuwa">Sabaragamuwa Province</option>
                                <option value="Uva">Uva Province</option>

                            </select>
                            <span class="form-invalid">
                                <?php if (!empty($data['province_err']))
                                    echo $data['province_err']; ?>
                            </span>
                        </div>

                        <div class="form-flex-right flx-1">
                            <div class="form-input-title">District<span class="required">*</span></div>
                            <select name="district" id="district" class="input"
                                value="<?php echo $data['location'][0]->district ?>">
                                <option value="colombo">Colombo</option>
                                <option value="kaluthara">Kaluthara</option>
                            </select>
                            <span class="form-invalid">
                                <?php if (!empty($data['district_err']))
                                    echo $data['district_err']; ?>
                            </span>
                        </div>

                    </div>
                    <div class="form-row form-flex">
                        <div class="form-flex-left flx-1">
                            <div class="form-input-title">Zip Code<span class="required">*</span></div>
                            <input type="text" name="zipcode" id="zipcode" class="input"
                                value="<?php echo $data['location'][0]->zip_code ?>">
                            <span class="form-invalid">
                                <?php if (!empty($data['zipcode_err']))
                                    echo $data['zipcode_err']; ?>
                            </span>
                        </div>

                        <div class="form-flex-right flx-1">
                            <div class="form-input-title">Contact<span class="required">*</span></div>
                            <input type="tel" name="contact" id="contact" class="input"
                                value="<?php echo $data['fundraiser'][0]->phone ?>">
                            <span class="form-invalid">
                                <?php if (!empty($data['contact_err']))
                                    echo $data['contact_err']; ?>
                            </span>
                        </div>

                    </div>


                </div>
            </div>
            <div class="merch-buy-con-right">
                <h4>Summary</h4>
                <div class="fundraiser-count-row">
                    <p class="text-2">
                        Product cost
                    </p>
                    <p class="text-2">
                        <?php echo "Rs. " . $data['merchandise'][0]->price ?>
                        <input type="hidden" id="priceOne" value="<?php echo $data['merchandise'][0]->price; ?>"
                            name="priceOne">
                    <input type="hidden" name="merch_id" id="merch_id" value=<?php echo $data['merchandise'][0]->id ?> >
                        
                    </p>
                </div>
                <div class="fundraiser-count-row">
                    <p class="text-2">
                        Quantity
                    </p>
                    <p class="text-2" id="quantity-final">
                        1
                    </p>
                </div>
                <hr>
                <div class="fundraiser-count-row" style="justify-content: space-between">
                    <div class="text-2">
                        Total
                    </div>
                    <div class="text-2" id="totalAmount">
                        <?php echo "Rs. " . $data['merchandise'][0]->price ?>
                    </div>
                </div>
                <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>

                <button  type="submit" onclick="merchPaymentGateway()" class="main-color-button">
                    Pay
                </button>

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
    <script src="<?php echo URLROOT ?>/public/js/merchPayment.js"></script>

    <?php require APPROOT . '/views/includes/footer.php' ?>
</body>

</html>