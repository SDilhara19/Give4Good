<div class="step-container ">
            <fieldset class="start-fundraiser-fieldset">
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
                <div class="form-row" id="input_image">
                  <div class="form-flex img-label">
                    <div class="form-input-title">Add images related to the fundraiser<span class="required">*</span>
                    </div>
                    <input type="file" accept="image/png, image/jpeg" name="fundraiser_image" id="fundraiser_image"
                      multiple="" style="display: none;" onchange="image_select()">
                    <button class="custom-file-input3" type="button"
                      onclick="document.getElementById('fundraiser_image').click()">Choose Images
                    </button>
                  </div>
                  <div class="fund-images-box" id="fund-images-box">

                  </div>
                  <span class="form-invalid">
                    <?php // if(!empty($data['story_description_err']))echo $data['story_description_err'];        ?>Error
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
              <div class="js-next-prev-button">
                <div class="js-next" onclick="nextStep(3)">Next</div>
              </div>
            </fieldset>
          </div>