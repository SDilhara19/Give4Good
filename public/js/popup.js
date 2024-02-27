// // console.log("123")
// const viewMaterial = document.querySelector('.material-popup')
// const openMaterial = document.querySelector('#open-material-popup')
// const closeMaterial = document.querySelector('.close-material-popup')

// openMaterial.addEventListener('click', () => {
//     viewMaterial.showModal();
// })

// closeMaterial.addEventListener('click', () => {
//     viewMaterial.close();
// })

function setupPopup(openButtonSelector, popupSelector, closeButtonSelector) {
    console.log("hi")
    const view = document.querySelector(popupSelector);
    const open = document.querySelector(openButtonSelector);
    const close = document.querySelector(closeButtonSelector);

    open.addEventListener('click', () => {
        view.showModal();
    });

    close.addEventListener('click', () => {
        view.close();
    });
}



