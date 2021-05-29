const barbtn = document.querySelector(".bar");
const show = document.querySelector(".logout");

barbtn.addEventListener('click', () => {
    show.classList.toggle("display");
})