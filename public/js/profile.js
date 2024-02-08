console.log("Profile-js")

toggleSection('personal-info');//setting default as personal-info

function toggleSection(sectionId) {
    // Hiding all profile sections
    var allSections = document.getElementsByClassName("profile-section");
    // var listItems = document.getElementsByClassName("profile-list-items");
    for (var i = 0; i < allSections.length; i++) {
        allSections[i].style.display = "none";
        // listItems.style.color = "#6E7175";
    }

    // Show the selected profile section
    var selectedSection = document.getElementById(sectionId);
    var clickedItem = document.querySelector('[onclick="toggleSection(\'' + sectionId + '\')"]');
    if (selectedSection) {
        selectedSection.style.display = "block";
        clickedItem.style.color = "#4EB790";

    }
}

// function toggleSection(sectionId) {
//     // Hiding all profile sections
//     var allSections = document.getElementsByClassName("profile-section");
//     var listItems = document.getElementsByClassName("profile-list-items");
  
//     for (var i = 0; i < allSections.length; i++) {
//       allSections[i].style.display = "none";
//       listItems[i].classList.remove("active");
//     }
  
//     // Show the selected profile section
//     var selectedSection = document.getElementById(sectionId);
//     var clickedItem = Array.from(listItems).find(
//       (item) => item.getAttribute("data-section-id") === sectionId
//     );
  
//     if (selectedSection && clickedItem) {
//       selectedSection.style.display = "block";
//       clickedItem.classList.add("active");
//     }
//   }
  
//   // Attach click event listeners to list items
//   var listItems = document.getElementsByClassName("profile-list-items");
//   for (var i = 0; i < listItems.length; i++) {
//     listItems[i].addEventListener("click", function (event) {
//       var sectionId = event.currentTarget.getAttribute("data-section-id");
//       toggleSection(sectionId);
//     });
//   }