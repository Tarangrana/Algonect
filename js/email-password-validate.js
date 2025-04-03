// This script validates the email and password fields in a form
// It ensures the email ends with "@algomau.ca" and that the password and confirm password fields match

document.addEventListener("DOMContentLoaded", function () {
  // Get the form elements
  const emailInput = document.getElementById("email");
  const password = document.getElementById("password");
  const confirmPassword = document.getElementById("confirm_password");
  const emailWarning = document.getElementById("emailWarning");
  const passwordWarning = document.getElementById("passwordWarning");
  const submitBtn = document.querySelector('button[type="submit"]');

  // Initially disable the submit button
  function validateForm() {
    const emailValid = emailInput.value.trim().endsWith("@algomau.ca");
    const passwordsMatch = password.value === confirmPassword.value;

    // Toggle the warning messages based on validation
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

  // Add event listeners to the input fields
  // Any time the user types in any field → validateForm() runs automatically
  emailInput.addEventListener("input", validateForm);
  password.addEventListener("input", validateForm);
  confirmPassword.addEventListener("input", validateForm);
});
