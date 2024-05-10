function loadCart() {
    const cartData = localStorage.getItem("cart");

    const form = document.createElement("form");
    form.method = "POST";
    form.action = "/shop/cart"; // URL to send data to
    form.style.display = "none";

    // CSRF Token for Laravel applications
    const token = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");
    const csrf = document.createElement("input");
    csrf.type = "hidden";
    csrf.name = "_token";
    csrf.value = token;
    form.appendChild(csrf);

    // Cart data as a hidden input
    const input = document.createElement("input");
    input.type = "hidden";
    input.name = "cart";
    input.value = cartData; // cartData is a JSON string
    form.appendChild(input);

    // Append the form to the body and submit it
    document.body.appendChild(form);
    form.submit();
    console.log("sent");
}

document.addEventListener("DOMContentLoaded", () => {
    const userBtn = document.getElementById("user-btn"); // get user icon button
    const userNav = document.getElementById("user-nav"); // get user-nav, which is hidden by default
    const itemsCountIndicator = document.getElementById("cart-items-count");

    userBtn.addEventListener("click", () => {
        userNav.classList.toggle("hidden"); // display and hide the user-nav
    });

    const showMobileNavBtn = document.getElementById("show-mobile-nav-btn");
    const hideMobileNavBtn = document.getElementById("hide-mobile-nav-btn");
    const mobileNav = document.getElementById("mobile-nav");
    const showNavLi = document.getElementById("show-nav-li");
    const hideNavLi = document.getElementById("hide-nav-li");

    showMobileNavBtn.addEventListener("click", () => {
        showNavLi.classList.add("hidden");
        mobileNav.classList.toggle("max-h-0");
        mobileNav.classList.toggle("max-h-[20rem]");
        hideNavLi.classList.remove("hidden");
    });

    hideMobileNavBtn.addEventListener("click", () => {
        hideNavLi.classList.add("hidden");
        mobileNav.classList.toggle("max-h-0");
        mobileNav.classList.toggle("max-h-[20rem]");
        showNavLi.classList.remove("hidden");
    });

    document
        .getElementById("display-shopping-cart-btn")
        .addEventListener("click", () => {
            loadCart();
        });
});
