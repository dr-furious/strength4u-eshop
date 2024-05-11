document.addEventListener("DOMContentLoaded", () => {
    const leftButton = document.getElementById("left-arrow-btn");
    const rightButton = document.getElementById("right-arrow-btn");
    const leftMobileButton = document.getElementById("left-mobile-btn");
    const rightMobileButton = document.getElementById("right-mobile-btn");
    const carousel = document.getElementById("carousel-container");
    const carouselItems = carousel.querySelectorAll(".cm-carousel-item");
    const circleNavBtns = document.querySelectorAll(".cm-circle-btn");

    // The initial position is the first item
    let currentItemIndex = 0;

    // Calculate total width of a carousel item
    // Assuming all items have the same width and including margin, padding, etc., if any
    const itemWidth = carouselItems[0].clientWidth;

    circleNavBtns.forEach((button, index) => {
        button.addEventListener("click", () => {
            // Calculate distance to scroll
            const scrollAmount =
                itemWidth * index - itemWidth * currentItemIndex;
            carousel.scrollBy({ left: scrollAmount, behavior: "smooth" });
            currentItemIndex = index; // Update the current item index

            // Update button states
            updateButtonStates(index);
        });
    });

    function updateButtonStates(activeIndex) {
        circleNavBtns.forEach((btn, index) => {
            if (index === activeIndex) {
                btn.classList.add("cm-circle-btn__checked");
                btn.classList.remove("border-slate-500");
            } else {
                btn.classList.remove("cm-circle-btn__checked");
                btn.classList.add("border-slate-500");
            }
        });
    }

    [leftButton, leftMobileButton].forEach((button) =>
        button.addEventListener("click", () => {
            if (currentItemIndex > 0) {
                currentItemIndex -= 1; // Move to previous item
                carousel.scrollBy({ left: -itemWidth, behavior: "smooth" });
                updateButtonStates(currentItemIndex);
            }
        }),
    );

    [rightButton, rightMobileButton].forEach((button) => {
        button.addEventListener("click", () => {
            if (currentItemIndex < carouselItems.length - 1) {
                currentItemIndex += 1; // Move to next item
                carousel.scrollBy({ left: itemWidth, behavior: "smooth" });
                updateButtonStates(currentItemIndex);
            }
        });
    });

    // Trigger the 'click' event on the first circle button
    circleNavBtns[0].dispatchEvent(new Event("click"));
});
