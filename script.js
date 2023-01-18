// dynamic Form
const addMoreBtn = document.querySelector('#addMore')
const anotherDiv = document.querySelector('.another-div');
const  modal = document.querySelector('.modal-body');


addMoreBtn.addEventListener('click', (e)=>{
    anotherDiv.append(modal.cloneNode(true));
})
// Register Validation

const form = document.getElementById('register');
const userName = document.getElementById('userName');
const email = document.getElementById('email');
const password1 = document.getElementById('password');
const password2 = document.getElementById('confirmPass');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');
    errorDisplay.innerText = message;

    inputControl.classList.add('error');
    inputControl.classList.remove('success');
}

const setSuccess = element =>{
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');
    errorDisplay.innerText = '';

    inputControl.classList.add('success');
    inputControl.classList.remove('error');
}
const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
const validateInputs = () => {
    const userNameValue = userName.value.trim();
    const emailValue = email.value.trim();
    const password1Value = password1.value.trim();
    const password2Value = password2.value.trim();

    if (userNameValue === '') {
        setError(userName, "UserName is required !");
    }else if (userNameValue.length<3) {
        setError(userName, "Enter a valid name !")
    }else {
        setSuccess(userName);
    }

    if(emailValue === '') {
        setError(email, 'Email is required !');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address !');
    } else {
        setSuccess(email);
    }

    if(password1Value === '') {
        setError(password1, 'Password is required !');
    } else if (password1Value.length < 8 ) {
        setError(password1, 'Password must be at least 8 character.')
    } else {
        setSuccess(password1);
    }

    if(password2Value === '') {
        setError(password2, 'Please confirm your password !');
    } else if (password2Value !== password1Value) {
        setError(password2, "Passwords doesn't match !");
    } else {
        setSuccess(password2);
    }
}

// login validation 