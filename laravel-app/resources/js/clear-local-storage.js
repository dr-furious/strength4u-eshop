import { updateIndicator } from "./update-indicator";

// When the 'Thanks for your order' page is displayed, we clear the local storage to delete cart
document.addEventListener("DOMContentLoaded", () => {
    localStorage.clear();
    updateIndicator();
});
