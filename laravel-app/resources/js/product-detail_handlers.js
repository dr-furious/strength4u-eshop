import { addToCart } from "./add-to-cart";

document.addEventListener("DOMContentLoaded", () => {
    // Handle refresh when flavours-select dropdown value is changed
    // (user picks a new flavour)
    document
        .getElementById("flavours-select")
        .addEventListener("change", (event) => {
            const selectedOption =
                event.target.options[event.target.selectedIndex];
            const stockId = selectedOption.id; // the stock id
            window.location.href = `/shop/product-detail/${stockId}`;
        });

    // Handle refresh when sizes-select dropdown value is changed
    // (user picks a new size)
    document
        .getElementById("sizes-select")
        .addEventListener("change", (event) => {
            const sizeID = event.target.value;
            window.location.href += `/?size=${sizeID}`;
        });

    document.getElementById("add-to-cart-btn").addEventListener("click", () => {
        const stock_id = parseInt(window.location.pathname.split("/").pop()); // get the stock id from url
        const quantity = parseInt(
            document.getElementById("quantity-input").value,
        );

        if (quantity === 0) {
            return;
        }
        addToCart(stock_id, quantity);
    });
});
