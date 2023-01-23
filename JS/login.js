const email = document.getElementById("email");
const password = document.getElementById("password");
const errorEmail = document.getElementById("errorEmail");
const errorPassword = document.getElementById("errorPassword");
const loginBtn = document.getElementById("signIn");

loginBtn.addEventListener("click", () => {
    var index = 0;
    if (email.value === "" || email.value == null) {
        index++;
        email.classList.add("is-invalid");
        errorEmail.innerHTML = "Adress email is required to log in your account";
    } else {
        email.classList.remove("is-invalid");
        email.classList.add("is-valid");
    }

    if (password.value === "" || password.value == null) {
        index++;
        password.classList.add("is-invalid");
        errorPassword.innerHTML = "Enter your password !!";
    } else {
        password.classList.remove("is-invalid");
        password.classList.add("is-valid");
    }
    if (index == 0) {
        loginBtn.type = "submit"
        loginBtn.submit();
    }
});