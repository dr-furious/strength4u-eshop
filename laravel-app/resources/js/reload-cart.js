import { loadCart } from "./cart-data-sender";

// When cart page is reloaded, fill it with correct cart data
document.addEventListener("DOMContentLoaded", () => {
    const navigation = performance.getEntriesByType("navigation")[0];

    if (navigation.type === "reload") {
        loadCart();
    }
});
