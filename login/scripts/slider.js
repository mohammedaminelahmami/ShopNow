const slidMov = document.querySelector(".slid-mov");
const leftArrow = document.querySelector(".fa-arrow-left");
const rightArrow = document.querySelector(".fa-arrow-right");

let slidIndex = 0;

leftArrow.addEventListener("click", () => {
    slidIndex = (slidIndex > 0) ? slidIndex - 1 : 0;
    slidMov.style.transform = "translate(" + slidIndex * -25 + "%)";
});
rightArrow.addEventListener("click", () => {
    slidIndex = (slidIndex < 3) ? slidIndex + 1 : 3;
    slidMov.style.transform = "translate(" + slidIndex * -25 + "%)";
});
