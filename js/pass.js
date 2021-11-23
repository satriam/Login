var password = document.getElementById("password"),
  confirm_password = document.getElementById("confirm_password"),
  error_message = document.getElementById("errorMsg"),
  login_button = document.getElementById("loginBtn");

login_button.addEventListener("click", function () {
  if (password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Password Tidak Sama");
    password.classList.add("border-danger");
    confirm_password.classList.add("border-danger");
    error_message.innerHTML = "Password anda tidak sama";
  } else {
    confirm_password.setCustomValidity("");
  }
});
