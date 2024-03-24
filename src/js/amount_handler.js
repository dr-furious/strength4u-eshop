function decrement(e) {
  const container = e.target.closest(".custom-number-input");
  const input = container.querySelector('input[type="number"]');
  let value = Number(input.value);
  if (value > 0) {
    value--;
    input.value = value;
  }
}

function increment(e) {
  const container = e.target.closest(".custom-number-input");
  const input = container.querySelector('input[type="number"]');
  let value = Number(input.value);
  value++;
  input.value = value;
}

document.addEventListener("DOMContentLoaded", () => {
  const decrementButtons = document.querySelectorAll(
    'button[data-action="decrement"]',
  );
  const incrementButtons = document.querySelectorAll(
    'button[data-action="increment"]',
  );

  decrementButtons.forEach((btn) => {
    btn.addEventListener("click", decrement);
  });

  incrementButtons.forEach((btn) => {
    btn.addEventListener("click", increment);
  });
});
