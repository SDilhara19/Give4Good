<div class="step-container">
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
          <h2>Add materials you hope to receive</h2>
          <i id="add-material-btn" class=" fa-solid fa-circle-plus fa-2xl" style="cursor: pointer;"></i>
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
          <i id="add-location-btn" class=" fa-solid fa-circle-plus fa-2xl" style="cursor: pointer;"></i>
        </div>
        <div class="dynamic-form-tag-con" id="location-form-tag-con" style='display: none;'>
        </div>
        <div id="location-form-container">
        </div>
        <div id='map-container' style="display: none;">

          <span class="text-2">Mark the locations in the map</span>
          <div class="donee-name text-8">
            <i class='bx bxs-info-circle'></i>
            <span style="font-size: 0.65rem;">Double click to remove a marker</span>
          </div>
          <div class="nic-form-image-container" id="map" style="height: 350px;">
          </div>
          <input type="hidden" name="latitude" id="latitude">
          <input type="hidden" name="longitude" id="longitude">
          <span class="form-invalid">
            <?php if (!empty($data['location_err']))
              echo $data['location_err']; ?>
          </span>
        </div>
      </div>
      <div id="location-form-template" style="display: none;">
        <div class="dynamic-form">
          <div class="form-row form-flex">
            <div class="flx-1">
              <div class="form-input-title2">Town/city<span class="required">*</span>
              </div>
              <input type="text" name="town/city" id="town/city" class="input" placeholder="ex: Piliyandala">
              <span class="form-invalid">
                <?php if (!empty($data['town/city_err']))
                  echo $data['town/city_err']; ?>

              </span>
            </div>
            <div class="flx-1">
              <div class="form-input-title2">Contact<span class="required">*</span>
              </div>
              <input type="text" name="contact" id="contact" class="input" placeholder="ex: 0703436154">
              <span class="form-invalid">
                <?php if (!empty($data['contact_err']))
                  echo $data['contact_err']; ?>

              </span>
            </div>
          </div>
          <div class="form-row">
            <div class="form-input-title2">Address<span class="required">*</span></div>
            <input type="text" name="address" id="address" class="input" placeholder="" maxlength="200" placeholder="">
            <span class="form-invalid">
              <?php // if(!empty($data['address_err']))echo $data['address_err'];                         ?>
            </span>
          </div>

          <div class="submit-button-div">
            <button class="add-location-button secondary-button" id="add-location-button" type="button">Add</button>
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

            elements.style.display = 'grid';


            document.getElementById("dynamic-form-tag-con").innerHTML = material_tag_show()
          }



        }

        function material_tag_show() {
          var tag = "";
          materials.forEach((i) => {
            tag += `<div class="dynamic-form-tag">
            <div class="text-2">${i}</div>
          </div>

`;
          })
          return tag;
        }



      </script>

      <script>
        let locations = [];

        document.addEventListener('DOMContentLoaded', function () {
          let locationIndex = 0;
          document.getElementById("add-location-btn").addEventListener('click', function () {
            locationIndex++;

            console.log('add clicked')
            var locationFormTemplate = document.getElementById('location-form-template');
            // console.log(dynamicFormTemplate)
            var locationFormClone = locationFormTemplate.cloneNode(true);

            locationFormClone.setAttribute('id', 'location_form_' + locationIndex);

            locationFormClone.style.display = 'block';


            locationFormClone.querySelectorAll('input, textarea').forEach(function (input) {
              var originalLName = input.getAttribute('name')
              if (originalLName) {
                input.setAttribute('name', originalLName + '_' + locationIndex)
              }
            });

            locationFormClone.querySelectorAll('button').forEach(function (input) {
              var buttonLId = input.getAttribute('id')
              if (buttonLId) {
                input.setAttribute('id', buttonLId + '_' + locationIndex)
              }
            });


            document.getElementById('location-form-container').appendChild(locationFormClone);
          });

          document.addEventListener('click', function (event) {

            if (event.target.classList.contains('add-location-button')) {

              addLocationButtonClicked(event.target);
            }
          });



        });

        function addLocationButtonClicked(button) {
          console.log("Location Add button clicked!");
          var locationForm = button.parentNode.parentNode;
          console.log(locationForm)
          var townCityInput = locationForm.querySelector(`.input[id="town/city"]`);
          var contactInput = locationForm.querySelector(`.input[id="contact"]`);
          var addressInput = locationForm.querySelector(`.input[id="address"]`);

          var errorMessages = locationForm.querySelectorAll('.form-invalid');
          errorMessages.forEach(function (errorMessage) {
            errorMessage.textContent = '';
          });

          var isValid = true;

          // Validate item name
          if (!townCityInput.value.trim()) {
            townCityInput.nextElementSibling.textContent = 'Fill the above field';
            isValid = false
          }

          // Validate number of units required
          if (!contactInput.value.trim()) {
            contactInput.nextElementSibling.textContent = 'Fill the above field';
            isValid = false;
          } else if (!/^0\d{9}$/.test(contactInput.value.trim())) {
            contactInput.nextElementSibling.textContent = 'Provide a valid phone number';
            isValid = false;
          }

          // Validate description
          if (!addressInput.value.trim()) {
            addressInput.nextElementSibling.textContent = 'Provide the address of the location';
            isValid = false;
          }



          // If all fields are valid, proceed with adding the item
          if (isValid) {
            console.log(locations)
            console.log("lkk")

            locations.push(townCityInput.value.trim())
            locationForm.style.display = 'none';
            console.log(locations)

            var elements = document.getElementById("location-form-tag-con");

            elements.style.display = 'grid';


            document.getElementById("location-form-tag-con").innerHTML = location_tag_show()
          }



        }

        function location_tag_show() {
          var tagL = "";
          locations.forEach((i) => {
            tagL += `<div class="dynamic-form-tag">
            <div class="text-2">${i}</div>
          </div>

`;
          })
          return tagL;
        }





      </script>

    </div>

    <script>

      document.addEventListener('DOMContentLoaded', function () {
        // console.log("DD");
        const materialCheckbox = document.getElementById('material');
        const materialForm = document.querySelector('.material-form');
        const locationTForm = document.querySelector('.location-form');
        const mapContainer = document.querySelector('#map-container')

        // Function to show or hide the child form based on checkbox state
        function toggleMaterialForm() {
          if (materialCheckbox.checked) {
            materialForm.style.display = 'block';
            locationTForm.style.display = 'block';
            mapContainer.style.display = 'block';
          } else {
            materialForm.style.display = 'none';
            locationTForm.style.display = 'none';
            mapContainer.style.display = 'none';
          }
        }

        // Initial state check and toggle
        toggleMaterialForm();

        // Add event listener to the checkbox
        materialCheckbox.addEventListener('change', toggleMaterialForm);
      });

    </script>
    <script>
      let map;
      let latCoor = [];
      let lngCoor = [];

      function initMap() {

        map = new google.maps.Map(document.getElementById("map"), {
          zoom: 9.8,
          center: { lat: 6.9271, lng: 79.8612 },
        });
        map.addListener("click", function (event) {
          addMarker(event.latLng);
        });
      }



      function addMarker(position) {
        const marker = new google.maps.Marker({
          position,
          map,

        });
        const lat = position.lat()
        const lng = position.lng()
        latCoor.push(lat);
        lngCoor.push(lat);
        const latitudes = document.getElementById('latitude');
        const longitudes = document.getElementById('longitude');

        latitudes.value = JSON.stringify(latCoor);
        longitudes.value = JSON.stringify(lngCoor);

        google.maps.event.addListener(marker, 'dblclick', function () {
          marker.setMap(null);

          const index = latCoor.indexOf(lat)

          if (index !== -1) {
            latCoor.splice(index, 1);
            lngCoor.splice(index, 1);
          }
          latitudes.value = JSON.stringify(latCoor);
          longitudes.value = JSON.stringify(lngCoor);

          console.log(latitudes.value)
        })
      }


      window.initMap = initMap;
    </script>
    <?php
    if ($_SESSION['userType'] == 'organisation') { ?>
      <div class="js-next-prev-button">
        <div class="js-prev" onclick="prevStep()">Previous</div>
        <div class="js-next" onclick="nextStep(4)">Next</div>
      </div>
    <?php } else if ($_SESSION['userType'] == 'individual') { ?>
        <div class="js-next-prev-button">
          <div class="js-prev" onclick="prevStep()">Previous</div>
          <button class="js-next" onclick="nextStep(3)" type="submit">Submit</button>
        </div>
    <?php } ?>

  </fieldset>
</div>


<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo GOOGLE_MAP ?>&callback=initMap&v=weekly" defer>
</script>