function validateSignIn() {
    if(validateEmail()
    && validatePassword() === true) {
        var send = true;
    }
    else {
        send = false;
    }
    if (send == false) {
        if (event.preventDefault) {
            event.preventDefault();
        } else {
            event.returnValue = false;
        }
    }
    return send;
}
function validateEmail() {
    var x = document.getElementById("login").value;
    if (x === null || x === "") {
        document.getElementById("emailmsg").style.display = "";
        return false;
    }
    else if (x.indexOf('@') === -1) {
    document.getElementById("emailmsg").style.display = "";
        return false;
    }
    else {
        document.getElementById("login").style.display = "none";
        return true;
    }
}
function validatePassword() {
    var x = document.getElementById("password").value;
    if (x === null || x === "") {
        document.getElementById("passmsg").style.display = "";
        return false;
    }
    else {
        document.getElementById("passmsg").style.display = "none";
        return true;
    }
}
function validateRegister() {
    var valid = true;
        valid = valid && validateFirstName();
        valid = valid && validateLastName();
        valid = valid && validatePhone();
        valid = valid && validateRegEmail();
        valid = valid && validateRegPassword();
        valid = valid && validateConPassword();
        valid = valid && validateDog();
        valid = valid && validateBreed();
    if (valid === false) {
            event.preventDefault();
    }
        return valid;
}
function validateFirstName() {
    var x = document.getElementById("fname").value;
    if (x === null || x === "") {
        document.getElementById("firstmsg").style.display = "";
        return false;
    }
    else {
        document.getElementById("firstmsg").style.display = "none";
        return true;
    }
}
<<<<<<< HEAD
=======
function focusFirstName() {
    var x = document.getElementById("fname").value;
    if (x === null || x === "") {
        document.getElementById("firstmsg").style.display = "none";
    }
}
>>>>>>> 32e3773d0e15f3dfe51b27e7699be649a0aad389
function validateLastName() {
    var x = document.getElementById("lname").value;
    if (x === null || x === "") {
        document.getElementById("lastmsg").style.display = "";
        return false;
    }
    else {
        document.getElementById("lastmsg").style.display = "none";
        return true;
    }
}
<<<<<<< HEAD
=======
function focusLastName() {
    var x = document.getElementById("lname").value;
    if (x === null || x === "") {
        document.getElementById("lastmsg").style.display = "none";
    }
}
>>>>>>> 32e3773d0e15f3dfe51b27e7699be649a0aad389
function validatePhone() {
    var x = document.getElementById("phone").value;
    if (x === null || x === "") {
        document.getElementById("phonemsg").style.display = "";
        return false;
    }
    else if (/\d{10}/.test(x) === false) {
    document.getElementById("phonemsg").style.display = "";
        return false;
    }
    else {
        document.getElementById("phonemsg").style.display = "none";
        return true;
    }
}
function validateRegEmail() {
    var x = document.getElementById("login").value;
    if (x === null || x === "") {
        document.getElementById("emailregmsg").style.display = "";
        return false;
    }
    else if (x.indexOf('@') === -1) {
    document.getElementById("emailregmsg").style.display = "";
        return false;
    }
    else {
        document.getElementById("emailregmsg").style.display = "none";
        return true;
    }
}
<<<<<<< HEAD
=======
function focusRegEmail() {
    var x = document.getElementById("login").value;
    if (x === null || x === "") {
        document.getElementById("emailregmsg").style.display = "none";
    }
}
>>>>>>> 32e3773d0e15f3dfe51b27e7699be649a0aad389
function validateRegPassword() {
    var x = document.getElementById("password").value;
    if (x === null || x === "") {
        document.getElementById("passregmsg").style.display = "";
        return false;
    }
    else {
        document.getElementById("passregmsg").style.display = "none";
        return true;
    }
}
<<<<<<< HEAD
=======
function focusRegPassword() {
    var x = document.getElementById("password").value;
    if (x === null || x === "") {
        document.getElementById("passregmsg").style.display = "none";
    }
}
>>>>>>> 32e3773d0e15f3dfe51b27e7699be649a0aad389
function validateConPassword() {
    var x = document.getElementById("cpassword").value;
    var y = document.getElementById("pass").value;
    if (x === null || x === "") {
        document.getElementById("passconmsg").style.display = "";
        return false;
    }
    else if (x!== y) {
    document.getElementById("passconmsg").style.display = "";
        return false;
    }
    else {
        document.getElementById("passconmsg").style.display = "none";
        return true;
    }
}
<<<<<<< HEAD
=======
function focusConPassword() {
    var x = document.getElementById("cpassword").value;
    if (x === null || x === "") {
        document.getElementById("passconmsg").style.display = "none";
    }
}
>>>>>>> 32e3773d0e15f3dfe51b27e7699be649a0aad389
function validateDog() {
    var x = document.getElementById("dogname").value;
    if (x === null || x === "") {
        document.getElementById("dogmsg").style.display = "";
        return false;
    }
    else {
        document.getElementById("dogmsg").style.display = "none";
        return true;
    }
}
function validateBreed() {
    var x = document.getElementById("dogbreed").value;
    if (x === null || x === "") {
        document.getElementById("breedmsg").style.display = "";
        return false;
    }
    else {
        document.getElementById("breedmsg").style.display = "none";
        return true;
    }
}
