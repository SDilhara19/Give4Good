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
                    <i id="add-merchandise-btn" class=" fa-solid fa-circle-plus fa-2xl" style="cursor: pointer;"></i>
                </div>
                <div class="dynamic-form-tag-con" id="merchandise-tag-con" style='display: none;'>

                </div>

                <div id="merchandise-form-container"></div>
            </div>
            <div id="merchandise-form-template" style="display: none;">
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
                        <div class="flx-1">
                            <div class="form-input-title2">Available Stocks<span class="required">*</span>
                            </div>
                            <input type="text" name="stock" id="stock" class="input" placeholder="">
                            <span class="form-invalid">
                                <?php if (!empty($data['stock_err']))
                                    echo $data['stock_err']; ?>

                            </span>
                        </div>
                    </div>
                    <div class="form-row form-flex">
                        <div class="flx-1">
                            <div class="form-input-title2">Description<span class="required">*</span></div>
                            <textarea name="merch_description" id="merch_description" class="fund_story" rows="3"
                                maxlength="500" placeholder=""></textarea>
                            <span class="form-invalid">
                                <?php if (!empty($data['merch_description_err']))
                                    echo $data['merch_description_err']; ?>
                            </span>
                        </div>
                        <div class="flx-1">
                            <div class="form-flex img-label">
                                <div class="form-input-title">Product Image
                                </div>
                                <label for="merch_image" class="custom-file-input2">
                                    <span>Upload</span>
                                    <input type="file" accept="image/png, image/jpeg" name="merch_image"
                                        id="merch_image">
                                </label>
                            </div>

                            <div class="nic-form-image-container">
                                <img src="<?php echo URLROOT ?>/public/Assets/images/default-images/sample-image.jpeg"
                                    alt="image here" id="merch_image_preview">
                                <span class="fade-effect"></span>
                            </div>
                            <span class="form-invalid image-invalid">
                                <?php if (!empty($data['merch_image_err']))
                                    echo $data['merch_image_err']; ?>
                            </span>

                        </div>
                    </div>
                    <!-- <div class="form-row" id="input_merch_image">
                        <div class="form-flex img-label">
                            <div class="form-input-title">Add images of your product<span class="required">*</span>
                            </div>
                            <div id="dynamic-input-merch-image">

                            </div>

                            <button class="custom-file-input3" type="button" onclick="merch_image_select()"
                                id='merch-image-select'>Choose
                                Images
                            </button>
                        </div>
                        <div class="merch-images-box" id="merch-images-box">

                        </div>


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
                    </div> -->


                    <div class="submit-button-div">
                        <button class="add-merch-button secondary-button" id="add-merch-button"
                            type="button">Add</button>
                    </div>
                </div>
                <script type="text/javascript">
                    // var merch_images = [];
                    // let merch_count = 0;

                    // function merch_image_select() {
                    //     merch_count++;
                    //     console.log(merch_count)

                    //     let merchInput = document.createElement("input")

                    //     merchInput.type = "file"
                    //     merchInput.accept = "image/png, image/jpeg";
                    //     merchInput.name = `merch_image_${merch_count}`;
                    //     merchInput.id = `merch_image_${merch_count}`;
                    //     merchInput.style = "display: none;"

                    //     merchInput.addEventListener('change', function () {
                    //         handleMerchFileSelect(this.files);
                    //     });


                    //     document.getElementById("dynamic-input-merch-image").appendChild(merchInput);

                    //     merchInput.click()

                    //     function handleMerchFileSelect(files) {
                    //         for (var i = 0; i < files.length; i++) {
                    //             merch_images.push({
                    //                 "name": files[i].name,
                    //                 "url": URL.createObjectURL(files[i]),
                    //                 "file": files[i],
                    //             });
                    //         }
                    //         document.getElementById("merch-images-box").innerHTML = merch_image_show();
                    //     }


                    // }
                    // function merch_image_show() {
                    //     var merch = "";
                    //     merch_images.forEach((i) => {
                    //         merch += `<div class="fund-images-con">
                    //       <img src="` + i.url + `" alt="">
                    //     </div>`;
                    //     });
                    //     return merch;
                    // }

                    // document.addEventListener('DOMContentLoaded', function () {
                    //     const variationsCheckbox = document.getElementById('variations');
                    //     const variationsForm = document.querySelector('.variations-form');

                    //     // Function to show or hide the child form based on checkbox state
                    //     function toggleVariationsForm() {
                    //         if (variationsCheckbox.checked) {
                    //             variationsForm.style.display = 'block';
                    //         } else {
                    //             variationsForm.style.display = 'none';
                    //         }
                    //     }

                    //     // Initial state check and toggle
                    //     toggleVariationsForm();

                    //     // Add event listener to the checkbox
                    //     variationsCheckbox.addEventListener('change', toggleVariationsForm);
                    // });


                </script>
            </div>

            <script>
                let merchs = [];

                document.addEventListener('DOMContentLoaded', function () {
                    let merchIndex = 0;
                    document.getElementById("add-merchandise-btn").addEventListener('click', function () {
                        merchIndex++;

                        console.log('add clicked')
                        var merchFormTemplate = document.getElementById('merchandise-form-template');
                        var merchFormClone = merchFormTemplate.cloneNode(true);

                        merchFormClone.setAttribute('id', 'merchandise_form_' + merchIndex);
                        merchFormClone.style.display = 'block';

                        merchFormClone.querySelectorAll('input, textarea').forEach(function (input) {
                            var originalMName = input.getAttribute('name')
                            if (originalMName) {
                                input.setAttribute('name', originalMName + '_' + merchIndex)
                            }
                        });

                        merchFormClone.querySelectorAll('button').forEach(function (input) {
                            var buttonMId = input.getAttribute('id')
                            if (buttonMId) {
                                input.setAttribute('id', buttonMId + '_' + merchIndex)
                            }
                        });


                        document.getElementById('merchandise-form-container').appendChild(merchFormClone);
                        const imageM = merchFormClone.querySelector('#merch_image_preview');
                        const inputM = merchFormClone.querySelector('#merch_image');

                        inputM.addEventListener("change", () => {
                            imageM.src = URL.createObjectURL(inputM.files[0]);
                        });
                    });

                    document.addEventListener('click', function (event) {

                        if (event.target.classList.contains('add-merch-button')) {
                            console.log("add-merchbtn-clicked")
                            addMerchandiseButtonClicked(event.target);
                        }
                    });
                });

                function addMerchandiseButtonClicked(button) {
                    console.log("Merchandise Add button clicked!");
                    var merchForm = button.parentNode.parentNode;
                    var productNameInput = merchForm.querySelector(`.input[id="merch_name"]`);
                    var priceInput = merchForm.querySelector(`.input[id="merch_price"]`);
                    var amountForFundInput = merchForm.querySelector(`.input[id="amount_to_fund"]`);
                    var stockInput = merchForm.querySelector(`.input[id="stock"]`);
                    var merchDescriptionInput = merchForm.querySelector(`.fund_story[id="merch_description"]`);
                    var merchImageInput = merchForm.querySelector('.custom-file-input2 input[type="file"]');



                    var errorMessages = merchForm.querySelectorAll('.form-invalid');
                    errorMessages.forEach(function (errorMessage) {
                        errorMessage.textContent = '';
                    });

                    var isValid = true;

                    // Validate product name
                    if (!productNameInput.value.trim()) {
                        productNameInput.nextElementSibling.textContent = 'Fill the above field';
                        isValid = false;
                    }

                    // Validate price
                    if (!priceInput.value.trim()) {
                        priceInput.nextElementSibling.textContent = 'Fill the above field';
                        isValid = false;
                    } else if (isNaN(priceInput.value.trim())) {
                        priceInput.nextElementSibling.textContent = 'Provide a valid price';
                        isValid = false;
                    }


                    // Validate amount for fund
                    if (!amountForFundInput.value.trim()) {
                        amountForFundInput.nextElementSibling.textContent = 'Fill the above field';
                        isValid = false;
                    }
                    else if (isNaN(amountForFundInput.value.trim())) {
                        amountForFundInput.nextElementSibling.textContent = 'Provide a valid amount';
                        isValid = false;
                    }

                    if (!stockInput.value.trim()) {
                        stockInput.nextElementSibling.textContent = 'Fill the above field';
                        isValid = false;
                    }
                    else if (isNaN(stockInput.value.trim())) {
                        stockInput.nextElementSibling.textContent = 'Provide a valid amount';
                        isValid = false;
                    }

                    // Validate description
                    if (!merchDescriptionInput.value.trim()) {
                        merchDescriptionInput.nextElementSibling.textContent = 'Provide a description';
                        isValid = false;
                    }

                    var errorMessageElement = merchForm.querySelector('.image-invalid');
                    if (!merchImageInput.files || merchImageInput.files.length === 0) {
                        errorMessageElement.textContent = 'Provide a image of the product';
                        isValid = false;
                    }



                    // If all fields are valid, proceed with adding the merchandise
                    if (isValid) {
                        merchs.push(productNameInput.value.trim());
                        merchForm.style.display = 'none';

                        var elements = document.getElementById("merchandise-tag-con");
                        elements.style.display = 'grid';
                        document.getElementById("merchandise-tag-con").innerHTML = merchandise_tag_show();
                    }

                }

                function merchandise_tag_show() {
                    var tagM = "";
                    merchs.forEach((i) => {
                        tagM += `<div class="dynamic-form-tag">
            <div class="text-2">${i}</div>
          </div>`;
                    });
                    return tagM;
                }
            </script>


        </div>


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