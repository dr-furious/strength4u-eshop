import { checkout } from "./cart-data-sender";

// Handle checkout (transition from cart page to the order summary page where user fills his info)
document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("checkout-btn").addEventListener("click", () => {
        checkout();
    });
});
