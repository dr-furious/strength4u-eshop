import { loadCart } from "./cart-data-sender";

document.addEventListener("DOMContentLoaded", () => {
    const navigation = performance.getEntriesByType("navigation")[0];

    if (navigation.type === "reload") {
        loadCart();
    }
});
