import { updateIndicator } from "./update-indicator";

document.addEventListener("DOMContentLoaded", () => {
    localStorage.clear();
    updateIndicator();
});
