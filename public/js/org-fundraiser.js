const form = document.getElementById("fundraiser-form");
console.log("d")

// form-1 validation

//title
const titleInput = document.getElementById('title');
console.log(titleInput)
const titleError = titleInput.nextElementSibling;


const storyInput = document.getElementById('fund_story');
const storyError = storyInput.nextElementSibling;


//input_image
// const inputimageInput = document.getElementById('input_image');
// const inputimageError = inputimageInput.parentElement.parentElement.querySelector('.form-invalid');

//amount
const amountInput = document.getElementById('amount');
const amountError = amountInput.nextElementSibling;

//end_date
const end_dateInput = document.getElementById('end_date');
const end_dateError = end_dateInput.nextElementSibling;

//title
titleInput.addEventListener('input', function () {
    validateName(this.value, titleError);
});

storyInput.addEventListener('input', function () {
    validateNotEmpty(this.value, storyError);
});

//input_image
// inputimageInput.addEventListener('input', function () {
//     validateNotEmpty(this.value, inputimageError);
// });

//amount
amountInput.addEventListener('input', function () {
    validatePrice(this.value, amountError);
});

//end_date
end_dateInput.addEventListener('input', function () {
    console.log("d")
    validateEndDate(this.value, end_dateError);
});




var nextButton = document.getElementById('orgNext');

nextButton.addEventListener('click', function (event) {

    validateNotEmpty(titleInput.value, titleError);
    validateName(titleInput.value, titleError);
    validateNotEmpty(storyInput.value, storyError);
    // validateNotEmpty(inputimageInput.value, inputimageError);
    validatePrice(amountInput.value, amountError);
    validateNotEmpty(amountInput.value, amountError);
    validateEndDate(end_dateInput.value, end_dateError);
    validateNotEmpty(end_dateInput.value, end_dateError);

   
    
    
    const errorMessages = [titleError.textContent, amountError.textContent, 
        end_dateError.textContent]
    if (errorMessages.every(message => message === '')) {
        nextStep(4);
    } else {
        console.log('Validation failed. Please check your inputs.');
    }
});
