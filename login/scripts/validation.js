const form = document.querySelector("#form"),
      email = document.querySelector("#email"),
      password = document.querySelector("#password");


form.addEventListener("submit", e => {
    e.preventDefault();

    verifyInput();

});

const verifyInput = () => {
    const emailValue = email.value.trim(),
            passwordValue = password.value.trim();
    let emailValid = false,
        passwordValid = false;

    if (emailValue === "") {
        errorMessage(email, "Email cannot be blank");
    } else if (!validateEmail(emailValue)) {
        errorMessage(email, "Not a valid email");
    } else {
        successMessage(email);
        emailValid = true;
    }

    if (passwordValue === "") {
        errorMessage(password, "Password cannot be blank");
    } else {
        successMessage(password);
        passwordValid = true;
    }

    if (emailValid && passwordValid) {
        window.location = "../dashboard/index.php";
    }

}

const errorMessage = (input, message) => {
    const   inputContainer = input.parentElement;
    const   p = inputContainer.querySelector("p");

    //add success class
    inputContainer.className = "input-container error";
    p.innerText = message;
}

const successMessage = input => {
    const inputContainer = input.parentElement;

    //add success class
    inputContainer.className = "input-container success";
}


const validateEmail = (email) => {
    return String(email).toLowerCase().match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
  };