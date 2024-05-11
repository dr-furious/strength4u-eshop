import { loadCart } from "./load-card";

document.addEventListener("DOMContentLoaded", () => {
    const navigation = performance.getEntriesByType("navigation")[0];

    if (navigation.type === "reload") {
        loadCart();
    }
});
