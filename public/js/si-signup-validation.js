const form = document.getElementById("siSignupForm")


const fullnameInput = document.getElementById('fullname');
console.log(fullnameInput)
const fullnameError = fullnameInput.nextElementSibling;
console.log(fullnameError)
// nicNo
const nicNoInput = document.getElementById('nicNo');
const nicNoError = nicNoInput.nextElementSibling;

// dob
const dobInput = document.getElementById('dob');
const dobError = dobInput.nextElementSibling;

// nic_front_image
const nicFrontImageInput = document.getElementById('nic_front_image');
const nicFrontImageError = nicFrontImageInput.parentElement.parentElement.querySelector('.form-invalid');

// nic_back_image
const nicBackImageInput = document.getElementById('nic_back_image');
const nicBackImageError = nicBackImageInput.parentElement.parentElement.querySelector('.form-invalid');

// address
const addressInput = document.getElementById('address');
const addressError = addressInput.nextElementSibling;

// zipcode
const zipcodeInput = document.getElementById('zipcode');
const zipcodeError = zipcodeInput.nextElementSibling;

// contact
const contactInput = document.getElementById('contact');
const contactError = contactInput.nextElementSibling;

// name
const nameInput = document.getElementById('name');
const nameError = nameInput.nextElementSibling;

// accountNo
const accountNoInput = document.getElementById('accountNo');
const accountNoError = accountNoInput.nextElementSibling;

// bankcode
const bankcodeInput = document.getElementById('bankcode');
const bankcodeError = bankcodeInput.nextElementSibling;

// bank
const bankInput = document.getElementById('bank');
const bankError = bankInput.nextElementSibling;

// branchcode
const branchcodeInput = document.getElementById('branchcode');
const branchcodeError = branchcodeInput.nextElementSibling;

// branch
const branchInput = document.getElementById('branch');
const branchError = branchInput.nextElementSibling;

// pass_book_image
const passBookImageInput = document.getElementById('pass_book_image');
const passBookImageError = passBookImageInput.parentElement.parentElement.querySelector('.form-invalid');



// fullname
fullnameInput.addEventListener('input', function () {
    validateName(this.value, fullnameError);
});

// nicNo
nicNoInput.addEventListener('input', function () {
       validateNIC(this.value, nicNoError);
});

// dob
dobInput.addEventListener('input', function () {
    validateAdult(this.value, dobError);
});

// nic_front_image
nicFrontImageInput.addEventListener('input', function () {
    validateNotEmpty(this.value, nicFrontImageError);
});

// nic_back_image
nicBackImageInput.addEventListener('input', function () {
    validateNotEmpty(this.value, nicBackImageError);
});

// address
addressInput.addEventListener('input', function () {
    validateNotEmpty(this.value, addressError);
});

// zipcode
zipcodeInput.addEventListener('input', function () {
      validateZip(this.value, zipcodeError);
});

// contact
contactInput.addEventListener('input', function () {
       validateContact(this.value, contactError);
});

// name
nameInput.addEventListener('input', function () {
    validateName(this.value, nameError);
});

// accountNo
accountNoInput.addEventListener('input', function () {
    validateAccNo(this.value, accountNoError);
});

// bankcode
bankcodeInput.addEventListener('input', function () {
       validateBankcode(this.value, bankcodeError);
});

// bank
bankInput.addEventListener('input', function () {
    validateName(this.value, bankError);
});

// branchcode
branchcodeInput.addEventListener('input', function () {
    validateBranchcode(this.value, branchcodeError);
});

// branch
branchInput.addEventListener('input', function () {
    validateName(this.value, branchError);
});

// pass_book_image
passBookImageInput.addEventListener('input', function () {
    validateNotEmpty(this.value, passBookImageError);
});


var nextButton = document.getElementById('submit-1');

nextButton.addEventListener('click', function (event) {
   
    validateNotEmpty(fullnameInput.value, fullnameError);
    validateName(fullnameInput.value, fullnameError);
    validateNotEmpty(nicNoInput.value, nicNoError);
    validateNIC(nicNoInput.value, nicNoError);
    validateNotEmpty(dobInput.value, dobError);
    validateAdult(dobInput.value, dobError);
    validateNotEmpty(nicFrontImageInput.value, nicFrontImageError);
    validateNotEmpty(nicBackImageInput.value, nicBackImageError);
    
    
    const errorMessages = [fullnameError.textContent, nicNoError.textContent, dobInput.textContent]
    if (errorMessages.every(message => message === '')) {
        nextStep(3);
    } else {
        console.log('Validation failed. Please check your inputs.');
    }
});

var nextButton = document.getElementById('submit-2');

nextButton.addEventListener('click', function (event) {
   
    validateNotEmpty(addressInput.value, addressError);
    validateNotEmpty(zipcodeInput.value, zipcodeError);
    validateZip(zipcodeInput.value, zipcodeError);
    validateNotEmpty(contactInput.value, contactError);
    validateContact(contactInput.value, contactError);
    
    
    const errorMessages = [addressError.textContent, zipcodeError.textContent, contactError.textContent]
    if (errorMessages.every(message => message === '')) {
        nextStep(3);
    } else {
        console.log('Validation failed. Please check your inputs.');
    }
});


var nextButton = document.getElementById('submit-3');
nextButton.addEventListener('click', function (event)  {
    
    validateNotEmpty(nameInput.value, nameError);
    validateName(nameInput.value, nameError);

    validateNotEmpty(accountNoInput.value, accountNoError);
    validateAccNo(accountNoInput.value, accountNoError);

    validateNotEmpty(bankcodeInput.value, bankcodeError);
    validateBankcode(bankcodeInput.value, bankcodeError);

    validateNotEmpty(bankInput.value, bankError);
    validateName(bankInput.value, bankError);

    validateNotEmpty(branchcodeInput.value, branchcodeError);
    validateBranchcode(branchcodeInput.value, branchcodeError);

    validateNotEmpty(branchInput.value, branchError);
    validateName(branchInput.value, branchError);

    validateNotEmpty(passBookImageInput.value, passBookImageError);
   
    console.log("ok")
    


    
    
    const errorMessages = [nameError.textContent, accountNoError.textContent, bankcodeError.textContent, bankError.textContent, branchcodeError.textContent, branchError.textContent, passBookImageError.textContent]
    if (errorMessages.every(message => message === '')) {
        // console.log("okv")
        form.submit();
    } else {
        console.log('Validation failed. Please check your inputs.');
    }
});