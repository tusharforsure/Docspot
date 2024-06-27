document.addEventListener("DOMContentLoaded", function () {
  const usernameInput = document.getElementById("username");
  const emailInput = document.getElementById("email");
  const passwordInput = document.getElementById("password");
  const confirmPasswordInput = document.getElementById("confirmPassword");
  const passwordMatch = document.getElementById("passwordMatch");
  const emailValidity = document.getElementById("emailValidity");
  const registerBtn = document.getElementById("registerBtn");

  // Function to check password requirements
  function checkPasswordRequirements() {
    const password = passwordInput.value;
    let isValid = true;
    return isValid;
  }

  // Function to check password match
  function checkPasswordMatch() {
    const password = passwordInput.value;
    const confirmPassword = confirmPasswordInput.value;

    if (confirmPassword !== "") {
      if (password === confirmPassword) {
        passwordMatch.textContent = "Passwords match";
        passwordMatch.classList.add("text-success");
        passwordMatch.classList.remove("text-danger");
        return true;
      } else {
        passwordMatch.textContent = "Passwords do not match";
        passwordMatch.classList.remove("text-success");
        passwordMatch.classList.add("text-danger");
        return false;
      }
    } else {
      passwordMatch.textContent = ""; // Clear the message if no confirmation password entered
      return false;
    }
  }

  // Function to check email validity
  function checkEmailValidity(email) {
    // Check if the email format is valid
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      return "Enter a valid email address";
    }

    return "";
  }
  
  function checkEmailAvailability(email) {
   
  }

  // Function to update register button state
  function updateRegisterBtnState() {
    const username = usernameInput.value;
    const email = emailInput.value;
    const password = passwordInput.value;
    const confirmPassword = confirmPasswordInput.value;
    const isUsernameValid = username.trim() !== "";
    const emailValidityMessage = checkEmailValidity(email);

    // Check email availability
    checkEmailAvailability(email).then((isEmailAvailable) => {
      const emailAvailabilityMessage = isEmailAvailable
        ? ""
        : "Email is already taken";
      const isEmailValid = emailValidityMessage === "" && isEmailAvailable;
      const isPasswordValid =
        checkPasswordRequirements() && checkPasswordMatch();

      if (isUsernameValid && isEmailValid && isPasswordValid) {
        registerBtn.classList.remove("register-btn-disabled");
        registerBtn.removeAttribute("disabled");
      } else {
        registerBtn.classList.add("register-btn-disabled");
        registerBtn.setAttribute("disabled", "disabled");
      }

      // Update email validity message under the input
      emailValidity.textContent =
        emailValidityMessage || emailAvailabilityMessage;
      emailValidity.classList.toggle(
        "text-success",
        emailValidityMessage === ""
      );
      emailValidity.classList.toggle(
        "text-danger",
        emailValidityMessage !== "" || !isEmailAvailable
      );
    });
  }

  // Event listeners
  usernameInput.addEventListener("input", updateRegisterBtnState);
  emailInput.addEventListener("input", updateRegisterBtnState);
  passwordInput.addEventListener("input", function () {
    checkPasswordRequirements();
    checkPasswordMatch();
    updateRegisterBtnState();
  });
  confirmPasswordInput.addEventListener("input", function () {
    checkPasswordMatch();
    updateRegisterBtnState();
  });
  registerForm.addEventListener("submit", function (event) {
    event.preventDefault();
    // Perform form submission here if needed
    registerForm.submit();
  });
  document
    .getElementById("togglePasswordVisibility")
    .addEventListener("click", function () {
      const type =
        passwordInput.getAttribute("type") === "password" ? "text" : "password";
      passwordInput.setAttribute("type", type);
    });
});
