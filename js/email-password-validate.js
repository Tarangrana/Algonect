document.addEventListener("DOMContentLoaded", function () {
  const emailInput = document.getElementById("email");
  const password = document.getElementById("password");
  const confirmPassword = document.getElementById("confirm_password");
  const emailWarning = document.getElementById("emailWarning");
  const passwordWarning = document.getElementById("passwordWarning");
  const submitBtn = document.querySelector('button[type="submit"]');

  function validateForm() {
    const emailValid = emailInput.value.trim().endsWith("@algomau.ca");
    const passwordsMatch = password.value === confirmPassword.value;

    emailWarning.classList.toggle(
      "d-none",
      emailValid || emailInput.value.length === 0
    );
    passwordWarning.classList.toggle(
      "d-none",
      passwordsMatch || confirmPassword.value.length === 0
    );

    submitBtn.disabled = !(emailValid && passwordsMatch);
  }

  emailInput.addEventListener("input", validateForm);
  password.addEventListener("input", validateForm);
  confirmPassword.addEventListener("input", validateForm);
});
