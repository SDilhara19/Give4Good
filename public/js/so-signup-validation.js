const form = document.getElementById("VSuperSignUp")

// profile_image
const profileImageInput = document.getElementById('profile_image');
const profileImageError = profileImageInput.parentElement.parentElement.querySelector('.form-invalid');
profileImageInput.addEventListener('input', function () {
    validateNotEmpty(this.value, profileImageError);
});

// regNo
const regNoInput = document.getElementById('regNo');
const regNoError = regNoInput.nextElementSibling;
regNoInput.addEventListener('input', function () {
    validateNotEmpty(this.value, regNoError);
});

// doReg
const doRegInput = document.getElementById('doReg');
const doRegError = doRegInput.nextElementSibling;
doRegInput.addEventListener('input', function () {
    validateRegDate(this.value, doRegError);
});

// reg_certificate
const reg_certificateInput = document.getElementById('reg_certificate');
const reg_certificateError = reg_certificateInput.parentElement.parentElement.querySelector('.form-invalid');
reg_certificateInput.addEventListener('input', function () {
    validateNotEmpty(this.value, reg_certificateError);
});

// certificate
const certificateInput = document.getElementById('certification');
const certificateError = certificateInput.parentElement.parentElement.querySelector('.form-invalid');
certificateInput.addEventListener('input', function () {
    validateNotEmpty(this.value, certificateError);
});

// address
const addressInput = document.getElementById('address');
const addressError = addressInput.nextElementSibling;
addressInput.addEventListener('input', function () {
    validateNotEmpty(this.value, addressError);
});

// zipcode
const zipcodeInput = document.getElementById('zipcode');
const zipcodeError = zipcodeInput.nextElementSibling;
zipcodeInput.addEventListener('input', function () {
    validateZip(this.value, zipcodeError);
});

// contact
const contactInput = document.getElementById('contact');
const contactError = contactInput.nextElementSibling;
contactInput.addEventListener('input', function () {
    validateContact(this.value, contactError);
});

// name
const nameInput = document.getElementById('name');
const nameError = nameInput.nextElementSibling;
nameInput.addEventListener('input', function () {
    validateName(this.value, nameError);
});

// accountNo
const accountNoInput = document.getElementById('accountNo');
const accountNoError = accountNoInput.nextElementSibling;
accountNoInput.addEventListener('input', function () {
    validateNotEmpty(this.value, accountNoError);
});

// bankcode
const bankcodeInput = document.getElementById('bankcode');
const bankcodeError = bankcodeInput.nextElementSibling;
bankcodeInput.addEventListener('input', function () {
    validateNotEmpty(this.value, bankcodeError);
});

// bank
const bankInput = document.getElementById('bank');
const bankError = bankInput.nextElementSibling;
bankInput.addEventListener('input', function () {
    validateNotEmpty(this.value, bankError);
});

// branchcode
const branchcodeInput = document.getElementById('branchcode');
const branchcodeError = branchcodeInput.nextElementSibling;
branchcodeInput.addEventListener('input', function () {
    validateNotEmpty(this.value, branchcodeError);
});

// branch
const branchInput = document.getElementById('branch');
const branchError = branchInput.nextElementSibling;
branchInput.addEventListener('input', function () {
    validateNotEmpty(this.value, branchError);
});

// pass_book_image
const pass_book_imageInput = document.getElementById('pass_book_image');
const pass_book_imageError = pass_book_imageInput.parentElement.parentElement.querySelector('.form-invalid');
pass_book_imageInput.addEventListener('input', function () {
    validateNotEmpty(this.value, pass_book_imageError);
});

// ex_fullname
const ex_fullnameInput = document.getElementById('ex-fullname');
const ex_fullnameError = ex_fullnameInput.nextElementSibling;
ex_fullnameInput.addEventListener('input', function () {
    validateName(this.value, ex_fullnameError);
});

// ex_designation
const ex_designationInput = document.getElementById('ex-designation');
const ex_designationError = ex_designationInput.nextElementSibling;
ex_designationInput.addEventListener('input', function () {
    validateNotEmpty(this.value, ex_designationError);
});

// ex_nicNo
const ex_nicNoInput = document.getElementById('ex-nicNo');
const ex_nicNoError = ex_nicNoInput.nextElementSibling;
ex_nicNoInput.addEventListener('input', function () {
    validateNIC(this.value, ex_nicNoError);
});

// ex_address
const ex_addressInput = document.getElementById('ex-address');
const ex_addressError = ex_addressInput.nextElementSibling;
ex_addressInput.addEventListener('input', function () {
    validateNotEmpty(this.value, ex_addressError);
});

// ex_email
const ex_emailInput = document.getElementById('ex-email');
const ex_emailError = ex_emailInput.nextElementSibling;
ex_emailInput.addEventListener('input', function () {
    validateEmail(this.value, ex_emailError);
});

// ex_contact
const ex_contactInput = document.getElementById('ex-contact');
const ex_contactError = ex_contactInput.nextElementSibling;
ex_contactInput.addEventListener('input', function () {
    validateContact(this.value, ex_contactError);
});

// ex_nic_front_image
const ex_nic_front_imageInput = document.getElementById('ex-nic_front_image');
const ex_nic_front_imageError = ex_nic_front_imageInput.parentElement.parentElement.querySelector('.form-invalid');
ex_nic_front_imageInput.addEventListener('input', function () {
    validateNotEmpty(this.value, ex_nic_front_imageError);
});

// ex_nic_back_image
const ex_nic_back_imageInput = document.getElementById('ex-nic_back_image');
const ex_nic_back_imageError = ex_nic_back_imageInput.parentElement.parentElement.querySelector('.form-invalid');
ex_nic_back_imageInput.addEventListener('input', function () {
    validateNotEmpty(this.value, ex_nic_back_imageError);
});

// tr_fullname
const tr_fullnameInput = document.getElementById('tr-fullname');
const tr_fullnameError = tr_fullnameInput.nextElementSibling;
tr_fullnameInput.addEventListener('input', function () {
    validateName(this.value, tr_fullnameError);
});

// tr_designation
const tr_designationInput = document.getElementById('ex-designation');
const tr_designationError = tr_designationInput.nextElementSibling;
tr_designationInput.addEventListener('input', function () {
    validateNotEmpty(this.value, tr_designationError);
});

// tr_nicNo
const tr_nicNoInput = document.getElementById('tr-nicNo');
const tr_nicNoError = tr_nicNoInput.nextElementSibling;
tr_nicNoInput.addEventListener('input', function () {
    validateNIC(this.value, tr_nicNoError);
});

// tr_address
const tr_addressInput = document.getElementById('tr-address');
const tr_addressError = tr_addressInput.nextElementSibling;
tr_addressInput.addEventListener('input', function () {
    validateNotEmpty(this.value, tr_addressError);
});

// tr_email
const tr_emailInput = document.getElementById('tr-email');
const tr_emailError = tr_emailInput.nextElementSibling;
tr_emailInput.addEventListener('input', function () {
    validateEmail(this.value, tr_emailError);
});

// tr_contact
const tr_contactInput = document.getElementById('tr-contact');
const tr_contactError = tr_contactInput.nextElementSibling;
tr_contactInput.addEventListener('input', function () {
    validateContact(this.value, tr_contactError);
});

// tr_nic_front_image
const tr_nic_front_imageInput = document.getElementById('tr-nic_front_image');
const tr_nic_front_imageError = tr_nic_front_imageInput.parentElement.parentElement.querySelector('.form-invalid');
tr_nic_front_imageInput.addEventListener('input', function () {
    validateNotEmpty(this.value, tr_nic_front_imageError);
});

// tr_nic_back_image
const tr_nic_back_imageInput = document.getElementById('tr-nic_back_image');
const tr_nic_back_imageError = tr_nic_back_imageInput.parentElement.parentElement.querySelector('.form-invalid');
tr_nic_back_imageInput.addEventListener('input', function () {
    validateNotEmpty(this.value, tr_nic_back_imageError);
});

// sec_fullname
const sec_fullnameInput = document.getElementById('sec-fullname');
const sec_fullnameError = sec_fullnameInput.nextElementSibling;
sec_fullnameInput.addEventListener('input', function () {
    validateName(this.value, sec_fullnameError);
});

// sec_designation
const sec_designationInput = document.getElementById('sec-designation');
const sec_designationError = sec_designationInput.nextElementSibling;
sec_designationInput.addEventListener('input', function () {
    validateNotEmpty(this.value, sec_designationError);
});

// sec_nicNo
const sec_nicNoInput = document.getElementById('sec-nicNo');
const sec_nicNoError = sec_nicNoInput.nextElementSibling;
sec_nicNoInput.addEventListener('input', function () {
    validateNIC(this.value, sec_nicNoError);
});

// sec_address
const sec_addressInput = document.getElementById('sec-address');
const sec_addressError = sec_addressInput.nextElementSibling;
sec_addressInput.addEventListener('input', function () {
    validateNotEmpty(this.value, sec_addressError);
});

// sec_email
const sec_emailInput = document.getElementById('sec-email');
const sec_emailError = sec_emailInput.nextElementSibling;
sec_emailInput.addEventListener('input', function () {
    validateEmail(this.value, sec_emailError);
});

// sec_contact
const sec_contactInput = document.getElementById('sec-contact');
const sec_contactError = sec_contactInput.nextElementSibling;
sec_contactInput.addEventListener('input', function () {
    validateContact(this.value, sec_contactError);
});

// sec_nic_front_image
const sec_nic_front_imageInput = document.getElementById('sec-nic_front_image');
const sec_nic_front_imageError = sec_nic_front_imageInput.parentElement.parentElement.querySelector('.form-invalid');
sec_nic_front_imageInput.addEventListener('input', function () {
    validateNotEmpty(this.value, sec_nic_front_imageError);
});

// sec_nic_back_image
const sec_nic_back_imageInput = document.getElementById('sec-nic_back_image');
const sec_nic_back_imageError = sec_nic_back_imageInput.parentElement.parentElement.querySelector('.form-invalid');
sec_nic_back_imageInput.addEventListener('input', function () {
    validateNotEmpty(this.value, sec_nic_back_imageError);
});