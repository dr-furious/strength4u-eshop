console.log(product_stock);
document.addEventListener("DOMContentLoaded", function () {
    const button = document.getElementById("add-entry-btn");

    // Function to simulate button click
    function clickButton() {
        button.click();
    }

    for (let i = 0; i < stockCount; i++) {
        clickButton();
    }
});
