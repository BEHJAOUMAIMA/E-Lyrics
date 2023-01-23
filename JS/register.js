// Register Validation
const form = document.getElementById('registerForm');
const userName = document.getElementById('userName');
const email = document.getElementById('email');
const password1 = document.getElementById('password');
const password2 = document.getElementById('confirmPass');
const registerBtn = document.querySelector('#registeBtn');
const errorName = document.getElementById('errorName');
const errorEmail = document.getElementById('errorEmail');
const errorPass1 = document.getElementById('errorPass1');
const errorPass2 = document.getElementById('errorPass2');
// const regexEmail = /^[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]{2,}$/;
// const regexPassword = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/;

registerBtn.addEventListener("click", () => {
    var index = 0;
    if (userName.value === "" || userName.value == null) {
        index++;
        userName.classList.add("is-invalid");
        errorName.innerHTML = "Name is required to create your account.";
    } else {
        userName.classList.remove("is-invalid")
        userName.classList.add("is-valid");
    }
    if (email.value === "" || email.value == null) {
        index++;
        email.classList.add("is-invalid");
        errorEmail.innerHTML = "Adress email is required to create your account.";
    } else {
        email.classList.remove("is-invalid")
        email.classList.add("is-valid");
    }

    if (password1.value === "" || password1.value == null) {
        index++;
        password1.classList.add("is-invalid");
        errorPass1.innerHTML = "Enter a valid password !!";
    } else {
        password1.classList.remove("is-invalid")
        password1.classList.add("is-valid");
    }
    if ((password2.value === "" || password2.value == null) || password2.value !== password1.value) {
        index++;
        password2.classList.add("is-invalid");
        errorPass2.innerHTML = "Passwords doesn't match !!";
    } else {
        errorPass2.classList.remove("is-invalid")
        errorPass2.classList.add("is-valid");
    }
    if (index == 0) {
        registerBtn.type = "submit"
        registerBtn.submit();
    }

});