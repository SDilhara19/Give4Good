<?php require APPROOT . '/views/includes/header.php' ?>

<main>
<h1>Temporary Page</h1>

    <div class="form-container">
        <form action="SuperIndividual " method="post" enctype="multipart/form-data">
             <h1 class="form-topic"> Super User Sign Up </h1>

            <fieldset>
                <legend class="text-2"> Personal Info</legend>


                <div class="form-input-title">FULLNAME<span class="required">*</span></div>
                <input type="text" name="fullname" id="fullname" class="input"
                    placeholder="Full name as in National Identity Card">
                <span class="form-invalid">ERROR</span>

                <div class="form-flex">
                    <div class="form-flex-left">
                        <div class="form-input-title">NATIONAL ID<span class="required">*</span></div>
                        <input type="text" name="nicNo" id="nicNo" class="input"
                            placeholder="National Identity Card Number">
                        <span class="form-invalid"></span>
                    </div>

                    <div class="form-flex-right">
                        <div class="form-input-title">DATE OF BIRTH<span class="required">*</span></div>
                        <input type="date" name="dob" id="dob" class="input">
                        <span class="form-invalid"></span>
                    </div>


                </div>

                <div class="form-input-title">ADDRESS<span class="required">*</span></div>
                <input type="text" name="address" id="address" class="input"
                    placeholder="Permanent residence address">
                <span class="form-invalid">ERROR</span>

                <div class="form-flex">
                    <div class="form-flex-left">
                        <div class="form-input-title">PROVINCE<span class="required">*</span></div>
                        <select name="province" id="province" onchange="selectedProvince()" class="input">
                            <option value="none">None</option>
                            <option value="Western">Western Province</option>
                            <option value="Central">Central Province</option>
                            <option value="Westedrn">Western</option>
                            </select>
                            <span class="form-invalid"></span>
                    </div>

                    <div class="form-flex-right">
                        <div class="form-input-title">DISTRICT<span class="required">*</span></div>
                        <select name="district" id="district" class="input">
                            <option value="none">None</option>
                            </select>
                        <span class="form-invalid"></span>
                    </div>

                </div>
                <div class="form-flex">
                    <div class="form-flex-left">
                        <div class="form-input-title">ZIP CODE<span class="required">*</span></div>
                        <input type="text" name="zipcode" id="zipcode" class="input"
                            placeholder="Zip code">
                        <span class="form-invalid"></span>
                    </div>

                    <div class="form-flex-right">
                        <div class="form-input-title">CONTACT<span class="required">*</span></div>
                        <input type="tel" name="contact" id="contact" class="input">
                        <span class="form-invalid"></span>
                    </div>

                </div>


                <br><br>
                <button class="main-button" type="submit">Signup</button>
            </fieldset>
        </form>



    </div>


</main>

<script src="<?php echo URLROOT ?>/public/js/districts.js"></script>
</body>

</html> 