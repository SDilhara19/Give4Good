<?php require APPROOT . '/views/includes/header.php' ?>

    <div class="form-col-container">
        <div class="form-container scrollable">

            <form action="SuperIndividual " method="post" enctype="multipart/form-data">
                <h1 class="form-topic"> Super User Sign Up </h1>

                <fieldset>

                    <legend><span class="number">1</span> Your Info</legend>

                    
                    <div class="form-input-title">Fullname<span class="required">*</span></div>
                    <input type="text" name="fullname" id="fullname" class="text-input">
                    <span class="form-invalid">ERROR</span>

                    <div class="form-input-title">National Identification No.<span class="required">*</span></div>
                    <input type="text" name="nicNo" id="nicNo" class="text-input">
                    <span class="form-invalid"></span>

                    <div class="form-input-title">Address<span class="required">*</span></div>
                    <input type="text" name="address" id="address" class="text-input">
                    <span class="form-invalid">ERROR</span>

                    <div class="form-input-title">Contact<span class="required">*</span></div>
                    <input type="number" name="contact" id="contact" class="number-input">
                    <span class="form-invalid">ERROR</span>

                    <div class="form-input-title">Description</div>
                    <input type="textarea" name="description" id="description" class="textarea-input">
                    <span class="form-invalid">ERROR</span>

                    <div class="form-input-title"> National Identification Card Image<span class="required">*</span></div>
                    <input type="file" name="nicImage" id="nicImage" class="image-input">
                    <span class="form-invalid"></span>


                   
                    <br><br>
                    <button class="form-button" type="submit">Signup</button>
                </fieldset>
            </form>
        </div>
        <div class="form-container">

            <form action="SuperIndividual " method="post" enctype="multipart/form-data">
                <h1 class="form-topic">Bank Details</h1>

                <fieldset>

                    <legend><span class="number">2</span> Your Info</legend>



                    <div class="form-input-title"> Bank Account No. <span class="required">*</span></div>
                    <input type="number" name="bankAccNo" id="bankAccNo" class="number-input">
                    <span class="form-invalid">ERROR</span>

                    <div class="form-input-title">Bank Name <span class="required">*</span></div>
                    <input type="text" name="bankName" id="bankName" class="text-input">
                    <span class="form-invalid"></span>

                    <div class="form-input-title">Bank Code<span class="required">*</span></div>
                    <input type="number" name="bankCode" id="bankCode" class="number-input">
                    <span class="form-invalid"></span>

                    <div class="form-input-title">Branch Name</div>
                    <input type="text" name="branchName" id="branchName" class="text-input">
                    <span class="form-invalid"></span>

                    <div class="form-input-title">Branch Code</div>
                    <input type="number" name="branchCode" id="branchCode" class="number-input">
                    <span class="form-invalid"></span>

                    <div class="form-input-title"> Bank Pass Book Image<span class="required">*</span></div>
                    <input type="file" name="pBookImage" id="pBookImage" class="image-input">
                    <span class="form-invalid"></span>


                    <!-- <div class="form-input-title"> Select</div>
                    <select name="select" id="select" class="select-input">
                        <option class="select-option" value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                         Add more options as needed -->
                    <!-- </select>
                    <span class="form-invalid"></span>

                    <div class="form-input-title"> Radio</div>
                    <input type="radio" name="radio" id="radio" class="radio-input">
                    <label for="radio">Option 1</label>
                    <input type="radio" name="radio" id="radio2" class="radio-input">
                    <label for="radio2">Option 2</label>
                    Add more radio options as needed 
                    <span class="form-invalid"></span>

                    <div class="form-input-title"> Checkbox</div>
                    <input type="checkbox" name="checkbox" id="checkbox" class="checkbox-input">
                    <label for="checkbox">Option 1</label>
                    <input type="checkbox" name="checkbox" id="checkbox2" class="checkbox-input">
                    <label for="checkbox2">Option 2</label>
                     Add more checkbox options as needed 
                    <span class="form-invalid"></span>

                    end --> 

                    <br><br>
                    <button class="form-button" type="submit">Signup</button>
                </fieldset>
            </form>
        </div>

    </div>

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const formContainers = document.querySelectorAll('.form-container');

            let shortestFormHeight = Infinity;

            formContainers.forEach(form => {
                const formHeight = form.getBoundingClientRect().height;
                shortestFormHeight = Math.min(shortestFormHeight, formHeight);
            });

            formContainers.forEach(form => {
                form.style.maxHeight = `${shortestFormHeight}px`;
            });
        });

    </script>
<?php require APPROOT . '/views/includes/footer.php' ?>
