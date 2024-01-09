console.log("sd")

function selectedProvince() {
var selectedProvince = document.querySelector("#province")
var districtOptions = document.querySelector("#district")
var province = selectedProvince.value
console.log(province)

if (province === "Western") {
          console.log("hi")
        // Options for Option 1
        var option = document.createElement("option");
        option.text = "Colombo";
        option.value = "Colombo";
        districtOptions.appendChild(option);
    
        // Add more options as needed
      } else if (province === "Central") {
        // Options for Option 2
        var option = document.createElement("option");
        option.text = "Kandy";
        option.value = "Kandy";
        districtOptions.appendChild(option);
    
        // Add more options as needed
      }

}

