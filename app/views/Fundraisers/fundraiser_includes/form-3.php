<div class="step-container active">
  <fieldset class="start-fundraiser-fieldset">
    <div class="form-set">
      <div class="form-row form-flex">
        <div class="form-input-title2">Would you like to receive materials/goods as donations?</div>
        <div class="checkbox-wrapper-2">
          <input type="checkbox" class="sc-gJwTLC ikxBAC" name="material" id="material" value="on">
        </div>
      </div>


      <div class="material-form">
        <div class="story-heading">
          <h2>Materials you hope to receive</h2>
          <i id="add-material-btn" class=" fa-solid fa-circle-plus fa-2xl"></i>
        </div>
        <div class="dynamic-form-tag-con" id="dynamic-form-tag-con" style='display: none;'>

        </div>

        <div id="dynamic-form-container"></div>
      </div>
      <div id="dynamic-form-template" style="display: none;">
        <div class="dynamic-form">
          <div class="form-row form-flex">
            <div class="flx-1">
              <div class="form-input-title2">Material/item name<span class="required">*</span>
              </div>
              <input type="text" name="material/item_name" id="material/item_name" class="input" placeholder="">
              <span class="form-invalid">
                <?php // if (!empty($data['material/item_name_err']))
                // echo $data['material/item_name_err'];                        ?>

              </span>
            </div>
            <div class="flx-1">
              <div class="form-input-title2">Number of units required<span class="required">*</span>
              </div>
              <input type="text" name="no_required" id="no_required" class="input" placeholder="">
              <span class="form-invalid">
                <?php // if (!empty($data['no_required_err']))
                // echo $data['no_required_err'];                        ?>

              </span>
            </div>
          </div>
          <div class="form-row form-flex">

            <div class="flx-1">

              <div class="form-input-title2">Description<span class="required">*</span></div>
              <textarea name="material_description" id="material_description" class="fund_story" rows="3"
                maxlength="500" placeholder=""></textarea>
              <span class="form-invalid">
                <?php // if(!empty($data['material_description_err']))echo $data['material_description_err'];                         ?>
              </span>


            </div>
            <div class="flx-1">
              <div class="form-flex img-label">
                <div class="form-input-title">Image
                </div>
                <label for="material_image" class="custom-file-input2">
                  <span>Upload</span>
                  <input type="file" accept="image/png, image/jpeg" name="material_image" id="material_image">
                </label>
              </div>

              <div class="nic-form-image-container">
                <img src="<?php echo URLROOT ?>/public/Assets/images/default-images/sample-image.jpeg" alt="image here"
                  id="material_image_preview">
                <span class="fade-effect"></span>
              </div>
              <span class="form-invalid">
                <?php if (!empty($data['material_image_err']))
                  echo $data['material_image_err']; ?>
              </span>

            </div>
          </div>
          <div class="submit-button-div">
            <button class="add-button secondary-button" id="add-button" type="button">Add</button>
          </div>
        </div>
      </div>
      <div class="location-form">
        <div class="story-heading">
          <h2>Locations you can collect the materials</h2>
          <i id="add-location-icon" class=" fa-solid fa-circle-plus fa-2xl"></i>
        </div>
        <div class="dynamic-form-tag-con" id="dynamic-location-tag-con" style='display: block;'>

        </div>

        <div id="location-form-container">
        <div class="dynamic-form">
          <div class="form-row form-flex">
            <div class="flx-1">
              <div class="form-input-title2">Town/city<span class="required">*</span>
              </div>
              <input type="text" name="town/city" id="town/city" class="input" placeholder="ex: Piliyandala">
              <span class="form-invalid">
                <?php // if (!empty($data['town/city_err']))
                // echo $data['town/city_err'];                        ?>

              </span>
            </div>
            <div class="flx-1">
              <div class="form-input-title2">Contact<span class="required">*</span>
              </div>
              <input type="text" name="contact" id="contact" class="input" placeholder="ex: 0703436154">
              <span class="form-invalid">
                <?php // if (!empty($data['contact_err']))
                // echo $data['contact_err'];                        ?>

              </span>
            </div>
          </div>
          <div class="form-row form-flex">

            <div class="flx-1">

              <div class="form-input-title2">Address<span class="required">*</span></div>
              <input type="text" name="address" id="address" class="input" placeholder="" maxlength="200" placeholder="">
              <span class="form-invalid">
                <?php // if(!empty($data['address_err']))echo $data['address_err'];                         ?>
              </span>


            </div>
            <div class="flx-1">
              <div class="form-flex img-label">
                <div class="form-input-title">Location<span class="required">*</span>
                </div>
                <label for="location" class="custom-file-input2">
                  <span>Add</span>
                  <input type="file" accept="image/png, image/jpeg" name="material_image" id="material_image">
                </label>
              </div>

              <div class="nic-form-image-container">
                <img src="<?php echo URLROOT ?>/public/Assets/images/default-images/sample-image.jpeg" alt="image here"
                  id="location_image_preview">
                <span class="fade-effect"></span>
              </div>
              <span class="form-invalid">
                <?php if (!empty($data['location_err']))
                  echo $data['location_err']; ?>
              </span>

            </div>
          </div>
          <div class="submit-button-div">
            <button class="add-button secondary-button" id="add-button" type="button">Add</button>
          </div>
        </div>
        </div>
      </div>
      <script>
        let materials = [];


        document.addEventListener('DOMContentLoaded', function () {
          let cloneIndex = 0;
          document.getElementById("add-material-btn").addEventListener('click', function () {
            cloneIndex++;

            // console.log('add clicked')
            var dynamicFormTemplate = document.getElementById('dynamic-form-template');
            // console.log(dynamicFormTemplate)
            var dynamicFormClone = dynamicFormTemplate.cloneNode(true);

            dynamicFormClone.setAttribute('id', 'material_form_' + cloneIndex);

            dynamicFormClone.style.display = 'block';


            dynamicFormClone.querySelectorAll('input, textarea').forEach(function (input) {
              var originalName = input.getAttribute('name')
              if (originalName) {
                input.setAttribute('name', originalName + '_' + cloneIndex)
              }
            });

            dynamicFormClone.querySelectorAll('button').forEach(function (input) {
              var buttonId = input.getAttribute('id')
              if (buttonId) {
                input.setAttribute('id', buttonId + '_' + cloneIndex)
              }
            });


            document.getElementById('dynamic-form-container').appendChild(dynamicFormClone);
            const image = dynamicFormClone.querySelector('#material_image_preview');
            const input = dynamicFormClone.querySelector('#material_image');
            console.log(cloneIndex)
            console.log(document.querySelector(`#add-button_${cloneIndex}`))


            input.addEventListener("change", () => {
              image.src = URL.createObjectURL(input.files[0]);
            });

          });

          document.addEventListener('click', function (event) {

            if (event.target.classList.contains('add-button')) {

              addButtonClicked(event.target);
            }
          });



        });

        function addButtonClicked(button) {
          console.log("Add button clicked!");
          var materialForm = button.parentNode.parentNode;
          console.log(materialForm)
          var itemNameInput = materialForm.querySelector(`.input[id="material/item_name"]`);
          var requiredInput = materialForm.querySelector(`.input[id="no_required"]`);
          var descriptionInput = materialForm.querySelector(`.fund_story[id="material_description"]`);
          var imageInput = materialForm.querySelector(`.custom-file-input2 input[id="material_image"]`);

          var errorMessages = materialForm.querySelectorAll('.form-invalid');
          errorMessages.forEach(function (errorMessage) {
            errorMessage.textContent = '';
          });

          var isValid = true;

          // Validate item name
          if (!itemNameInput.value.trim()) {
            itemNameInput.nextElementSibling.textContent = 'Fill the name of the item';
            isValid = false
          }

          // Validate number of units required
          if (!requiredInput.value.trim()) {
            requiredInput.nextElementSibling.textContent = 'Provide the amount/quantity you require';
            isValid = false;
          } else if (isNaN(requiredInput.value.trim())) {
            requiredInput.nextElementSibling.textContent = 'Provide a valid number';
            isValid = false;
          }

          // Validate description
          if (!descriptionInput.value.trim()) {
            descriptionInput.nextElementSibling.textContent = 'Provide a description on the required item';
            isValid = false;
          }

         

          // If all fields are valid, proceed with adding the item
          if (isValid) {
            materials.push(itemNameInput.value.trim())
            materialForm.style.display = 'none';
            console.log(materials)

            var elements = document.getElementById("dynamic-form-tag-con");

            elements.style.display = 'block';


            document.getElementById("dynamic-form-tag-con").innerHTML = material_tag_show()
          }



        }

        function material_tag_show() {
          var tag = "";
          materials.forEach((i) => {
            tag += `<div class="dynamic-form-tag">
            <div class="text-2">${i}</div>
            <span onclick="">&times;</span>
          </div>

`;
          })
          return tag;
        }



      </script>

    </div>

    <script>

      document.addEventListener('DOMContentLoaded', function () {
        // console.log("DD");
        const materialCheckbox = document.getElementById('material');
        const materialForm = document.querySelector('.material-form');

        // Function to show or hide the child form based on checkbox state
        function toggleMaterialForm() {
          if (materialCheckbox.checked) {
            materialForm.style.display = 'block';
          } else {
            materialForm.style.display = 'none';
          }
        }

        // Initial state check and toggle
        toggleMaterialForm();

        // Add event listener to the checkbox
        materialCheckbox.addEventListener('change', toggleMaterialForm);
      });

    </script>


</div>
<div class="js-next-prev-button">
  <div class="js-prev" onclick="prevStep()">Previous</div>
  <button class="js-next" onclick="nextStep(3)" type="submit">Submit</button>
</div>
</fieldset>
</div>