// document.getElementById('material-details-trigger').addEventListener('click', function() {
//     document.getElementById('popup-box').style.display = 'block';
//     document.querySelector('.modal-overlay').style.display = 'block'; // Show modal overlay
// });

// // Function to close the popup
// function closePopup() {
//     document.getElementById('popup-box').style.display = 'none';
//     document.querySelector('.modal-overlay').style.display = 'none'; // Hide modal overlay
// }

const viewMaterial = document.querySelector('.material-popup')
const openMaterial = document.querySelector('#open-material-popup')
const closeMaterial = document.querySelector('.close-material-popup')

openMaterial.addEventListener('click', () => {
    viewMaterial.showModal();
})

closeMaterial.addEventListener('click', () => {
    viewMaterial.close();
})


