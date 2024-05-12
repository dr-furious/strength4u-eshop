import { checkout } from "./cart-data-sender";

document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("checkout-btn").addEventListener("click", () => {
        checkout();
    });
});
