let currentStep = 1;



function nextStep(noOfSteps){
    
    if (currentStep < noOfSteps){
        console.log("ds")
        currentStep++;
        updateStep();
    }
}

function prevStep(){
    if (currentStep > 1){
        currentStep--;
        updateStep();
    }
}

function updateStep(){
    const stepContainers = document.querySelectorAll('.step-container');
    stepContainers.forEach((container, index) => {
        if (index + 1 === currentStep) {
            container.classList.add('active');
            // console.log("Container activated:", index + 1);
        } else {
            container.classList.remove('active');
            // console.log("Container deactivated:", index + 1);
        }
    });

    const steps = document.querySelectorAll('.progress-step');
    steps.append(document.querySelectorAll('.progress-step-hori'));
    console.log(steps)
    steps.forEach((step, index) => {
        if(index + 1 < currentStep) {
            step.classList.add('active');
        } else {
            step.classList.remove('active');
        }
    });
}