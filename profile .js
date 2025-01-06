// JavaScript for interactive hover and tooltip
const hoverImage = document.querySelector(".hover-img");
const tooltip = document.querySelector(".tooltip");

hoverImage.addEventListener("mouseover", () => {
    tooltip.style.display = "block";
});

hoverImage.addEventListener("mouseout", () => {
    tooltip.style.display = "none";
});
const deleteButton = document.getElementById("deleteButton");

deleteButton.addEventListener("click", function () {
    this.style.backgroundColor = "red";
    this.style.color = "white"; // لضمان وضوح النص بعد التغيير
    alert("Your account will be deleted!");
});
