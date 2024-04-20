<div class="step-container">
    <fieldset class="start-fundraiser-fieldset">
        <div class="form-set">
            <div class="form-row form-flex">
                <div class="form-input-title2">Would you like to sell merchandise to help with your fundraiser?</div>
                <div class="checkbox-wrapper-2">
                    <input type="checkbox" class="sc-gJwTLC ikxBAC" name="merchandise" id="merchandise" value="on">
                </div>
            </div>
            <script>

                document.addEventListener('DOMContentLoaded', function () {
                    const merchandiseCheckbox = document.getElementById('merchandise');
                    const merchandiseForm = document.querySelector('.merchandise-form');

                    // Function to show or hide the child form based on checkbox state
                    function toggleMerchandiseForm() {
                        if (merchandiseCheckbox.checked) {
                            merchandiseForm.style.display = 'block';
                        } else {
                            merchandiseForm.style.display = 'none';
                        }
                    }

                    // Initial state check and toggle
                    toggleMerchandiseForm();

                    // Add event listener to the checkbox
                    merchandiseCheckbox.addEventListener('change', toggleMerchandiseForm);
                });

            </script>


            <div class="merchandise-form">
                <div class="story-heading">
                    <h2>Add merchandise you hope to sell</h2>
                    <i id="add-merchandise-btn" class=" fa-solid fa-circle-plus fa-2xl"></i>
                </div>
                <div class="dynamic-form-tag-con" id="merchandise-tag-con" style='display: none;'>

                </div>

                <div id="merchandise-form-container"></div>
            </div>
            <div id="merchandise-form-template" style="display: block;">
                <div class="dynamic-form">
                    <div class="form-row">
                        <div class="form-input-title2">Product name<span class="required">*</span>
                        </div>
                        <input type="text" name="merch_name" id="merch_name" class="input" placeholder="">
                        <span class="form-invalid">
                            <?php if (!empty($data['merch_name_err']))
                                echo $data['merch_name_err']; ?>
                        </span>
                    </div>
                    <div class="form-row form-flex">
                        <div class="flx-1">
                            <div class="form-input-title2">Price<span class="required">*</span>
                            </div>
                            <input type="text" name="merch_price" id="merch_price" class="input" placeholder="">
                            <span class="form-invalid">
                                <?php if (!empty($data['merch_price_err']))
                                    echo $data['merch_price_err']; ?>

                            </span>
                        </div>
                        <div class="flx-1">
                            <div class="form-input-title2">Amount to the fundraiser<span class="required">*</span>
                            </div>
                            <input type="text" name="amount_to_fund" id="amount_to_fund" class="input" placeholder="">
                            <span class="form-invalid">
                                <?php if (!empty($data['amount_to_fund_err']))
                                    echo $data['amount_to_fund_err']; ?>

                            </span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-input-title2">Description<span class="required">*</span></div>
                        <textarea name="merch_description" id="merch_description" class="fund_story" rows="3"
                            maxlength="500" placeholder=""></textarea>
                        <span class="form-invalid">
                            <?php if (!empty($data['merch_description_err']))
                                echo $data['merch_description_err']; ?>
                        </span>
                    </div>
                    <div class="form-row" id="input_merch_image">
                        <div class="form-flex img-label">
                            <div class="form-input-title">Add images of your product<span class="required">*</span>
                            </div>
                            <div id="dynamic-input-merch-image">

                            </div>

                            <button class="custom-file-input3" type="button" onclick="merch_image_select()">Choose
                                Images
                            </button>
                        </div>
                        <div class="merch-images-box" id="merch-images-box">

                        </div>
                        <span class="form-invalid">
                            <?php if (!empty($data['merch_image_err']))
                                echo $data['merch_image_err']; ?>
                        </span>

                    </div>
                    <div class="form-row form-flex">
                        <div class="form-input-title2">Does your product have variations?</div>
                        <div class="checkbox-wrapper-2">
                            <input type="checkbox" class="sc-gJwTLC ikxBAC" name="variations" id="variations"
                                value="on">
                        </div>
                    </div>
                    <div class="variations-form">
                        <div class="form-flex">
                            <div class="form-flex-left flx-1">
                            <div class="form-input-title">The feature which best describe the variations</div>
                            </div>
                            <div class="form-flex-left flx-1">
                            <select name="feature" id="feature" class="input">
                                    <option value="types">Types</option>
                                    <option value="sizes">Sizes</option>
                                    <option value="styles">Styles</option>
                                    <option value="materials">Materials</option>
                                    <option value="colours">Colours</option>
            </select>
                            </div>

                        </div>
                        <table id="variation-table">
                            <thead>
                                <tr>
                                    <th id="variation-header">Variation</th>
                                    <th>Stock</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" class="variation-input input"></td>
                                    <td><input type="number" class="stock-input input"></td>
                                    <td>
                                        <i class="fa-solid fa-circle-plus" style="cursor: pointer"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    

                    <div class="submit-button-div">
                        <button class="add-button secondary-button" id="merch-add-button" type="button">Add</button>
                    </div>
                </div>
                <script type="text/javascript">
                    var merch_images = [];
                    let merch_count = 0;

                    function merch_image_select() {
                        merch_count++;
                        console.log(merch_count)

                        let merchInput = document.createElement("input")

                        merchInput.type = "file"
                        merchInput.accept = "image/png, image/jpeg";
                        merchInput.name = `merch_image_${merch_count}`;
                        merchInput.id = `merch_image_${merch_count}`;
                        merchInput.style = "display: none;"

                        merchInput.addEventListener('change', function () {
                            handleMerchFileSelect(this.files);
                        });


                        document.getElementById("dynamic-input-merch-image").appendChild(merchInput);

                        merchInput.click()

                        function handleMerchFileSelect(files) {
                            for (var i = 0; i < files.length; i++) {
                                merch_images.push({
                                    "name": files[i].name,
                                    "url": URL.createObjectURL(files[i]),
                                    "file": files[i],
                                });
                            }
                            document.getElementById("merch-images-box").innerHTML = merch_image_show();
                        }


                    }
                    function merch_image_show() {
                        var merch = "";
                        merch_images.forEach((i) => {
                            merch += `<div class="fund-images-con">
                          <img src="` + i.url + `" alt="">
                        </div>`;
                        });
                        return merch;
                    } 

                    document.addEventListener('DOMContentLoaded', function () {
                            const variationsCheckbox = document.getElementById('variations');
                            const variationsForm = document.querySelector('.variations-form');

                            // Function to show or hide the child form based on checkbox state
                            function toggleVariationsForm() {
                                if (variationsCheckbox.checked) {
                                    variationsForm.style.display = 'block';
                                } else {
                                    variationsForm.style.display = 'none';
                                }
                            }

                            // Initial state check and toggle
                            toggleVariationsForm();

                            // Add event listener to the checkbox
                            variationsCheckbox.addEventListener('change', toggleVariationsForm);
                        });

                 
                </script>
            </div>
<!-- 
            <script>
                let merchandise = [];


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



            </script> -->

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
        <?php
        if ($_SESSION['userType'] == 'organisation') { ?>
            <div class="js-next-prev-button">
                <div class="js-prev" onclick="prevStep()">Previous</div>
                <button class="js-next" onclick="nextStep(4)" type="submit">Submit</button>

            </div>
        <?php } else if ($_SESSION['userType'] == 'individual') { ?>
                
        <?php } ?>

    </fieldset>
</div>