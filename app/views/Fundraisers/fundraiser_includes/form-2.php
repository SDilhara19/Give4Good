<div class="step-container">
            <fieldset class="start-fundraiser-fieldset">
              <div class="form-set">

                <?php foreach ($data['documents'] as $row){
                  ?>

                <div class="form-row">
                  <div class="form-flex img-label">
                    <div class="form-input-title"><?php echo $row->document; ?><span class="required">*</span>
                    </div>
                    <label for="<?php echo $row->document; ?>" class="custom-file-input2">
                      <span>Choose Image</span>
                      <input type="file" accept="image/png, image/jpeg" name="<?php echo $row->document; ?>" class="document" data-popup-id="<?php echo $row->document; ?>">
                    </label>
                  </div>
                  <div class="document-image-container">
                    <img src="<?php echo URLROOT ?>/public/Assets/images/default-images/Sample-document.png" alt="image here"
                      class="document_preview"  data-popup-id="<?php echo $row->document; ?>">
                    <span class="fade-effect"></span>
  <script>setupImagePreview('.document[data-popup-id="<?php echo $row->document; ?>"]', ".document_preview[data-popup-id='<?php echo $row->document; ?>']");</script>

                  </div>
                  <span class="form-invalid">
                    <?php if (!empty($data['birth_certificate_err']))
                      echo $data['birth_certificate_err']; ?>
                  </span>
                </div>

                <?php } ?>

              </div>
              <div class="js-next-prev-button">
                <div class="js-prev" onclick="prevStep()">Previous</div>
                <div class="js-next" onclick="nextStep(3)">Next</div>
              </div>
            </fieldset>
          </div>