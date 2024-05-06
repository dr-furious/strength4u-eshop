function setupFilterToggle(buttonId, filterListId) {
    const button = document.getElementById(buttonId);
    const filterList = document.getElementById(filterListId);
    const chevronIcon = button.querySelector(".cm-filter-chevron-icon");
    const indicator = filterList.querySelector(".cm-scroll-indicator");

    button.addEventListener("click", () => {
        filterList.classList.toggle("max-h-0");
        filterList.classList.toggle("max-h-80");
        let remSize = parseFloat(getComputedStyle(button).fontSize); // Get the rem size
        if (
            indicator != null &&
            indicator.classList.contains("hidden") &&
            filterList.classList.contains("max-h-80") &&
            filterList.scrollHeight > 20 * remSize
        ) {
            indicator.classList.remove("hidden"); // Show scroll indicator when list has height greater then 20rem (max-h-80 in tailwind)
            filterList.scrollTop = 0; // Scroll the list to its top
        } else if (
            filterList.classList.contains("max-h-0") &&
            indicator != null &&
            !indicator.classList.contains("hidden")
        ) {
            indicator.classList.add("hidden");
        }

        if (chevronIcon) {
            chevronIcon.classList.toggle("rotate-90"); // Rotate chevron, if exists
        }
    });
}

function handleScroll(filterListId) {
    const filterList = document.getElementById(filterListId);
    const indicator = filterList.querySelector(".cm-scroll-indicator");

    const checkScroll = (keepHidden) => {
        if (indicator.classList.contains("hidden") && keepHidden === true) {
            return;
        }
        if (
            filterList.scrollTop + filterList.offsetHeight >=
            filterList.scrollHeight
        ) {
            // Check if the list has been scrolled to the bottom
            indicator.classList.add("hidden"); // Hide gradient
        } else {
            indicator.classList.remove("hidden"); // Show gradient
        }
    };

    filterList.addEventListener("scroll", (event) => checkScroll(event, false));
    checkScroll(true); // Initialize indicator state based on current scroll
}

function updatePriceValue(value) {
    document.getElementById("currentPrice").textContent = value;
}

document.addEventListener("DOMContentLoaded", () => {
    // Filters
    let priceRange = document.getElementById("priceRange");
    priceRange.addEventListener("input", () => {
        updatePriceValue(priceRange.value);
    });

    // Ordering
    const orderingButtons = document.querySelectorAll(".cm-order-btn");

    orderingButtons.forEach((btn) => {
        btn.addEventListener("click", (event) => {
            const clickedBtn = event.target;
            // Add "text-slate-700" class to the clicked button if it doesn't already have it
            if (!clickedBtn.classList.contains("text-slate-700")) {
                clickedBtn.classList.add("text-slate-700");
            }

            // Remove "text-slate-700" class from all other buttons
            orderingButtons.forEach((element) => {
                if (element !== clickedBtn) {
                    element.classList.remove("text-slate-700");
                }
            });
        });
    });

    const displayOrderingBtn = document.getElementById("display-ordering-btn");
    const hideOrderingBtn = document.getElementById("hide-ordering-btn");
    const orderingMenu = document.getElementById("ordering-menu");

    const displayFilterBtn = document.getElementById("display-filter-btn");
    const hideFilterBtn = document.getElementById("hide-filter-btn");
    const filterMenu = document.getElementById("filter-menu");

    displayOrderingBtn.addEventListener("click", () => {
        orderingMenu.classList.remove("translate-x-full");
    });
    hideOrderingBtn.addEventListener("click", () => {
        orderingMenu.classList.add("translate-x-full");
    });

    displayFilterBtn.addEventListener("click", () => {
        filterMenu.classList.remove("translate-x-full");
    });
    hideFilterBtn.addEventListener("click", () => {
        filterMenu.classList.add("translate-x-full");
    });

    setupFilterToggle("flavour-btn", "flavour-list");
    setupFilterToggle("brand-btn", "brand-list");
    setupFilterToggle("category-btn", "category-list");
    setupFilterToggle("price-btn", "price-list");

    handleScroll("flavour-list");
    handleScroll("brand-list");
    handleScroll("category-list");
});
