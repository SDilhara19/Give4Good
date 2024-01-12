console.log("ds")
const image = document.querySelector(".form-image-container img"), 
input = document.querySelector("#form_image");

input.addEventListener("change", () => {
    image.src = URL.createObjectURL(input.files[0])
})