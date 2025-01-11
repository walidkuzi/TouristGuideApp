<script>
    document.addEventListener("DOMContentLoaded", function () {
        const container = document.querySelector(".scrollable-container");
        const scrollLeftButton = document.querySelector(".scroll-left");
        const scrollRightButton = document.querySelector(".scroll-right");

        scrollLeftButton.addEventListener("click", () => {
            container.scrollBy({ left: -300, behavior: "smooth" });
        });

        scrollRightButton.addEventListener("click", () => {
            container.scrollBy({ left: 300, behavior: "smooth" });
        });

        container.addEventListener("scroll", () => {
            const maxScrollLeft = container.scrollWidth - container.clientWidth;
            scrollLeftButton.disabled = container.scrollLeft === 0;
            scrollRightButton.disabled = container.scrollLeft >= maxScrollLeft;
        });
    });
</script>
