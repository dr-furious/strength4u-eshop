function addToCart(stockId, quantity) {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    let cartItem = cart.find((item) => item.stockId === stockId);

    if (cartItem) {
        cartItem.quantity += quantity; // Increment quantity if item already exists
    } else {
        cart.push({ stockId, quantity }); // Add new item to cart
    }

    localStorage.setItem("cart", JSON.stringify(cart)); // Save updated cart back to local storage
}

// Updates the quantity of an item in the cart
function updateQuantity(stockId, delta) {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    const itemIndex = cart.findIndex((item) => item.stockId === stockId);

    if (itemIndex > -1) {
        cart[itemIndex].quantity += delta;
        if (cart[itemIndex].quantity <= 0) {
            cart.splice(itemIndex, 1); // Remove the item if quantity is 0 or less
        }
        localStorage.setItem("cart", JSON.stringify(cart));
    }
}

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
