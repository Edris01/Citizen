const form = document.querySelector('form');
const usernameField = form.querySelector('.username');
const usernameInput = usernameField.querySelector('input');
const emailFeild = form.querySelector('.email');
const emailInput = emailFeild.querySelector('input')
const passwordField = form.querySelector('.password');
const passwordInput = passwordField.querySelector('input');
const passwordField2 = form.querySelector('.confirm_password');
const passwordInput2 = cPasswordField2.querySelector('input')

form.onsubmit = (e) => {
    e.preventDefault();
    (usernameInput.value == '') ?  usernameField.classList.add('shake', 'error') : checkUsername();
    (emailInput.value == '') ? emailFeild.classList.add('shake', 'error') : checkEmail();
    (passwordInput.value == '') ? passwordField.classList.add('shake', 'error') : checkPassword();
    (passwordInput2.value == '') ? cPasswordField.classList.add('shake', 'error') : checkPassword2();

    setTimeout(()=> {
        usernameField.classList.remove('shake');
        emailFeild.classList.remove('shake');
        passwordField.classList.remove('shake');
        passwordField2.classList.remove('shake');
    }, 500);

    usernameInput.onkeyup = () => {checkUsername();}
    emailInput.onkeyup = () => {checkEmail();}
    passwordInput.onkeyup = () => {checkPassword();}
    cPasswordInput.onkeyup = () => {checkPassword2()}

    function checkUsername() {
        let = pattern = /^[a-zA-Z0-9]*/
        if(!usernameInput.value.match(pattern)) {
            usernameField.classList.add('error');
            usernameField.classList.remove('valid');
            let errorTxt = usernameField.querySelector('.error-txt');
            (usernameInput.value != "") ? errorTxt.innerText = "Enter a valid username" : errorTxt.innerText = "Username is Required";       
        }else{
            usernameField.classList.remove('shake');
            usernameField.classList.add('valid');
        }
    }

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
    
    function checkPassword2() {
        if(passwordInput.value !== passwordInput2 ) {
            passwordField.classList.add("error");
            passwordField2.classList.add('error');
            passwordField.classList.remove('valid');
            passwordField2.classList.add('valid');
            let errorTxt = passwordField.querySelector(".error-txt");
          (eInput.value != "") ? errorTxt.innerText = "Enter a valid email address" : errorTxt.innerText = "Email can't be blank";
        } else {
            passwordField.classList.add('valid');
            passwordField2.classList.add('valid');
            passwordField.classList.remove('error');
            passwordField2.classList.remove('error');
        }
    }

    if(!usernameField.classList.contains('error') && !passwordField.classList.contains('error')) {
        window.location.href = form.getAttribute('action');
    }
}