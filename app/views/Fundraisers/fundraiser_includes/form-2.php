<div class="step-container">
  <fieldset class="start-fundraiser-fieldset">
    <div class="form-set">

      <?php foreach ($data['documents'] as $row) {
        ?>

            <div class="form-row">
              <div class="form-flex img-label">
                <div class="form-input-title"><?php echo $row->document_name; ?><span class="required">*</span>
                </div>
                <label for="<?php echo $row->document; ?>" class="custom-file-input2">
                  <span>Choose Image</span>
                  <input type="file" accept="image/png, image/jpeg" name="<?php echo $row->document; ?>" class="document"
                    data-popup-id="<?php echo $row->document; ?>">
                </label>
              </div>
              <div class="donee-name text-8">
                <i class='bx bxs-info-circle'></i>
                <span style="font-size: 0.65rem;"><?php echo $row->description; ?></span>
              </div>
              <div class="document-image-container">
                <img src="<?php echo URLROOT ?>/public/Assets/images/default-images/Sample-document.png" alt="image here"
                  class="document_preview" data-popup-id="<?php echo $row->document; ?>">
                <span class="fade-effect"></span>
                <script>setupImagePreview('.document[data-popup-id="<?php echo $row->document; ?>"]', ".document_preview[data-popup-id='<?php echo $row->document; ?>']");</script>

              </div>
              <span class="form-invalid">
                <?php if (!empty($data[$row->document . '_err']))
                  echo $data[$row->document . '_err']; ?>
              </span>
            </div>
            <script>
    
            </script>

    <script>
      // Wait for the DOM content to be fully loaded
      document.addEventListener("DOMContentLoaded", function() {
        var docInput = document.querySelector('.document[data-popup-id="<?php echo $row->document; ?>"]');
      // console.log("z")
        var docError =docInput.parentElement.parentElement.parentElement.querySelector('.form-invalid')
        // console.log(docError)

        // Add an event listener to the input field
        docInput.addEventListener('input', function() {
      console.log("z")
          validateNotEmpty(this.value, docError);
        });
      });

    //   var nextButton = document.getElementById('indvNext_2');
    //   nextButton.addEventListener('click', function (event) {

    //     validateNotEmpty(docInput.value, docError);

    //     if (docError.textContent === '') {
    //         nextStep(3);
    //     } else {
    //         console.log('Validation failed. Please check your inputs.');
    //     }
    // });
    </script>

      <?php } ?>

    </div>
    <?php
    if ($_SESSION['userType'] == 'organisation') { ?>
          <div class="js-next-prev-button">
            <div class="js-prev" onclick="prevStep()">Previous</div>
            <div class="js-next" onclick="nextStep(4)">Next</div>
          </div>
    <?php } else if ($_SESSION['userType'] == 'individual') { ?>
                <div class="js-next-prev-button">
                  <div class="js-prev" onclick="prevStep()">Previous</div>
                  <div class="js-next" id="indvNext_2">Next</div>

                </div>
    <?php } ?>
  </fieldset>
</div>