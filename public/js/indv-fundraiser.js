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

// form-1.2 validation

const underAgeCheckBox = document.getElementById('child')
underAgeCheckBox.addEventListener('change', function() {
    if (underAgeCheckBox.checked) {

        console.log("cg")
        //dependent_name
        const dependentnameInput = document.getElementById('dependent_name');
        const dependentnameError = dependentnameInput.nextElementSibling;
    
        //dependent_birthdate
        const dependentbirthdateInput = document.getElementById('dependent_birthdate');
        const dependentbirthdateError = dependentbirthdateInput.nextElementSibling;
    
        //relationship
        const relationshipInput = document.getElementById('relationship');
        const relationshipError = relationshipInput.nextElementSibling;
    
        //dependent_edu_ins_work
        const dependenteduinsworkInput = document.getElementById('dependent_edu_ins_work');
        const dependenteduinsworkError = dependenteduinsworkInput.nextElementSibling;
    
        //birth_certificate
        const birthcertificateInput = document.getElementById('birth_certificate');
        const birthcertificateError = birthcertificateInput.parentElement.parentElement.parentElement.querySelector('.form-invalid');
    
        //dependent_name
        dependentnameInput.addEventListener('input', function () {
            validateName(this.value, dependentnameError);
        });
    
        //dependent_birthdate
        dependentbirthdateInput.addEventListener('input', function () {
            validateChild(this.value, dependentbirthdateError);
        });
    
        //relationship
        relationshipInput.addEventListener('input', function () {
            validateName(this.value, relationshipError);
        });
    
        //dependent_edu_ins_work
        dependenteduinsworkInput.addEventListener('input', function () {
            validateNotEmpty(this.value, dependenteduinsworkError);
        });
    
        //birth_certificate
        birthcertificateInput.addEventListener('input', function () {
            validateNotEmpty(this.value, birthcertificateError);
        }); 

        
var nextButton = document.getElementById('indvNext');

nextButton.addEventListener('click', function (event) {
     if (underAgeCheckBox.checked) {
        validateName(dependentnameInput.value, dependentnameError);
        validateNotEmpty(dependentnameInput.value, dependentnameError);
        validateChild(dependentbirthdateInput.value, dependentbirthdateError);
        validateNotEmpty(dependentbirthdateInput.value, dependentbirthdateError);
        validateNotEmpty(relationshipInput.value, relationshipError);
        validateNotEmpty(dependenteduinsworkInput.value, dependenteduinsworkError);
        validateNotEmpty(birthcertificateInput.value, birthcertificateError);
    }


        const errorMessages = [dependentnameError.textContent, dependentbirthdateError.textContent, 
            relationshipError.textContent, dependenteduinsworkError.textContent, birthcertificateError.textContent]
    if (errorMessages.every(message => message === '')) {
        nextStep(3);
    } else {
        console.log('Validation failed. Please check your inputs.');
    }
});
    }
    
})


var nextButton = document.getElementById('indvNext');

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
        nextStep(3);
    } else {
        console.log('Validation failed. Please check your inputs.');
    }
});
