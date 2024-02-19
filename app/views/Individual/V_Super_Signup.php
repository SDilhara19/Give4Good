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
    <?php // require APPROOT . '/views/includes/header.php'   ?>
    <div class="form-body">
        <main class="form-main">
            <div class="form-container-left">
                <div class="form-progress-bar-container">
                    <div class="form-inactive-progress-bar-container">
                        <div class="form-inactive-progress-bar"></div>
                        <div class="inactive-progress-mark"></div>
                    </div>
                    <div class="form-progress-bar">
                        <div class="progress-step">
                        <div class="progress active"></div>
                            <div class="progress-mark active"></div>
                            <p class="progress-text active">Bank Details</p>
                        </div>
                        <div class="progress-step">
                            <div class="progress"></div>
                            <div class="progress-mark"></div>
                            <p class="progress-text">Bank Details</p>
                        </div>
                        <div class="progress-step">
                        <div class="progress"></div>
                            <div class="progress-mark"></div>
                            <p class="progress-text">Bank Details</p>
                        </div>
                    </div>


                </div>

            </div>

            <div class="form-container-right">
                <div class="form-container">
                    <!-- <h1 class="form-topic"> Super User Sign Up </h1> -->

                    <form action="super" method="post" enctype="multipart/form-data">
                        <div class="form-con-topic">
                            <h3>A few steps away from becoming a super user</h3>
                        </div>


                        <div class="step-container active">
                            <fieldset>
                                <div class="step-container-top">
                                    <div class="super-signup-profile-img-con">
                                        <div class="super-signup-profile-image">
                                            <img src=<?php echo $_SESSION['userImage'] ?> alt="">
                                        </div>
                                        <div class="edit-icon">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </div>
                                    </div>
                                    <div class="super-signup-username-con">
                                        <p class="text-2">
                                            <?php echo $_SESSION["userName"] ?>
                                        </p>
                                        <div class="edit-icon">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </div>
                                    </div>
                                    <div class="form-input-title margin-top">Fullname<span class="required">*</span>
                                    </div>
                                    <input type="text" name="fullname" id="fullname" class="input"
                                        placeholder="Full name as in National Identity Card">
                                    <span class="form-invalid">
                                        <?php if (!empty($data['fullname_err']))
                                            echo $data['fullname_err']; ?>
                                    </span>


                                    <div class="form-flex">
                                        <div class="form-flex-left">
                                            <div class="form-input-title">National ID<span class="required">*</span>
                                            </div>
                                            <input type="text" name="nicNo" id="nicNo" class="input"
                                                placeholder="National Identity Card Number">
                                            <span class="form-invalid">
                                                <?php if (!empty($data['nicNo_err']))
                                                    echo $data['nicNo_err']; ?>
                                            </span>
                                        </div>

                                        <div class="form-flex-right">
                                            <div class="form-input-title">Date of Birth<span class="required">*</span>
                                            </div>
                                            <input type="date" name="dob" id="dob" class="input">
                                            <span class="form-invalid">
                                                <?php if (!empty($data['dob_err']))
                                                    echo $data['dob_err']; ?>
                                            </span>
                                        </div>


                                    </div>

                                    <div class="form-flex">
                                        <div class="form-flex-left">


                                            <div class="form-input-title">NIC Image-Front<span class="required">*</span>
                                            </div>
                                            <label for="nic_front_image" class="custom-file-input">
                                                <span>Choose Image</span>
                                                <input type="file" accept="image/png, image/jpeg" name="nic_front_image"
                                                    id="nic_front_image">
                                            </label>

                                            <div class="nic-form-image-container">
                                                <img src="<?php echo URLROOT ?>/public/Assets/images/nic.jpg"
                                                    alt="image here" id="nic-front">
                                                <span class="fade-effect"></span>
                                            </div>
                                            <span class="form-invalid">
                                                <?php if (!empty($data['nic_front_image_err']))
                                                    echo $data['nic_front_image_err']; ?>
                                            </span>

                                        </div>

                                        <div class="form-flex-right">


                                            <div class="form-input-title">NIC Image-Back<span class="required">*</span>
                                            </div>
                                            <label for="nic_back_image" class="custom-file-input">
                                                <span>Choose Image</span>
                                                <input type="file" accept="image/png, image/jpeg" name="nic_back_image"
                                                    id="nic_back_image">
                                            </label>

                                            <div class="nic-form-image-container">
                                                <img src="<?php echo URLROOT ?>/public/Assets/images/nic.jpg"
                                                    alt="image here" id="nic-back">
                                                <span class="fade-effect"></span>
                                            </div>
                                            <span class="form-invalid">
                                                <?php if (!empty($data['nic_back_image_err']))
                                                    echo $data['nic_back_image_err']; ?>
                                            </span>

                                        </div>

                                    </div>
                                    <br>
                                </div>
                                <div class="step-container-bottom">
                                    <div class="js-next-prev-button">

                                        <div class="js-next" onclick="nextStep()">Next</div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="step-container">
                            <fieldset>
                                <div class="step-container-top">
                                    <!-- <legend class="text-2"> Personal Info</legend> -->
                                    <div class="form-input-title">Address<span class="required">*</span></div>
                                    <input type="text" name="address" id="address" class="input"
                                        placeholder="Permanent residence address">
                                    <span class="form-invalid">
                                        <?php if (!empty($data['address_err']))
                                            echo $data['address_err']; ?>
                                    </span>

                                    <div class="form-flex">
                                        <div class="form-flex-left">
                                            <div class="form-input-title">Province<span class="required">*</span></div>
                                            <select name="province" id="province" onchange="selectedProvince()"
                                                class="input">
                                                <option value="none">None</option>
                                                <option value="Western">Western Province</option>
                                                <option value="Central">Central Province</option>
                                                <option value="Westedrn">Western</option>
                                            </select>
                                            <span class="form-invalid">
                                                <?php if (!empty($data['province_err']))
                                                    echo $data['province_err']; ?>
                                            </span>
                                        </div>

                                        <div class="form-flex-right">
                                            <div class="form-input-title">District<span class="required">*</span></div>
                                            <select name="district" id="district" class="input">
                                                <option value="none">None</option>
                                            </select>
                                            <span class="form-invalid">
                                                <?php if (!empty($data['district_err']))
                                                    echo $data['district_err']; ?>
                                            </span>
                                        </div>

                                    </div>
                                    <div class="form-flex">
                                        <div class="form-flex-left">
                                            <div class="form-input-title">Zip Code<span class="required">*</span></div>
                                            <input type="text" name="zipcode" id="zipcode" class="input"
                                                placeholder="Zip code">
                                            <span class="form-invalid">
                                                <?php if (!empty($data['zipcode_err']))
                                                    echo $data['zipcode_err']; ?>
                                            </span>
                                        </div>

                                        <div class="form-flex-right">
                                            <div class="form-input-title">Contact<span class="required">*</span></div>
                                            <input type="tel" name="contact" id="contact" class="input">
                                            <span class="form-invalid">
                                                <?php if (!empty($data['contact_err']))
                                                    echo $data['contact_err']; ?>
                                            </span>
                                        </div>

                                    </div>


                                    <br>
                                </div>
                                <div class="step-container-bottom">
                                    <div class="js-next-prev-button">
                                        <div class="js-prev" onclick="prevStep()">Previous</div>
                                        <div class="js-next" onclick="nextStep()">Next</div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <div class="step-container">
                            <fieldset>
                                <div class="step-container-top">
                                    <!-- <legend class="text-2"> Personal Info</legend> -->
                                    <div class="form-input-title">Account Holder<span class="required">*</span></div>
                                    <input type="text" name="name" id="name" class="input" placeholder="Name">
                                    <span class="form-invalid">
                                        <?php if (!empty($data['name_err']))
                                            echo $data['name_err']; ?>
                                    </span>

                                    <div class="form-input-title">Account No.<span class="required">*</span></div>
                                    <input type="text" name="accountNo" id="accountNo" class="input" placeholder="Account No">
                                    <span class="form-invalid">
                                        <?php if (!empty($data['accountNo_err']))
                                            echo $data['accountNo_err']; ?>
                                    </span>

                                    <div class="form-flex">
                                        <div class="form-flex-left">
                                            <div class="form-input-title">Bank Code<span class="required">*</span></div>
                                            <input type="number" name="bankcode" id="bankcode" class="input">
                                            <span class="form-invalid">
                                                <?php if (!empty($data['bankcode_err']))
                                                    echo $data['bankcode_err']; ?>
                                            </span>
                                        </div>

                                        <div class="form-flex-right">
                                            <div class="form-input-title">Bank<span class="required">*</span></div>
                                            <input type="text" name="bank" id="bank" class="input">
                                            <span class="form-invalid">
                                                <?php if (!empty($data['bank_err']))
                                                    echo $data['bank_err']; ?>
                                            </span>
                                        </div>


                                    </div>


                                    <div class="form-flex">
                                        <div class="form-flex-left">
                                            <div class="form-input-title">Branch Code<span class="required">*</span>
                                            </div>
                                            <input type="number" name="branchcode" id="branchcode" class="input">
                                            <span class="form-invalid">
                                                <?php if (!empty($data['branchcode_err']))
                                                    echo $data['branchcode_err']; ?>
                                            </span>
                                        </div>

                                        <div class="form-flex-right">
                                            <div class="form-input-title">Branch<span class="required">*</span></div>
                                            <input type="text" name="branch" id="branch" class="input">
                                            <span class="form-invalid">
                                                <?php if (!empty($data['branch_err']))
                                                    echo $data['branch_err']; ?>
                                            </span>
                                        </div>

                                    </div>

                                    <div class="form-flex">
                                        <div class="form-flex-left">


                                            <div class="form-input-title">Bank Pass Book <span class="required">*</span>
                                            </div>
                                            <label for="pass_book" class="custom-file-input">
                                                <span>Choose Image</span>
                                                <input type="file" accept="image/png, image/jpeg" name="pass_book"
                                                    id="pass_book_image">
                                            </label>

                                            <div class="nic-form-image-container">
                                                <img src="<?php echo URLROOT ?>/public/Assets/images/nic.jpg"
                                                    alt="image here" id="pass_book">
                                                <span class="fade-effect"></span>
                                            </div>
                                            <span class="form-invalid">
                                                <?php if (!empty($data['pass_book_err']))
                                                    echo $data['pass_book_err']; ?>
                                            </span>

                                        </div>

                                    


                                    </div>
                                    <br>
                                </div>
                                <div class="step-container-bottom">
                                    <div class="js-next-prev-button">
                                        <div class="js-prev" onclick="prevStep()">Previous</div>
                                        <button class="js-next" type="submit">Submit</button>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>



        </main>
    </div>


    <script src="<?php echo URLROOT ?>/public/js/districts.js"></script>
    <script src="<?php echo URLROOT ?>/public/js/multistep-form.js"></script>
    <script src="<?php echo URLROOT ?>/public/js/form-image.js"></script>
    <script>
        // setupImagePreview("#form_image", ".form-image-container img");
        setupImagePreview("#nic_front_image", "#nic-front");
        setupImagePreview("#nic_back_image", "#nic-back");
        setupImagePreview("#pass_book_image", "#pass_book");
        
    </script>

</body>

</html>