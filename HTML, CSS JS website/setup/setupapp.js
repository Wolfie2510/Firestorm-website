function signin_button_onclick(event) {
    username_input_box = document.getElementById("username-input-box");
    password_input_box = document.getElementById("password-input-box");
    
    signin(username_input_box.value, password_input_box.value);
}

function signin(username, password) {
    console.log("vet naai");
    const xhr = new XMLHttpRequest();
    const body = JSON.stringify({
        username: username,
        password: password
    });
    xhr.open("POST", "/setup/login.php");
    xhr.setRequestHeader("content-type", "application/json; charset=UTF-8");
    xhr.onload = function() {
        response = JSON.parse(xhr.responseText);
        console.log(response);
    };
    xhr.send(body);
}

document.addEventListener("DOMContentLoaded", function() {
    signin_button = document.getElementById("signin-button");
    signin_button.addEventListener("click", signin_button_onclick);
});
