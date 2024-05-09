document.addEventListener("DOMContentLoaded", () => {
    document
        .getElementById("flavours-select")
        .addEventListener("change", (event) => {
            const selectedOption =
                event.target.options[event.target.selectedIndex];
            const stockId = selectedOption.id; // the stock id
            window.location.href = `/shop/product-detail/${stockId}`;
        });

    document
        .getElementById("sizes-select")
        .addEventListener("change", (event) => {
            const sizeID = event.target.value;
            window.location.href += `/?size=${sizeID}`;
        });
});
