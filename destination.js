document.addEventListener("DOMContentLoaded", () => {
    const fadeElements = document.querySelectorAll(".fade-in");

    // Intersection Observer to trigger animations when in view
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                }
            });
        },
        {
            threshold: 0.1,
        }
    );

    fadeElements.forEach((el) => observer.observe(el));
});
const hoverImg = document.querySelector(".hover-img");
const tooltip = document.querySelector(".tooltip");

hoverImg.addEventListener("mouseover", () => {
    tooltip.style.display = "block";
});

hoverImg.addEventListener("mouseout", () => {
    tooltip.style.display = "none";
});
// تحديد جميع العناصر التي تحتوي الصور والنصوص
const containers = document.querySelectorAll(".interactive-container");

// إضافة أحداث التمرير على كل عنصر
containers.forEach((container) => {
    const imageText = container.querySelector(".image-text");
    const hoverImage = container.querySelector(".hover-img");

    container.addEventListener("mouseenter", () => {
        // تغيير لون النص عند التمرير
        imageText.style.color = "yellow";
        // تكبير الصورة (اختياري)
        hoverImage.style.transform = "scale(1.1)";
    });

    container.addEventListener("mouseleave", () => {
        // إعادة النص إلى لونه الأصلي
        imageText.style.color = "black";
        // إعادة الصورة إلى حجمها الطبيعي
        hoverImage.style.transform = "scale(1)";
    });
});
