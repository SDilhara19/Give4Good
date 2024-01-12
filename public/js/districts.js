
function selectedProvince() {
  var selectedProvince = document.querySelector("#province")
  var districtOptions = document.querySelector("#district")
  var province = selectedProvince.value

  districtOptions.innerHTML = "";

  if (province === "Western") {
    addOption("Select district", "sede", districtOptions, true);
    addOption("Colombo", "Colombo", districtOptions);
    addOption("Gampaha", "Gampaha", districtOptions);
    addOption("Kaluthara", "Kaluthara", districtOptions);


  }
  else if (province === "Central") {
    
    addOption("Kandy", "Kandy", districtOptions);
    
  }

}


function addOption(text, value, selectElement, isDisabled = false) {
  var option = document.createElement("option");
  option.text = text;
  option.value = value;

  if (isDisabled) {
    option.disabled = true;
  }

  selectElement.appendChild(option);
}