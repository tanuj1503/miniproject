const barbtn = document.querySelector(".bars");
const show = document.querySelector(".logout");

barbtn.addEventListener('click', () => {
    show.classList.toggle("display");
});

const containerLoad = document.querySelector(".user-container");
const moto = document.querySelector(".moto");
const tracking = document.querySelector(".tracking");
const bars = document.querySelector(".bars");
const note = document.querySelector(".note");

window.addEventListener('load', () => {
    containerLoad.style.opacity = "0.2";
    moto.style.opacity = "0.2";
    tracking.style.opacity = "0.2";
    bars.style.opacity = "0.2";
    note.style.display = "block";  
})

/* cross button(Times) */
const times = document.querySelector(".times");
times.addEventListener('click', () => {
    note.style.display = "none";
    containerLoad.style.opacity = "1";
    moto.style.opacity = "1";
    tracking.style.opacity = "1";
    bars.style.opacity = "1";
})