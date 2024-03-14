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

function toggleOnlinePayDiv() {
  const radioButtonCashOnD = document.getElementById("radioButtonCashOnD");
  const radioButtonBankT = document.getElementById("radioButtonBankT");
  const div = document.getElementById("online_payment");
  const input_card_n = document.getElementById("card_n");
  const input_exp_date = document.getElementById("exp_date");
  const input_cvc = document.getElementById("cvc");

  // Check if the specific radio button is selected
  if (radioButtonCashOnD.checked || radioButtonBankT.checked) {
    div.style.display = "none"; // Hide the div
    input_card_n.required = false; // card number is not req
    input_exp_date.required = false;
    input_cvc.required = false;
  } else {
    div.style.display = "block"; // Show the div
    input_card_n.required = true; // card number is req
    input_exp_date.required = true;
    input_cvc.required = true;
  }

  if (radioButtonCashOnD.checked) {
    fee = 1.5;
    updateElementValue(subtotal + fee, "subtotal");
    updateElementValue(postage + subtotal + fee, "total");
  } else {
    fee = 0;
    updateElementValue(subtotal + fee, "subtotal");
    updateElementValue(postage + subtotal + fee, "total");
  }
}

function toggleShippingDiv() {
  const radioButtonDHL = document.getElementById("radioButtonDHL");
  const radioButtonSPS = document.getElementById("radioButtonSPS");
  const toggleShippingDiv = document.getElementById("toggleShippingDiv");

  if (radioButtonDHL.checked) {
    postage = costDHL;
    updateElementValue(postage, "postage");
    updateElementValue(postage + subtotal + fee, "total");
  } else if (radioButtonSPS.checked) {
    postage = costSPS;
    updateElementValue(postage, "postage");
    updateElementValue(postage + subtotal + fee, "total");
  } else {
    postage = costPacketa;
    updateElementValue(postage, "postage");
    updateElementValue(postage + subtotal + fee, "total");
  }
}

function updateElementValue(newSubtotal, element) {
  document.getElementById(element).textContent = `${newSubtotal}€`;
}

//===================shipping===================
let costDHL = 5.5;
let costSPS = 7.5;
let costPacketa = 6.5;

document
  .getElementById("radioButtonDHL")
  .addEventListener("click", toggleShippingDiv);
document
  .getElementById("radioButtonSPS")
  .addEventListener("click", toggleShippingDiv);
document
  .getElementById("radioButtonPacketa")
  .addEventListener("click", toggleShippingDiv);

//===================summary===================
let fee = 0;
let subtotal = 200;
let postage = 5.5;
updateElementValue(subtotal, "subtotal");
updateElementValue(postage, "postage");
updateElementValue(postage + subtotal + fee, "total");

document
  .getElementById("radioButtonCashOnD")
  .addEventListener("click", toggleOnlinePayDiv);
document
  .getElementById("radioButtonOnlineP")
  .addEventListener("click", toggleOnlinePayDiv);
document
  .getElementById("radioButtonBankT")
  .addEventListener("click", toggleOnlinePayDiv);
