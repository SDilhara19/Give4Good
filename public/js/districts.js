
function selectedProvince() {
  var selectedProvince = document.querySelector("#province")
  var districtOptions = document.querySelector("#district")
  var province = selectedProvince.value



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
