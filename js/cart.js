let price = document.querySelector(".price");
let quantity = document.querySelector(".quantity");
let total = document.querySelector(".total");

quantity.onchange = function () {
  getValue();
};

function getValue() {
  if (quantity.value <= 0) {
    quantity.value = 1;
    total.innerHTML = `${price.value * quantity.value} $ `;
  } else {
    total.innerHTML = `${price.value * quantity.value} $ `;
  }
}
total.innerHTML = `${price.value * quantity.value} $ `;
// disable price field to change
price.disabled = true;

// if click on button remove item from cart
let trash = document.querySelectorAll(".remove");
for (let i = 0; i < trash.length; i++) {
  trash[i].onclick = function () {
    this.parentElement.parentElement.remove();
  };
}
