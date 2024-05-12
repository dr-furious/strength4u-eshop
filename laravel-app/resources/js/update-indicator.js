// Updates indicator that shows how many items are in the cart (in the menu)
export function updateIndicator() {
    let stockQuantity = 0;
    const cart = JSON.parse(localStorage.getItem("cart")) || [];
    cart.forEach((element) => {
        stockQuantity += element["quantity"];
    });

    const indicator = document.getElementById("cart-items-count");
    indicator.innerHTML = stockQuantity > 9 ? "9+" : stockQuantity; // Update the innerHTML with new stock quantity

    // Toggle visibility based on stockQuantity
    if (stockQuantity === 0) {
        if (!indicator.classList.contains("hidden")) {
            indicator.classList.remove("flex");
            indicator.classList.add("hidden");
        }
    } else {
        if (indicator.classList.contains("hidden")) {
            indicator.classList.add("flex");
            indicator.classList.remove("hidden");
        }
    }
}

document.addEventListener("DOMContentLoaded", updateIndicator);
