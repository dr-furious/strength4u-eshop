export function loadCart() {
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
    form.remove();
}
