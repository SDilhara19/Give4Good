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
    <?php // require APPROOT . '/views/includes/header.php'    ?>
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
                            <div class="progress"></div>
                            <div class="progress-mark"></div>
                            <p class="progress-text">General Info</p>
                        </div>
                        <div class="progress-step">
                            <div class="progress"></div>
                            <div class="progress-mark"></div>
                            <p class="progress-text">Location</p>
                        </div>
                        <div class="progress-step">
                            <div class="progress"></div>
                            <div class="progress-mark"></div>
                            <p class="progress-text">Payments</p>
                        </div>
                        <div class="progress-step">
                            <div class="progress"></div>
                            <div class="progress-mark"></div>
                            <p class="progress-text">Members</p>
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
                                            <img src=<?php echo $_SESSION['userImage'] ?> alt=""
                                                id="profile_image_preview">
                                        </div>
                                        <div class="edit-icon">
                                            <input type="file" accept="image/png, image/jpeg" name="profile_image"
                                                id="profile_image" style="display: none;">
                                            <i class="fa-solid fa-pen-to-square"
                                                onclick="document.getElementById('profile_image').click()"></i>
                                        </div>
                                    </div>
                                    <div class="super-signup-username-con" id="super-signup-username">
                                        <p class="text-2">
                                            <?php echo $_SESSION["userName"] ?>
                                        </p>
                                        <div class="edit-icon">
                                            <i class="fa-solid fa-pen-to-square" onclick=usernameEdit()></i>
                                        </div>
                                        <script>
                                            function usernameEdit() {
                                                document.getElementById("super-signup-username").innerHTML = '<input type="text" name="username" id="username" class="input" placeholder="Company Name" value="<?php echo $_SESSION["userName"] ?>">'
                                            }
                                        </script>
                                    </div>
                                    <div class="form-input-title margin-top">About
                                    </div>
                                    <textarea name="about" id="about" class="fund_story" rows="2" maxlength="300"
                                        placeholder="About your organisation"><?php echo $data['basic-data'][0]->about; ?></textarea>



                                    <div class="form-flex">
                                        <div class="form-flex-left flx-1">
                                            <div class="form-input-title">Registration No.<span
                                                    class="required">*</span>
                                            </div>
                                            <input type="text" name="regNo" id="regNo" class="input"
                                                placeholder="Business Registration Number"
                                                value="<?php echo $data['basic-data'][0]->regno; ?>">
                                            <span class="form-invalid">
                                                <?php if (!empty($data['regNo_err']))
                                                    echo $data['regNo_err']; ?>
                                            </span>
                                        </div>

                                        <div class="form-flex-right flx-1">
                                            <div class="form-input-title">Date of Registration<span
                                                    class="required">*</span>
                                            </div>
                                            <input type="date" name="doReg" id="doReg" class="input">
                                            <span class="form-invalid">
                                                <?php if (!empty($data['doReg_err']))
                                                    echo $data['doReg_err']; ?>
                                            </span>
                                        </div>


                                    </div>

                                    <div class="form-flex">
                                        <div class="form-flex-left flx-1">


                                            <div class="form-input-title">Registration Certificate<span
                                                    class="required">*</span>
                                            </div>
                                            <label for="reg_certificate" class="custom-file-input">
                                                <span>Choose Image</span>
                                                <input type="file" accept="image/png, image/jpeg" name="reg_certificate"
                                                    id="reg_certificate">
                                            </label>

                                            <div class="nic-form-image-container">
                                                <img src="<?php echo URLROOT ?>/public/Assets/images/default-images/Sample-document.png"
                                                    alt="image here" id="reg_certificate_preview">
                                                <span class="fade-effect"></span>
                                            </div>
                                            <span class="form-invalid">
                                                <?php if (!empty($data['reg_certificate_err']))
                                                    echo $data['reg_certificate_err']; ?>
                                            </span>

                                        </div>

                                        <div class="form-flex-right flx-1">


                                            <div class="form-input-title">Certification<span class="required">*</span>
                                            </div>
                                            <label for="certification" class="custom-file-input">
                                                <span>Choose Image</span>
                                                <input type="file" accept="image/png, image/jpeg" name="certification"
                                                    id="certification">
                                            </label>

                                            <div class="nic-form-image-container">
                                                <img src="<?php echo URLROOT ?>/public/Assets/images/default-images/Sample-document.png"
                                                    alt="image here" id="certification_preview">
                                                <span class="fade-effect"></span>
                                            </div>
                                            <span class="form-invalid">
                                                <?php if (!empty($data['certification_err']))
                                                    echo $data['certification_err']; ?>
                                            </span>

                                        </div>

                                    </div>
                                    <br>
                                </div>
                                <div class="donee-name text-8">
                                    <i class='bx bxs-info-circle'></i>
                                    <span style="font-size: 0.65rem;">Certification: Authorisation to fundraise from a
                                        govt. officer equal or higher than a AG not older than a month</span>
                                </div>
                                <div class="step-container-bottom">
                                    <div class="js-next-prev-button">

                                        <div class="js-next" onclick="nextStep(4)">Next</div>
                                    </div>
                                </div>


                            </fieldset>
                        </div>
                        <div class="step-container">
                            <fieldset>
                                <div class="step-container-top">
                                    <!-- <legend class="text-2"> Personal Info</legend> -->
                                    <div class="form-input-title">Location<span class="required">*</span></div>
                                    <div class="donee-name text-8">
                                        <i class='bx bxs-info-circle'></i>
                                        <span style="font-size: 0.65rem;">If not located physically provide location
                                            details of the president of the organisation</span>
                                    </div>
                                    <input type="text" name="address" id="address" class="input"
                                        value="<?php echo $data['basic-data'][0]->Address; ?>"
                                        placeholder="Permanent location address">
                                    <span class="form-invalid">
                                        <?php if (!empty($data['address_err']))
                                            echo $data['address_err']; ?>
                                    </span>

                                    <div class="form-flex">
                                        <div class="form-flex-left flx-1">
                                            <div class="form-input-title">Province<span class="required">*</span></div>
                                            <select name="province" id="province" onchange="selectedProvince()"
                                                class="input">
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
                                        <div class="form-flex-left flx-1">
                                            <div class="form-input-title">Zip Code<span class="required">*</span></div>
                                            <input type="text" name="zipcode" id="zipcode" class="input"
                                                placeholder="Zip code">
                                            <span class="form-invalid">
                                                <?php if (!empty($data['zipcode_err']))
                                                    echo $data['zipcode_err']; ?>
                                            </span>
                                        </div>

                                        <div class="form-flex-right flx-1">
                                            <div class="form-input-title">Contact<span class="required">*</span></div>
                                            <input type="tel" name="contact" id="contact" class="input"
                                                value="<?php echo $data['basic-data'][0]->phone; ?>">
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
                                        <div class="js-next" onclick="nextStep(4)">Next</div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <div class="step-container">
                            <fieldset>
                                <div class="step-container-top">
                                    <!-- <legend class="text-2"> Personal Info</legend> -->
                                    <div class="form-input-title">Account Holder<span class="required">*</span></div>
                                    <div class="donee-name text-8">
                                        <i class='bx bxs-info-circle'></i>
                                        <span style="font-size: 0.65rem;">Bank account should be registered under
                                            the business name</span>
                                    </div>
                                    <input type="text" name="name" id="name" class="input" placeholder="Name">
                                    <span class="form-invalid">
                                        <?php if (!empty($data['name_err']))
                                            echo $data['name_err']; ?>
                                    </span>

                                    <div class="form-input-title">Account No.<span class="required">*</span></div>
                                    <input type="text" name="accountNo" id="accountNo" class="input"
                                        placeholder="Account No">
                                    <span class="form-invalid">
                                        <?php if (!empty($data['accountNo_err']))
                                            echo $data['accountNo_err']; ?>
                                    </span>

                                    <div class="form-flex">
                                        <div class="form-flex-left flx-1">
                                            <div class="form-input-title">Bank Code<span class="required">*</span></div>
                                            <input type="text" name="bankcode" id="bankcode" class="input">
                                            <span class="form-invalid">
                                                <?php if (!empty($data['bankcode_err']))
                                                    echo $data['bankcode_err']; ?>
                                            </span>
                                        </div>

                                        <div class="form-flex-right flx-1">
                                            <div class="form-input-title">Bank<span class="required">*</span></div>
                                            <input type="text" name="bank" id="bank" class="input">
                                            <span class="form-invalid">
                                                <?php if (!empty($data['bank_err']))
                                                    echo $data['bank_err']; ?>
                                            </span>
                                        </div>


                                    </div>


                                    <div class="form-flex">
                                        <div class="form-flex-left flx-1">
                                            <div class="form-input-title">Branch Code<span class="required">*</span>
                                            </div>
                                            <input type="text" name="branchcode" id="branchcode" class="input">
                                            <span class="form-invalid">
                                                <?php if (!empty($data['branchcode_err']))
                                                    echo $data['branchcode_err']; ?>
                                            </span>
                                        </div>

                                        <div class="form-flex-right flx-1">
                                            <div class="form-input-title">Branch<span class="required">*</span></div>
                                            <input type="text" name="branch" id="branch" class="input">
                                            <span class="form-invalid">
                                                <?php if (!empty($data['branch_err']))
                                                    echo $data['branch_err']; ?>
                                            </span>
                                        </div>

                                    </div>

                                    <div class="form-flex">
                                        <div class="form-flex-left flx-1">


                                            <div class="form-input-title">Bank Pass Book <span class="required">*</span>
                                            </div>
                                            <label for="pass_book" class="custom-file-input">
                                                <span>Choose Image</span>
                                                <input type="file" accept="image/png, image/jpeg" name="pass_book"
                                                    id="pass_book_image">
                                            </label>

                                            <div class="nic-form-image-container">
                                                <img src="<?php echo URLROOT ?>/public/Assets/images/default-images/Sample-document.png"
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
                                        <div class="js-next" onclick="nextStep(4)">Next</div>

                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <!-- member details -->
                        <div class="step-container">
                            <fieldset>
                                <div class="step-container-top">
                                    <div class="executive-details">
                                        <p class='text-2'>Executive Details<i class="fa-solid fa-caret-down"
                                                id="ex-drop-down"></i></p>
                                        <div class="donee-name text-8">
                                            <i class='bx bxs-info-circle'></i>
                                            <span style="font-size: 0.65rem;">Details of a executive in your
                                                organisation</span>
                                        </div>
                                        <div class="executive-details-form" id="ex-form">
                                            <div class="form-input-title">Fullname<span class="required">*</span></div>
                                            <input type="text" name="ex-fullname" id="ex-fullname" class="input"
                                                placeholder="">
                                            <span class="form-invalid">
                                                <?php if (!empty($data['ex-fullname_err']))
                                                    echo $data['ex-fullname_err']; ?>
                                            </span>

                                            <div class="form-flex">
                                                <div class="form-flex-left flx-1">
                                                    <div class="form-input-title">Designation<span
                                                            class="required">*</span></div>
                                                    <input type="text" name="ex-designation" id="ex-designation"
                                                        class="input" placeholder="title">
                                                    <span class="form-invalid">
                                                        <?php if (!empty($data['ex-designation_err']))
                                                            echo $data['ex-designation_err']; ?>
                                                    </span>
                                                </div>

                                                <div class="form-flex-right flx-1">
                                                    <div class="form-input-title">National ID<span
                                                            class="required">*</span></div>
                                                    <input type="tel" name="ex-nicNo" id="ex-nicNo" class="input">
                                                    <span class="form-invalid">
                                                        <?php if (!empty($data['ex-nicNo_err']))
                                                            echo $data['ex-nicNo_err']; ?>
                                                    </span>
                                                </div>

                                            </div>

                                            <div class="form-input-title">Address<span class="required">*</span></div>
                                            <input type="text" name="ex-address" id="ex-address" class="input"
                                                placeholder="">
                                            <span class="form-invalid">
                                                <?php if (!empty($data['ex-address_err']))
                                                    echo $data['ex-address_err']; ?>
                                            </span>

                                            <div class="form-flex">
                                                <div class="form-flex-left flx-1">
                                                    <div class="form-input-title">Email<span class="required">*</span>
                                                    </div>
                                                    <input type="text" name="ex-email" id="ex-email" class="input"
                                                        placeholder="">
                                                    <span class="form-invalid">
                                                        <?php if (!empty($data['ex-email_err']))
                                                            echo $data['ex-email_err']; ?>
                                                    </span>
                                                </div>

                                                <div class="form-flex-right flx-1">
                                                    <div class="form-input-title">Contact<span class="required">*</span>
                                                    </div>
                                                    <input type="tel" name="ex-contact" id="ex-contact" class="input">
                                                    <span class="form-invalid">
                                                        <?php if (!empty($data['ex-contact_err']))
                                                            echo $data['ex-contact_err']; ?>
                                                    </span>
                                                </div>

                                            </div>

                                            <div class="form-flex">
                                                <div class="form-flex-left flx-1">


                                                    <div class="form-input-title">NIC Image-Front<span
                                                            class="required">*</span>
                                                    </div>
                                                    <label for="ex-nic_front_image" class="custom-file-input">
                                                        <span>Choose Image</span>
                                                        <input type="file" accept="image/png, image/jpeg"
                                                            name="ex-nic_front_image" id="ex-nic_front_image">
                                                    </label>

                                                    <div class="nic-form-image-container">
                                                        <img src="<?php echo URLROOT ?>/public/Assets/images/nic.jpg"
                                                            alt="image here" id="ex-nic_front_preview">
                                                        <span class="fade-effect"></span>
                                                    </div>
                                                    <span class="form-invalid">
                                                        <?php if (!empty($data['ex-nic_front_image_err']))
                                                            echo $data['ex-nic_front_image_err']; ?>
                                                    </span>

                                                </div>

                                                <div class="form-flex-right flx-1">


                                                    <div class="form-input-title">NIC Image-Back<span
                                                            class="required">*</span>
                                                    </div>
                                                    <label for="ex-nic_back_image" class="custom-file-input">
                                                        <span>Choose Image</span>
                                                        <input type="file" accept="image/png, image/jpeg"
                                                            name="ex-nic_back_image" id="ex-nic_back_image">
                                                    </label>

                                                    <div class="nic-form-image-container">
                                                        <img src="<?php echo URLROOT ?>/public/Assets/images/nic.jpg"
                                                            alt="image here" id="ex-nic_back_preview">
                                                        <span class="fade-effect"></span>
                                                    </div>
                                                    <span class="form-invalid">
                                                        <?php if (!empty($data['ex-nic_back_image_err']))
                                                            echo $data['ex-nic_back_image_err']; ?>
                                                    </span>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="treasurer-details">
                                        <p class='text-2'>Treasurer Details<i class="fa-solid fa-caret-down"
                                                id="tr-drop-down"></i></p>
                                        <div class="donee-name text-8">
                                            <i class='bx bxs-info-circle'></i>
                                            <span style="font-size: 0.65rem;">Details of a treasurer or a person with
                                                equal responsibilities in your
                                                organisation</span>
                                        </div>
                                        <div class="treasurer-details-form" id="tr-form">
                                            <div class="form-input-title">Fullname<span class="required">*</span></div>
                                            <input type="text" name="tr-fullname" id="tr-fullname" class="input"
                                                placeholder="">
                                            <span class="form-invalid">
                                                <?php if (!empty($data['tr-fullname_err']))
                                                    echo $data['tr-fullname_err']; ?>
                                            </span>

                                            <div class="form-flex">
                                                <div class="form-flex-left flx-1">
                                                    <div class="form-input-title">Designation<span
                                                            class="required">*</span></div>
                                                    <input type="text" name="tr-designation" id="tr-designation"
                                                        class="input" placeholder="title">
                                                    <span class="form-invalid">
                                                        <?php if (!empty($data['tr-designation_err']))
                                                            echo $data['tr-designation_err']; ?>
                                                    </span>
                                                </div>

                                                <div class="form-flex-right flx-1">
                                                    <div class="form-input-title">National ID<span
                                                            class="required">*</span></div>
                                                    <input type="tel" name="tr-nicNo" id="tr-nicNo" class="input">
                                                    <span class="form-invalid">
                                                        <?php if (!empty($data['tr-nicNo_err']))
                                                            echo $data['tr-nicNo_err']; ?>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="form-input-title">Address<span class="required">*</span></div>
                                            <input type="text" name="tr-address" id="tr-address" class="input"
                                                placeholder="">
                                            <span class="form-invalid">
                                                <?php if (!empty($data['tr-address_err']))
                                                    echo $data['tr-address_err']; ?>
                                            </span>

                                            <div class="form-flex">
                                                <div class="form-flex-left flx-1">
                                                    <div class="form-input-title">Email<span class="required">*</span>
                                                    </div>
                                                    <input type="text" name="tr-email" id="tr-email" class="input"
                                                        placeholder="title">
                                                    <span class="form-invalid">
                                                        <?php if (!empty($data['tr-email_err']))
                                                            echo $data['tr-email_err']; ?>
                                                    </span>
                                                </div>

                                                <div class="form-flex-right flx-1">
                                                    <div class="form-input-title">Contact<span class="required">*</span>
                                                    </div>
                                                    <input type="tel" name="tr-contact" id="tr-contact" class="input">
                                                    <span class="form-invalid">
                                                        <?php if (!empty($data['tr-contact_err']))
                                                            echo $data['tr-contact_err']; ?>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="form-flex">
                                                <div class="form-flex-left flx-1">
                                                    <div class="form-input-title">NIC Image-Front<span
                                                            class="required">*</span></div>
                                                    <label for="tr-nic_front_image" class="custom-file-input">
                                                        <span>Choose Image</span>
                                                        <input type="file" accept="image/png, image/jpeg"
                                                            name="tr-nic_front_image" id="tr-nic_front_image">
                                                    </label>

                                                    <div class="nic-form-image-container">
                                                        <img src="<?php echo URLROOT ?>/public/Assets/images/nic.jpg"
                                                            alt="image here" id="tr-nic_front_preview">
                                                        <span class="fade-effect"></span>
                                                    </div>
                                                    <span class="form-invalid">
                                                        <?php if (!empty($data['tr-nic_front_image_err']))
                                                            echo $data['tr-nic_front_image_err']; ?>
                                                    </span>
                                                </div>

                                                <div class="form-flex-right flx-1">
                                                    <div class="form-input-title">NIC Image-Back<span
                                                            class="required">*</span></div>
                                                    <label for="tr-nic_back_image" class="custom-file-input">
                                                        <span>Choose Image</span>
                                                        <input type="file" accept="image/png, image/jpeg"
                                                            name="tr-nic_back_image" id="tr-nic_back_image">
                                                    </label>

                                                    <div class="nic-form-image-container">
                                                        <img src="<?php echo URLROOT ?>/public/Assets/images/nic.jpg"
                                                            alt="image here" id="tr-nic_back_preview">
                                                        <span class="fade-effect"></span>
                                                    </div>
                                                    <span class="form-invalid">
                                                        <?php if (!empty($data['tr-nic_back_image_err']))
                                                            echo $data['tr-nic_back_image_err']; ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="secretary-details">
                                        <p class='text-2'>Secretary Details<i class="fa-solid fa-caret-down"
                                                id="sec-drop-down"></i></p>
                                        <div class="donee-name text-8">
                                            <i class='bx bxs-info-circle'></i>
                                            <span style="font-size: 0.65rem;">Details of a secretary in your
                                                organisation</span>
                                        </div>
                                        <div class="secretary-details-form" id="sec-form">
                                            <div class="form-input-title">Fullname<span class="required">*</span></div>
                                            <input type="text" name="sec-fullname" id="sec-fullname" class="input"
                                                placeholder="">
                                            <span class="form-invalid">
                                                <?php if (!empty($data['sec-fullname_err']))
                                                    echo $data['sec-fullname_err']; ?>
                                            </span>

                                            <div class="form-flex">
                                                <div class="form-flex-left flx-1">
                                                    <div class="form-input-title">Designation<span
                                                            class="required">*</span></div>
                                                    <input type="text" name="sec-designation" id="sec-designation"
                                                        class="input" placeholder="title">
                                                    <span class="form-invalid">
                                                        <?php if (!empty($data['sec-designation_err']))
                                                            echo $data['sec-designation_err']; ?>
                                                    </span>
                                                </div>

                                                <div class="form-flex-right flx-1">
                                                    <div class="form-input-title">National ID<span
                                                            class="required">*</span></div>
                                                    <input type="tel" name="sec-nicNo" id="sec-nicNo" class="input">
                                                    <span class="form-invalid">
                                                        <?php if (!empty($data['sec-nicNo_err']))
                                                            echo $data['sec-nicNo_err']; ?>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="form-input-title">Address<span class="required">*</span></div>
                                            <input type="text" name="sec-address" id="sec-address" class="input"
                                                placeholder="">
                                            <span class="form-invalid">
                                                <?php if (!empty($data['sec-address_err']))
                                                    echo $data['sec-address_err']; ?>
                                            </span>

                                            <div class="form-flex">
                                                <div class="form-flex-left flx-1">
                                                    <div class="form-input-title">Email<span class="required">*</span>
                                                    </div>
                                                    <input type="text" name="sec-email" id="sec-email" class="input"
                                                        placeholder="">
                                                    <span class="form-invalid">
                                                        <?php if (!empty($data['sec-email_err']))
                                                            echo $data['sec-email_err']; ?>
                                                    </span>
                                                </div>

                                                <div class="form-flex-right flx-1">
                                                    <div class="form-input-title">Contact<span class="required">*</span>
                                                    </div>
                                                    <input type="tel" name="sec-contact" id="sec-contact" class="input">
                                                    <span class="form-invalid">
                                                        <?php if (!empty($data['sec-contact_err']))
                                                            echo $data['sec-contact_err']; ?>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="form-flex">
                                                <div class="form-flex-left flx-1">
                                                    <div class="form-input-title">NIC Image-Front<span
                                                            class="required">*</span></div>
                                                    <label for="sec-nic_front_image" class="custom-file-input">
                                                        <span>Choose Image</span>
                                                        <input type="file" accept="image/png, image/jpeg"
                                                            name="sec-nic_front_image" id="sec-nic_front_image">
                                                    </label>
                                                    <div class="nic-form-image-container">
                                                        <img src="<?php echo URLROOT ?>/public/Assets/images/nic.jpg"
                                                            alt="image here" id="sec-nic_front_preview">
                                                        <span class="fade-effect"></span>
                                                    </div>
                                                    <span class="form-invalid">
                                                        <?php if (!empty($data['sec-nic_front_image_err']))
                                                            echo $data['sec-nic_front_image_err']; ?>
                                                    </span>
                                                </div>

                                                <div class="form-flex-right flx-1">
                                                    <div class="form-input-title">NIC Image-Back<span
                                                            class="required">*</span></div>
                                                    <label for="sec-nic_back_image" class="custom-file-input">
                                                        <span>Choose Image</span>
                                                        <input type="file" accept="image/png, image/jpeg"
                                                            name="sec-nic_back_image" id="sec-nic_back_image">
                                                    </label>
                                                    <div class="nic-form-image-container">
                                                        <img src="<?php echo URLROOT ?>/public/Assets/images/nic.jpg"
                                                            alt="image here" id="sec-nic_back_preview">
                                                        <span class="fade-effect"></span>
                                                    </div>
                                                    <span class="form-invalid">
                                                        <?php if (!empty($data['sec-nic_back_image_err']))
                                                            echo $data['sec-nic_back_image_err']; ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <br>
                                </div>
                                <div class="step-container-bottom">
                                    <div class="js-next-prev-button">
                                        <div class="js-prev" onclick="prevStep()">Previous</div>
                                        <button class="js-next" onclick="nextStep(4)" type="submit">Submit</button>

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
        setupImagePreview("#reg_certificate", "#reg_certificate_preview");
        setupImagePreview("#certification", "#certification_preview");
        setupImagePreview("#pass_book_image", "#pass_book");

        setupImagePreview("#profile_image", "#profile_image_preview");

    </script>

    <script>

        let exDropdown = document.querySelector('#ex-drop-down')
        let exForm = document.querySelector('#ex-form')

        exDropdown.onclick = function () {
            exForm.classList.toggle('active')
            exForm.classList.toggle('inactive')

            if (trForm.classList.contains('active')) {
                trForm.classList.remove('active');
            };
            if (secForm.classList.contains('active')) {
                secForm.classList.remove('active');
            }


            setupImagePreview("#ex-nic_front_image", "#ex-nic_front_preview");
            setupImagePreview("#ex-nic_back_image", "#ex-nic_back_preview");
        }
        let trDropdown = document.querySelector('#tr-drop-down')
        let trForm = document.querySelector('#tr-form')


        trDropdown.onclick = function () {
            trForm.classList.toggle('active')
            trForm.classList.toggle('inactive')

            if (exForm.classList.contains('active')) {
                exForm.classList.remove('active');
            }
            if (secForm.classList.contains('active')) {
                secForm.classList.remove('active');
            }
            setupImagePreview("#tr-nic_back_image", "#tr-nic_back_preview");
            setupImagePreview("#tr-nic_front_image", "#tr-nic_front_preview");
        };

        let secDropdown = document.querySelector('#sec-drop-down');
        let secForm = document.querySelector('#sec-form');

        secDropdown.onclick = function () {
            secForm.classList.toggle('active');
            secForm.classList.toggle('inactive');

            if (trForm.classList.contains('active')) {
                trForm.classList.remove('active');
            }
            if (exForm.classList.contains('active')) {
                exForm.classList.remove('active');
            }

            setupImagePreview("#sec-nic_front_image", "#sec-nic_front_preview");
            setupImagePreview("#sec-nic_back_image", "#sec-nic_back_preview");
        };



    </script>


</body>

</html>