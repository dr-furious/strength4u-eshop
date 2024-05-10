import { addToCart } from "./add-to-cart";

document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".cm-add-to-card-btn").forEach((button) => {
        button.addEventListener("click", () => {
            const stockID = button.id;
            addToCart(parseInt(stockID), 1);
        });
    });
});
