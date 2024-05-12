import { updateIndicator } from "./update-indicator";

// Updates the quantity of an item in the cart
function updateQuantity(stockId, delta) {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    const itemIndex = cart.findIndex((item) => item.stockId === stockId);

    if (itemIndex > -1) {
        if (cart[itemIndex].quantity + delta < 1) {
            return;
        }
        cart[itemIndex].quantity += delta;
        if (cart[itemIndex].quantity <= 0) {
            cart.splice(itemIndex, 1); // Remove the item if quantity is 0 or less
        }
        localStorage.setItem("cart", JSON.stringify(cart));
    }
    updateIndicator();
    updatePrice();
}

// Deletes the item from the cart
function removeFromCart(stockId) {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    const itemIndex = cart.findIndex((item) => item.stockId === stockId);

    if (itemIndex > -1) {
        cart[itemIndex].quantity = 0;
        let cartRow = document.getElementById("cart-row-" + stockId);
        cartRow.classList.add("hidden");
        cartRow.remove(); // remove cart row from DOM
        cart.splice(itemIndex, 1); // Remove the item from the local storage
        localStorage.setItem("cart", JSON.stringify(cart));
    }
    updateIndicator();
    updatePrice();
}

function updatePrice() {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    let subtotal = document.getElementById("subtotal");
    let sum = 0;

    cart.forEach((item) => {
        const stockID = item.stockId;
        const quantity = item.quantity;
        let unitPriceReal = document.getElementById(
            "real-unit-price-" + stockID,
        );
        let unitPriceDisc = document.getElementById(
            "disc-unit-price-" + stockID,
        );
        let totalPriceReal = document.getElementById(
            "real-total-price-" + stockID,
        );
        let totalPriceDisc = document.getElementById(
            "disc-total-price-" + stockID,
        );

        // Parse unit prices from textContent, removing the $ sign and converting to float
        const realPrice = parseFloat(
            unitPriceReal.textContent.replace("$", ""),
        );
        // Calculate total prices
        const totalRealPrice = realPrice * quantity;

        // Update the total price elements with dollar sign prefixed
        totalPriceReal.textContent = `$${totalRealPrice.toFixed(2)}`; // Formats the number to 2 decimal places

        if (unitPriceDisc) {
            const discountedPrice = parseFloat(
                unitPriceDisc.textContent.replace("$", ""),
            );
            const totalDiscountedPrice = discountedPrice * quantity;
            totalPriceDisc.textContent = `$${totalDiscountedPrice.toFixed(2)}`; // Formats the number to 2 decimal places
            sum += totalDiscountedPrice;
        } else {
            sum += totalRealPrice;
        }
    });
    subtotal.textContent = `$${sum.toFixed(2)}`;
}

function decrement(e) {
    const container = e.target.closest(".custom-number-input");
    const input = container.querySelector('input[type="number"]');
    let value = Number(input.value);
    if (value > 1) {
        value--;
        input.value = value;
    }
}

function increment(e) {
    const container = e.target.closest(".custom-number-input");
    const input = container.querySelector('input[type="number"]');
    let value = Number(input.value);
    value++;
    input.value = value;
}

document.addEventListener("DOMContentLoaded", () => {
    const decrementButtons = document.querySelectorAll(
        'button[data-action="decrement"]',
    );
    const incrementButtons = document.querySelectorAll(
        'button[data-action="increment"]',
    );

    const deleteButtons = document.querySelectorAll(".cm-delete-btn");

    decrementButtons.forEach((btn) => {
        btn.addEventListener("click", (event) => {
            decrement(event);
            if (btn.classList.contains("cm-cart-dec-btn")) {
                updateQuantity(parseInt(btn.id.split("-").pop()), -1);
            }
        });
    });

    incrementButtons.forEach((btn) => {
        btn.addEventListener("click", (event) => {
            increment(event);
            if (btn.classList.contains("cm-cart-inc-btn")) {
                updateQuantity(parseInt(btn.id.split("-").pop()), 1);
            }
        });
    });

    deleteButtons.forEach((btn) => {
        btn.addEventListener("click", () => {
            removeFromCart(parseInt(btn.id.split("-").pop()));
        });
    });

    updatePrice();
});
