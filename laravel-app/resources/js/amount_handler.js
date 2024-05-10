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
        cart.splice(itemIndex, 1); // Remove the item
        localStorage.setItem("cart", JSON.stringify(cart));
    }
    updateIndicator();
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
});
