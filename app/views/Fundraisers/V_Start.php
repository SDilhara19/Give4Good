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

<body class="fundraiser-form-bg">
  <?php require APPROOT . '/views/includes/header.php' ?>
  <?php require APPROOT . '/views/includes/side-bar.php' ?>
  <main>
    <div class="fundraiser-form-container">
      <div class="fundraiser-form-progress-bar">
        <div class="form-progress-bar-container-hori">
          <div class="form-inactive-progress-bar-container-hori">
            <div class="form-inactive-progress-bar-hori"></div>
            <div class="inactive-progress-mark-hori"></div>
          </div>
          <div class="form-progress-bar-hori">
            <div class="progress-step-hori">
              <div class="progress-hori active"></div>
              <div class="progress-mark-hori active"></div>
              <p class="progress-text-hori active">Fundraiser details</p>
            </div>
            <div class="progress-step-hori">
              <div class="progress-hori"></div>
              <div class="progress-mark-hori"></div>
              <p class="progress-text-hori">Residential Details</p>
            </div>
            <div class="progress-step-hori">
              <div class="progress-hori"></div>
              <div class="progress-mark-hori"></div>
              <p class="progress-text-hori">Bank Details</p>
            </div>
          </div>
        </div>
      </div>
      <div class="fundraiser-form-title">
        <p class="text-2"> A few steps away from starting your fundraiser</p>
      </div>
      <div class="fundraiser-form">
        <form action="" method="post" enctype="multipart/form-data">

          <div class="step-container active">
            <fieldset class="">
              <div class="form-set">
                <p class="text-6">Fundraiser Info</p>
                <div class="form-row">
                  <div class="form-input-title2">Title<span class="required">*</span>
                  </div>
                  <input type="text" name="title" id="title" class="input" placeholder="">
                  <span class="form-invalid">
                    <?php if (!empty($data['title_err']))
                      echo $data['title_err']; ?>
                  </span>
                </div>
                <div class="form-row">
                  <div class="form-input-title2">Your Story<span class="required">*</span></div>
                  <textarea name="fund_story" id="fund_story" class="fund_story" rows="5" maxlength="2000"
                    placeholder=""></textarea>
                  <span class="form-invalid">
                    <?php if (!empty($data['fund_story_err']))
                      echo $data['fund_story_err']; ?>
                  </span>

                </div>
                <div class="form-row">
                  <div class="form-flex img-label">
                    <div class="form-input-title">Add images related to the fundraiser<span class="required">*</span>
                    </div>
                    <label for="fund_images" class="custom-file-input2">
                      <span>Choose Image</span>
                      <input type="file" accept="image/png, image/jpeg" name="fundraiser_image_1"
                        id="fundraiser_image_1">
                    </label>
                  </div>
                  <div class="fund-images-con">
                    <img src="<?php echo URLROOT ?>/public/Assets/images/heart.png" alt="">
                  </div>
                  <span class="form-invalid">
                    <?php // if(!empty($data['story_description_err']))echo $data['story_description_err'];                ?>Error
                  </span>

                </div>
                <div class="form-row form-flex">
                  <div class="flx-1">
                    <div class="form-input-title2">Amount Required(Rs.)<span class="required">*</span>
                    </div>
                    <input type="text" name="amount" id="amount" class="input" placeholder="">
                    <span class="form-invalid">
                      <?php if (!empty($data['amount_err']))
                        echo $data['amount_err']; ?>

                    </span>
                  </div>
                  <div class="flx-1">
                    <div class="form-input-title2">Date to end fundraising<span class="required">*</span>
                    </div>
                    <input type="date" name="end_date" id="end_date" class="input">
                    <span class="form-invalid">
                      <?php if (!empty($data['end_date_err']))
                        echo $data['end_date_err']; ?>
                    </span>
                  </div>
                </div>
                <div class="form-row form-flex">
                  <div class="form-input-title2">Would you prefer to stay anonymous during the fundraiser</div>
                  <div class="checkbox-wrapper-2">
                    <input type="checkbox" class="sc-gJwTLC ikxBAC" name="anonymous" id="anonymous">
                  </div>

                </div>

              </div>
              <div class="form-set">
                <p class="text-6">Dependent details(if parent funding)</p>
                <div class="form-row form-flex">
                  <div class="form-input-title2">Is the fund requirer below age 18</div>
                  <div class="checkbox-wrapper-2">
                    <input type="checkbox" class="sc-gJwTLC ikxBAC" name="child" id="child" value="on">
                    <script>
                      function formDisplay(form1) {
                        var form = document.getElementById(form1)
                        if (form.value == "on") {
                          console.log("df")
                          form.style.display = 'style';
                        }
                      }
                    </script>
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
                        // echo $data['dependent_name_err'];                ?>
                        Required field
                      </span>
                    </div>
                    <div class="flx-1">
                      <div class="form-input-title2">Birthdate<span class="required">*</span>
                      </div>
                      <input type="text" name="dependent_birthdate" id="dependent_birthdate" class="input"
                        placeholder="">
                      <span class="form-invalid">
                        <?php // if (!empty($data['dependent_birthdate_err']))
                        // echo $data['dependent_birthdate_err'];                ?>
                        Required field
                      </span>
                    </div>
                    <div class="flx-1">
                      <div class="form-input-title2">Relationship<span class="required">*</span>
                      </div>
                      <input type="text" name="relationship" id="relationship" class="input" placeholder="XXXXX">
                      <span class="form-invalid">
                        <?php // if (!empty($data['amount_err']))
                        // echo $data['amount_err'];                ?>
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
                        // echo $data['dependent_edu_ins/work_err'];               ?>

                      </span>
                    </div>
                    <div class="flx-1">
                      <div class="form-input-title2">Educational Institute/Workplace Contact
                      </div>
                      <input type="text" name="dependent_edu_ins/work_contact" id="dependent_edu_ins/work_contact"
                        class="input" placeholder="">
                      <span class="form-invalid">
                        <?php // if (!empty($data['dependent_edu_ins/work_contact_err']))
                        // echo $data['dependent_edu_ins/work_contact_err'];               ?>

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
                        <img src="<?php echo URLROOT ?>/public/Assets/images/user-individual.png" alt="image here"
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
                        <?php // if(!empty($data['note_dependent_err']))echo $data['note_dependent_err'];                ?>Error
                      </span>


                    </div>
                  </div>
                </div>
              </div>
              <div class="js-next-prev-button">
                <div class="js-next" onclick="nextStep(3)">Next</div>
              </div>
            </fieldset>
          </div>
          <div class="step-container">
            <fieldset class="">
              <div class="form-set">
                <div class="form-row">
                  <div class="form-flex img-label">
                    <div class="form-input-title">Approval by Educational Institute<span class="required">*</span>
                    </div>
                    <label for="birth_certificate" class="custom-file-input2">
                      <span>Choose Image</span>
                      <input type="file" accept="image/png, image/jpeg" name="birth_certificate" id="birth_certificate">
                    </label>
                  </div>
                  <div class="document-image-container">
                    <img src="<?php echo URLROOT ?>/public/Assets/images/user-individual.png" alt="image here"
                      id="birth_certificate_preview">
                    <span class="fade-effect"></span>
                  </div>
                  <span class="form-invalid">
                    <?php if (!empty($data['birth_certificate_err']))
                      echo $data['birth_certificate_err']; ?>
                  </span>
                </div>
                <div class="form-row">
                  <div class="form-flex img-label">
                    <div class="form-input-title">Approval by Educational Institute<span class="required">*</span>
                    </div>
                    <label for="birth_certificate" class="custom-file-input2">
                      <span>Choose Image</span>
                      <input type="file" accept="image/png, image/jpeg" name="birth_certificate" id="birth_certificate">
                    </label>
                  </div>
                  <div class="document-image-container">
                    <img src="<?php echo URLROOT ?>/public/Assets/images/user-individual.png" alt="image here"
                      id="birth_certificate_preview">
                    <span class="fade-effect"></span>
                  </div>
                  <span class="form-invalid">
                    <?php if (!empty($data['birth_certificate_err']))
                      echo $data['birth_certificate_err']; ?>
                  </span>
                </div>
                <div class="form-row">
                  <div class="form-flex img-label">
                    <div class="form-input-title">Approval by Educational Institute<span class="required">*</span>
                    </div>
                    <label for="birth_certificate" class="custom-file-input2">
                      <span>Choose Image</span>
                      <input type="file" accept="image/png, image/jpeg" name="birth_certificate" id="birth_certificate">
                    </label>
                  </div>
                  <div class="document-image-container">
                    <img src="<?php echo URLROOT ?>/public/Assets/images/user-individual.png" alt="image here"
                      id="birth_certificate_preview">
                    <span class="fade-effect"></span>
                  </div>
                  <span class="form-invalid">
                    <?php if (!empty($data['birth_certificate_err']))
                      echo $data['birth_certificate_err']; ?>
                  </span>
                </div>
                
              </div>
              <div class="js-next-prev-button">
                <div class="js-prev" onclick="prevStep()">Previous</div>
                <div class="js-next" onclick="nextStep(3)">Next</div>
              </div>
            </fieldset>
          </div>
          <div class="step-container">
            <fieldset>
              <div class="form-set">
                <div class="form-row form-flex">
                  <div class="form-input-title2">IWould you like to receive materials/goods as donations?</div>
                  <div class="checkbox-wrapper-2">
                    <input type="checkbox" class="sc-gJwTLC ikxBAC" name="child" id="child">
                  </div>
                </div>
                <div class="story-heading">
                  <h1>Materials you hope to receive</h1>
                  <i id="add-material-btn" class=" fa-solid fa-circle-plus fa-2xl"></i>
                </div>
                <div id="material-display-tags"></div>

                <div id="material-form-container"></div>

                <!-- <div class="form-row form-flex">
                <div class="flx-1">
                  <div class="form-input-title2">Item Name
                  </div>
                  <input type="text" name="item_name" id="item_name" class="input" placeholder="">
                  <span class="form-invalid">
                    <?php // if (!empty($data['item_name_err']))
                    // echo $data['item_name_err'];               ?>

                  </span>
                </div>
                <div class="flx-1">
                  <div class="form-input-title2">No of units required
                  </div>
                  <input type="text" name="required_unit_count" id="required_unit_count" class="input" placeholder="">
                  <span class="form-invalid">
                    <?php // if (!empty($data['required_unit_count_err']))
                    // echo $data['required_unit_count_err'];               ?>

                  </span>
                </div>-->
              </div> 
              <div class="js-next-prev-button">
                <div class="js-prev" onclick="prevStep()">Previous</div>
                <div class="js-next" onclick="nextStep(3)" type="submit" >Submit</div>
              </div>
            </fieldset>
          </div>
         
        </form>
      </div>
    </div>
  </main>
  <?php require APPROOT . '/views/includes/footer.php' ?>
  <script src="<?php echo URLROOT ?>/public/js/header.js"></script>
  <script src="<?php echo URLROOT ?>/public/js/header.js"></script>
  <script src="<?php echo URLROOT ?>/public/js/multistep-form.js"></script>
  <script src="<?php echo URLROOT ?>/public/js/form-image.js"></script>
  <script>
    // setupImagePreview("#form_image", ".form-image-container img");
    addForm(3, "#add-material-btn", "#material-display-tags", "#material-form-container", "material");
  </script>
</body>

</html>