// Adds the first row in admin UI when admin goes to the 'add new product' page
document.addEventListener("DOMContentLoaded", () => {
    // Add an event listener to the 'add entry' button
    const addEntryBtnNew = document.getElementById("add-entry-btn");
    // Simulate the click to add the first entry row
    addEntryBtnNew.dispatchEvent(new Event("click"));
});
