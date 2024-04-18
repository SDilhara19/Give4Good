function selectedProvince() {
  var selectedProvince = document.querySelector("#province")
  var districtOptions = document.querySelector("#district")
  var province = selectedProvince.value

  districtOptions.innerHTML = "";

  if (province === "Western") {
    addOption("Select district", "sede", districtOptions, true);
    addOption("Colombo", "Colombo", districtOptions);
    addOption("Gampaha", "Gampaha", districtOptions);
    addOption("Kalutara", "Kalutara", districtOptions);
  } else if (province === "Central") {
    addOption("Select district", "sede", districtOptions, true);
    addOption("Kandy", "Kandy", districtOptions);
    addOption("Matale", "Matale", districtOptions);
    addOption("Nuwara Eliya", "Nuwara Eliya", districtOptions);
  } else if (province === "Southern") {
    addOption("Select district", "sede", districtOptions, true);
    addOption("Galle", "Galle", districtOptions);
    addOption("Matara", "Matara", districtOptions);
    addOption("Hambantota", "Hambantota", districtOptions);
  } else if (province === "Northern") {
    addOption("Select district", "sede", districtOptions, true);
    addOption("Jaffna", "Jaffna", districtOptions);
    addOption("Kilinochchi", "Kilinochchi", districtOptions);
    addOption("Mannar", "Mannar", districtOptions);
    addOption("Mullaitivu", "Mullaitivu", districtOptions);
    addOption("Vavuniya", "Vavuniya", districtOptions);
  } else if (province === "Eastern") {
    addOption("Select district", "sede", districtOptions, true);
    addOption("Ampara", "Ampara", districtOptions);
    addOption("Batticaloa", "Batticaloa", districtOptions);
    addOption("Trincomalee", "Trincomalee", districtOptions);
  } else if (province === "North Central") {
    addOption("Select district", "sede", districtOptions, true);
    addOption("Anuradhapura", "Anuradhapura", districtOptions);
    addOption("Polonnaruwa", "Polonnaruwa", districtOptions);
  } else if (province === "North Western") {
    addOption("Select district", "sede", districtOptions, true);
    addOption("Kurunegala", "Kurunegala", districtOptions);
    addOption("Puttalam", "Puttalam", districtOptions);
  } else if (province === "Sabaragamuwa") {
    addOption("Select district", "sede", districtOptions, true);
    addOption("Kegalle", "Kegalle", districtOptions);
    addOption("Ratnapura", "Ratnapura", districtOptions);
  } else if (province === "Uva") {
    addOption("Select district", "sede", districtOptions, true);
    addOption("Badulla", "Badulla", districtOptions);
    addOption("Moneragala", "Moneragala", districtOptions);
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
