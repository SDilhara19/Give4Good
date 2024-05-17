const form = document.getElementById('oSignupform');
const emailInput = document.getElementById('email');
const usernameInput = document.getElementById('name');
const passwordInput = document.getElementById('password');
const confirmpasswordInput = document.getElementById('confirmpassword');

const emailError = emailInput.previousElementSibling.querySelector('.form-invalid');
const usernameError = usernameInput.previousElementSibling.querySelector('.form-invalid');
const passwordError = passwordInput.previousElementSibling.querySelector('.form-invalid');
const confirmpasswordError = confirmpasswordInput.previousElementSibling.querySelector('.form-invalid');

emailInput.addEventListener('input', function () {
    validateEmail(this.value, emailError);
});

usernameInput.addEventListener('input', function () {
    validateName(this.value, usernameError);
});

passwordInput.addEventListener('input', function () {
    validatePassword(this.value, passwordError);
});

confirmpasswordInput.addEventListener('input', function () {
    validateConfirmPassword(this.value, confirmpasswordError);
});

form.addEventListener('submit', function (event) {
    event.preventDefault();

    validateEmail(emailInput.value, emailError);
    validateName(usernameInput.value, usernameError);
    validatePassword(passwordInput.value, passwordError);
    validateConfirmPassword(confirmpasswordInput.value, confirmpasswordError);

    const errorMessages = [emailError.textContent, usernameError.textContent, passwordError.textContent, confirmpasswordError.textContent];

    if (errorMessages.every(message => message === '')) {
        // If no errors, allow form submission
        form.submit();
    } else {
        // If there are errors, prevent form submission
        console.log('Form has errors. Please correct them.');
    }
});
