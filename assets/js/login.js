const form = document.querySelector('form');
const emailFeild = form.querySelector('.email');
const emailInput = emailFeild.querySelector('input')
const passwordField = form.querySelector('.password');
const passwordInput = passwordField.querySelector('input');

form.onsubmit = (e) => {
    e.preventDefault();
    (emailInput.value == '') ? emailFeild.classList.add('shake', 'error') : checkEmail();
    (passwordInput.value == '') ? passwordField.classList.add('shake', 'error') : checkPassword();

    setTimeout(()=> {
        emailFeild.classList.remove('shake');
        passwordField.classList.remove('shake');
    }, 500);

    emailInput.onkeyup = () => {checkEmail();}
    passwordInput.onkeyup = () => {checkPassword();}

    function checkEmail(){
        let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if(!emailInput.value.match(pattern)){
          emailField.classList.add("error");
          emailField.classList.remove("valid");
          let errorTxt = emailField.querySelector(".error-txt");
          (eInput.value != "") ? errorTxt.innerText = "Enter a valid email address" : errorTxt.innerText = "Email can't be blank";
        }else{
          eField.classList.remove("error");
          eField.classList.add("valid");
        }
      }

    function checkPassword() {
        if(passwordInput.value == ""){
            passwordField.classList.add('error');
            passwordField.classList.remove('valid');
        }else{
            passwordField.classList.remove('error');
            passwordField.classList.add('valid');
        }
    }

    if(!usernameField.classList.contains('error') && !passwordField.classList.contains('error')) {
        window.location.href = form.getAttribute('action');
    }
}