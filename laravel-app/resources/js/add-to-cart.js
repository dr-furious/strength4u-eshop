import { updateIndicator } from "./update-indicator";

// Adds the stockID (product of specific flavour and size) and its quantity to the local storage 'cart' object
export function addToCart(stockId, quantity) {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    let cartItem = cart.find((item) => item.stockId === stockId);

    if (cartItem) {
        cartItem.quantity += quantity; // Increment quantity if item already exists
    } else {
        cart.push({ stockId, quantity }); // Add new item to cart
    }

    localStorage.setItem("cart", JSON.stringify(cart)); // Save updated cart back to local storage
    updateIndicator();
}
