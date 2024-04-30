function toggleFormPart(option) {
    var formPart1 = document.getElementById('formPart1');
    var formPart2 = document.getElementById('formPart2');
  
    if (option === 'option1') {
      formPart1.style.display = 'block';
      formPart2.style.display = 'none';
    } else if (option === 'option2') {
      formPart1.style.display = 'none';
      formPart2.style.display = 'block';
    }
  }
  