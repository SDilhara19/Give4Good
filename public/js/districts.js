console.log("sd")

function selectedProvince() {
var selectedProvince = document.querySelector("#province")
var districtOptions = document.querySelector("#district")
var province = selectedProvince.value
console.log(province)

if (province === "Western") {
        console.log("hi")
        var option = document.createElement("option");
        option.text = "Colombo";
        option.value = "Colombo";
        districtOptions.appendChild(option);

        var option = document.createElement("option");
        option.text = "Gampaha";
        option.value = "Gampaha";
        districtOptions.appendChild(option);

        var option = document.createElement("option");
        option.text = "Kaluthara";
        option.value = "Kaluthara";
        districtOptions.appendChild(option);
    
      } else if (province === "Central") {
        var option = document.createElement("option");
        option.text = "Kandy";
        option.value = "Kandy";
        districtOptions.appendChild(option);

        var option = document.createElement("option");
        option.text = "Nuwra Eliya";
        option.value = "NuwaraEliya";
        districtOptions.appendChild(option);

        var option = document.createElement("option");
        option.text = "Mathale";
        option.value = "Mathale";
        districtOptions.appendChild(option);

      } else if (province === "Southern") {
        var option = document.createElement("option");
        option.text = "Galle";
        option.value = "Galle";
        districtOptions.appendChild(option);

        var option = document.createElement("option");
        option.text = "Mathara";
        option.value = "Mathara";
        districtOptions.appendChild(option);

        var option = document.createElement("option");
        option.text = "Hambanthota";
        option.value = "Hambanthota";
        districtOptions.appendChild(option);
    
      } else if (province === "Eastern") {
        var option = document.createElement("option");
        option.text = "Ampara";
        option.value = "Ampara";
        districtOptions.appendChild(option);

        var option = document.createElement("option");
        option.text = "Batticaloa";
        option.value = "Batticaloa";
        districtOptions.appendChild(option);

        var option = document.createElement("option");
        option.text = "Trincomalee";
        option.value = "Trincomalee";
        districtOptions.appendChild(option);
    
      } else if (province === "Northern") {
        var option = document.createElement("option");
        option.text = "Jaffna";
        option.value = "Jaffna";
        districtOptions.appendChild(option);

        var option = document.createElement("option");
        option.text = "Kilinochchi";
        option.value = "Ampara";
        districtOptions.appendChild(option);

        var option = document.createElement("option");
        option.text = "Mannar";
        option.value = "Batticaloa";
        districtOptions.appendChild(option);

        var option = document.createElement("option");
        option.text = "Vavuniya";
        option.value = "Trincomalee";
        districtOptions.appendChild(option);

        var option = document.createElement("option");
        option.text = "Mullativu";
        option.value = "Trincomalee";
        districtOptions.appendChild(option);
    
      } else if (province === "North Central") {
        var option = document.createElement("option");
        option.text = "Anuradhapura";
        option.value = "Anuradhapura";
        districtOptions.appendChild(option);
    
        var option = document.createElement("option");
        option.text = "Polonnaruwa";
        option.value = "Polonnaruwa";
        districtOptions.appendChild(option);
    
      } else if (province === "Uva") {
        var option = document.createElement("option");
        option.text = "Badulla";
        option.value = "Badulla";
        districtOptions.appendChild(option);

        var option = document.createElement("option");
        option.text = "Monaragala";
        option.value = "Monaragala";
        districtOptions.appendChild(option);
    
      } else if (province === "Sabaragamuwa") {
        var option = document.createElement("option");
        option.text = "Kegalle";
        option.value = "Kegalle";
        districtOptions.appendChild(option);

        var option = document.createElement("option");
        option.text = "Rathnapura";
        option.value = "Rathnapura";
        districtOptions.appendChild(option);
    
      } else if (province === "North Western") {
        var option = document.createElement("option");
        option.text = "Kurunegala";
        option.value = "Kurunegala";
        districtOptions.appendChild(option);

        var option = document.createElement("option");
        option.text = "Puttalam";
        option.value = "Puttalam";
        districtOptions.appendChild(option);
    
      }

}

