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
                            <p class="progress-text">Info</p>
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
                                    <div class="form-input-title margin-top">About
                                    </div>
                                    <textarea name="about" id="about" class="fund_story" rows="2" maxlength="300"
                        placeholder=""></textarea>
                                    


                                    <div class="form-flex">
                                        <div class="form-flex-left flx-1">
                                            <div class="form-input-title">Registration No.<span class="required">*</span>
                                            </div>
                                            <input type="text" name="regNo" id="regNo" class="input"
                                                placeholder="Business Registration Number">
                                            <span class="form-invalid">
                                                <?php if (!empty($data['regNo_err']))
                                                    echo $data['regNo_err']; ?>
                                            </span>
                                        </div>

                                        <div class="form-flex-right flx-1">
                                            <div class="form-input-title">Date of Registration<span class="required">*</span>
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


                                            <div class="form-input-title">Registration Certificate<span class="required">*</span>
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
                                <div class="step-container-bottom">
                                    <div class="js-next-prev-button">

                                        <div class="js-next" onclick="nextStep(4)">Next</div>
                                    </div>
                                </div>
                                <div class="donee-name text-8">
                                <i class='bx bxs-info-circle'></i>
                             <span style="font-size: 0.65rem;">Certification: Authorisation to fundraise from a govt. officer equal or higher than a AG not older than a month</span>  </div>

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
                                        <div class="form-flex-left flx-1">
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
                                        <div class="js-next" onclick="nextStep(4)">Next</div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <div class="step-container">
                            <fieldset>
                                <div class="step-container-top">
                                    <!-- <legend class="text-2"> Personal Info</legend> -->
                                    <div class="form-input-title">Account Holder(Bank account should be registered under the business name)<span class="required">*</span></div>
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
                                            <input type="number" name="bankcode" id="bankcode" class="input">
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
                                            <input type="number" name="branchcode" id="branchcode" class="input">
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
                                        <button class="js-next" onclick="nextStep(4)">Next</button>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <div class="step-container">
                            <fieldset>
                                <div class="step-container-top">
                                    
                                <div class="form-set">
                <p class="text-6">Dependent details(if parent funding)</p>
                <div class="form-row form-flex">
                  <div class="form-input-title2">Is the fund requirer below age 18</div>
                  <div class="checkbox-wrapper-2">
                    <input type="checkbox" class="sc-gJwTLC ikxBAC" name="child" id="child" value="on">
                  </div>
                </div>

                <div class="child-form">
                  <div class="form-row form-flex">
                    <div class="flx-1">
                      <div class="form-input-title2">Fullname<span class="required">*</span>
                      </div>
                      <input type="text" name="dependent_name" id="dependent_name" class="input" placeholder="">
                      <span class="form-invalid">
                        <?php // if (!empty($data['dependent_name_err']))
                        // echo $data['dependent_name_err'];                         ?>
                        Required field
                      </span>
                    </div>
                  </div>
                  <div class="form-row form-flex">
                    <div class="flx-1">
                      <div class="form-input-title2">Birthdate<span class="required">*</span>
                      </div>
                      <input type="text" name="dependent_birthdate" id="dependent_birthdate" class="input"
                        placeholder="">
                      <span class="form-invalid">
                        <?php // if (!empty($data['dependent_birthdate_err']))
                        // echo $data['dependent_birthdate_err'];                         ?>
                        Required field
                      </span>
                    </div>
                    <div class="flx-1">
                      <div class="form-input-title2">Relationship to the child<span class="required">*</span>
                      </div>
                      <input type="text" name="relationship" id="relationship" class="input" placeholder="XXXXX">
                      <span class="form-invalid">
                        <?php // if (!empty($data['amount_err']))
                        // echo $data['amount_err'];                         ?>
                        Required field
                      </span>
                    </div>
                  </div>
                  <div class="form-row form-flex">
                    <div class="flx-1">
                      <div class="form-input-title2">Educational Institute/Workplace
                      </div>
                      <input type="text" name="dependent_edu_ins/work" id="dependent_edu_ins/work" class="input"
                        placeholder="">
                      <span class="form-invalid">
                        <?php // if (!empty($data['dependent_edu_ins/work_err']))
                        // echo $data['dependent_edu_ins/work_err'];                        ?>

                      </span>
                    </div>
                  </div>
                  <div class="form-row form-flex">
                    <div class="flx-1">
                      <div class="form-flex img-label">
                        <div class="form-input-title">Birth Certificate<span class="required">*</span>
                        </div>
                        <label for="birth_certificate" class="custom-file-input2">
                          <span>Upload</span>
                          <input type="file" accept="image/png, image/jpeg" name="birth_certificate"
                            id="birth_certificate">
                        </label>
                      </div>

                      <div class="nic-form-image-container">
                      <img src="<?php echo URLROOT ?>/public/Assets/images/default-images/Sample-document.png" alt="image here"
                          id="birth_certificate_preview">
                        <span class="fade-effect"></span>
                      </div>
                      <span class="form-invalid">
                        <?php if (!empty($data['birth_certificate_err']))
                          echo $data['birth_certificate_err']; ?>
                      </span>

                    </div>

                    <div class="flx-1">

                      <div class="form-input-title2">Note from dependent<span class="required">*</span></div>
                      <textarea name="note_dependent" id="note_dependent" class="fund_story" rows="3" maxlength="200"
                        placeholder=""></textarea>
                      <span class="form-invalid">
                        <?php // if(!empty($data['note_dependent_err']))echo $data['note_dependent_err'];                         ?>Error
                      </span>


                    </div>
                  </div>
                </div>

                <script>
                  document.addEventListener('DOMContentLoaded', function() {
    const childCheckbox = document.getElementById('child');
    const childForm = document.querySelector('.child-form');

    // Function to show or hide the child form based on checkbox state
    function toggleChildForm() {
        if (childCheckbox.checked) {
            childForm.style.display = 'block';
        } else {
            childForm.style.display = 'none';
        }
    }

    // Initial state check and toggle
    toggleChildForm();

    // Add event listener to the checkbox
    childCheckbox.addEventListener('change', toggleChildForm);
});

                </script>
              </div>

                                    <br>
                                </div>
                                <div class="step-container-bottom">
                                    <div class="js-next-prev-button">
                                        <div class="js-prev" onclick="prevStep()">Previous</div>
                                        <button class="js-next" onclick="nextStep(4)">Next</button>
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

    </script>

</body>

</html>