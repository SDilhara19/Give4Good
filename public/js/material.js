// console.log("123")
const viewMaterial = document.querySelector('.material-popup')
const openMaterial = document.querySelector('#open-material-popup')
const closeMaterial = document.querySelector('.close-material-popup')

openMaterial.addEventListener('click', () => {
    viewMaterial.showModal();
})

closeMaterial.addEventListener('click', () => {
    viewMaterial.close();
})


