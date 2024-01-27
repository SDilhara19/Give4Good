console.log("Yes")
let btn = document.querySelector('#btn')
let sidebar = document.querySelector('.side-bar-main')

btn.onclick = function () {
    sidebar.classList.toggle('active')
    sidebar.classList.toggle('inactive')

};