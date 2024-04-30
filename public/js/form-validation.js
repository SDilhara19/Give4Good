
console.log('b')
function validateEmail(email, error) {
  const emailRegExp =/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  
  if (!emailRegExp.test(email)) {
    error.textContent = 'Invalid email format';
  } else {
    error.textContent = '';
  }
}

function validateUsername(username, error) {
  const usernameRegExp = /^[a-zA-Z0-9]+$/;

  if (!usernameRegExp.test(username)) {
    error.textContent = 'Must contain only alphanumeric characters';
  } else {
    error.textContent = '';
  }
}

function validatePassword(password, error) {

  if (password.length < 7) {
    error.textContent = 'Suggest a strong password';
  } else {
    error.textContent = '';
  }
}

function validateConfirmPassword(confirmPassword, error) {
  const password = document.getElementById('password').value;

  if (confirmPassword !== password) {
    error.textContent = 'Passwords do not match';
  } else {
    error.textContent = '';
  }
}

// function validateImage(file, error) {
//   const allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
//   // console.log(file);
//   const fileName = file;
//   const fileExtension = fileName.split('.').pop();

//   if (!allowedExtensions.includes(fileExtension)) {
//     error.textContent = 'Image format not supported';
//   }else {
//     error.textContent = '';
//   }

// }

function validateName(fullname, error) {
  const usernameRegExp = /^[a-zA-Z\s]+$/;

  if (!usernameRegExp.test(fullname)) {
    error.textContent = 'Enter valid data';
  } else {
    error.textContent = '';
  }
}

function validateNIC(input, error) {
  const nicRegExp = /^(?:\d{9}[vV]|\d{12})$/;

  if (!nicRegExp.test(input)) {
    error.textContent = 'Enter valid NIC number';
  } else {
    error.textContent = '';
  }
}


function validateEndDate(input, error) {
  var inputDate = new Date(input);

  var today = new Date();
  // Set hours, minutes, seconds, and milliseconds to 0 to compare dates without time
  today.setHours(0, 0, 0, 0)

  if (inputDate > today) {
    error.textContent = 'Enter valid date';
  } else {
    error.textContent = '';
  }
}

function validateAdult(input, error) {
  var inputDate = new Date(input);

  var today = new Date();
  var eighteenYearsAgo = new Date(today.getFullYear() - 18, today.getMonth(), today.getDate());
console.log(inputDate <= eighteenYearsAgo)

  if (! (inputDate <= eighteenYearsAgo)) {
    error.textContent = 'You must be age 18 or above';
  } else {
    error.textContent = '';
  }
}

function validateChild(input, error) {
  var inputDate = new Date(input);

  var today = new Date();
  var eighteenYearsAgo = new Date(today.getFullYear() - 18, today.getMonth(), today.getDate());


  if ( inputDate > eighteenYearsAgo) {
    error.textContent = 'Child must be below age 18';
  } else {
    error.textContent = '';
  }
}

function validateZip(input, error) {
  const RegExp = /^\d{5}$/;

  if (!RegExp.test(input)) {
    error.textContent = 'Enter valid zip code';
  } else {
    error.textContent = '';
  }
}

function validateContact(input, error) {
  const RegExp = /^\d{10}$/;

  if (!RegExp.test(input)) {
    error.textContent = 'Enter valid phone number';
  } else {
    error.textContent = '';
  }
}

function validateNotEmpty(input, error) {
  input.trim() !== ''
  if (input.trim() == '') {
    error.textContent = 'This field is required';
  } else {
    error.textContent = '';
  }
}

function validateAccNo(input, error) {
  const RegExp = /^\d{1,20}$/;

  if (!RegExp.test(input)) {
    error.textContent = 'Enter valid bank account number';
  } else {
    error.textContent = '';
  }
}

function validateBankcode(input, error) {
  const RegExp = /^\d{4}$/;

  if (!RegExp.test(input)) {
    error.textContent = 'Enter valid bank code';
  } else {
    error.textContent = '';
  }
}


function validateBranchcode(input, error) {
  const RegExp = /^\d{1,5}$/;

  if (!RegExp.test(input)) {
    error.textContent = 'Enter valid branch code';
  } else {
    error.textContent = '';
  }
}