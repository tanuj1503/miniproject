const barbtn = document.querySelector(".bar");
const show = document.querySelector(".logout");

barbtn.addEventListener('click', () => {
    show.classList.toggle("display");
});


const containerLoad = document.querySelector(".hospital-container");
const note = document.querySelector(".note");

window.addEventListener('load', () => {
    containerLoad.style.opacity = "0.2";
    note.style.display = "block";  
})

/* cross button(Times) */
const times = document.querySelector(".times");
times.addEventListener('click', () => {
    note.style.display = "none";
    containerLoad.style.opacity = "1";
})