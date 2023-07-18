const cardButton = document?.querySelector("#cardButton");
const paypalButton = document?.querySelector("#paypalButton");
const appleButton = document?.querySelector("#appleButton");
const cardSection = document?.querySelector("#card");
const paypalSection = document?.querySelector("#paypal");
const appleSection = document?.querySelector("#apple");
const cardInput = document?.querySelector("#card-number");
const cardHolder = document?.querySelector("#card-holder");
const cardCvc = document?.querySelector("#cvc");
const cardDate = document?.querySelector("#expiry-date");
const payButton = document?.querySelector("#payButton");
const form = document?.querySelector("#form");
console.log(form)

paypalButton?.addEventListener("click", () => {
  cardSection.classList.add("hidden");
  appleSection.classList.add("hidden");
  paypalSection.classList.remove("hidden");
  cardButton.classList.remove("active");
  appleButton.classList.remove("active");
  paypalButton.classList.add("active");
});

appleButton?.addEventListener("click", () => {
  cardSection.classList.add("hidden");
  appleSection.classList.remove("hidden");
  paypalSection.classList.add("hidden");
  cardButton.classList.remove("active");
  appleButton.classList.add("active");
  paypalButton.classList.remove("active");
});

cardButton?.addEventListener("click", () => {
  cardSection.classList.remove("hidden");
  appleSection.classList.add("hidden");
  paypalSection.classList.add("hidden");
  cardButton.classList.add("active");
  appleButton.classList.remove("active");
  paypalButton.classList.remove("active");
});

form.addEventListener("input", () => {
  if (
    cardInput.value.trim().length > 14 &&
    cardHolder.value.trim() !== "" &&
    cardCvc.value.trim().length === 3 &&
    cardDate.value.trim().length > 3
  ) {
    payButton.disabled = false;
    payButton.classList.remove("disabled");
  } else {
    payButton.disabled = true;
    payButton.classList.add("disabled");
  }
});
