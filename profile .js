// JavaScript for interactive hover and tooltip
const hoverImage = document.querySelector(".hover-img");
const tooltip = document.querySelector(".tooltip");

hoverImage.addEventListener("mouseover", () => {
    tooltip.style.display = "block";
});

hoverImage.addEventListener("mouseout", () => {
    tooltip.style.display = "none";
});
