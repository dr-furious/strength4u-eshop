function formatCardNumber() {
  const input = document.getElementById("card_n");
  let cardNumber = input.value.split(" ").join(""); // Remove existing spaces

  // Keep only digits in the card number
  cardNumber = cardNumber.replace(/\D/g, "");

  // Add spaces every 4 digits
  let newCardNumber = "";
  for (let i = 0; i < cardNumber.length; i++) {
    if (i > 0 && i % 4 === 0) {
      newCardNumber += " ";
    }
    newCardNumber += cardNumber[i];
  }

  // Update the input field with the formatted value
  input.value = newCardNumber;
}

function formatExpDate() {
  const input = document.getElementById("exp_date");
  let cardNumber = input.value.split(" ").join(""); // Remove existing spaces

  // Keep only digits in the card number
  cardNumber = cardNumber.replace(/\D/g, "");

  // Add / every 2 digits
  let newCardNumber = "";
  for (let i = 0; i < cardNumber.length; i++) {
    if (i > 0 && i % 2 === 0) {
      newCardNumber += "/";
    }
    newCardNumber += cardNumber[i];
  }

  // Update the input field with the formatted value
  input.value = newCardNumber;
}

function numbers_only_input(element_id) {
  const input = document.getElementById(`${element_id}`);
  let cardNumber = input.value.split(" ").join(""); // Remove existing spaces

  // Keep only digits in the card number
  cardNumber = cardNumber.replace(/\D/g, "");
  // Update the input field with the formatted value
  input.value = cardNumber;
}
