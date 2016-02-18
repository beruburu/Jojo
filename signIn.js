function validateSignIn() {
    validateEmail();
    validatePassword();
}
function validateEmail() {
    var x = document.forms["signinform"]["signinemail"].value;
    if (x == null || x == "") {
        document.getElementById("emailmsg").style.display = ""
        return false;
    }
    else if (x.indexOf('@') === -1) {
        document.getElementById("emailmsg").style.display = ""
    }
    else {
        document.getElementById("emailmsg").style.display = "none"
        return true;
    }
}
function focusEmail() {
    var x = document.forms["signinform"]["signinemail"].value;
        if (x == null || x == "") {
        document.getElementById("emailmsg").style.display = "none"
    }
}
function validatePassword() {
    var x = document.forms["signinform"]["password"].value;
    if (x == null || x == "") {
        document.getElementById("passmsg").style.display = ""
        return false;
    }
    else {
        document.getElementById("passmsg").style.display = "none"
        return true;
    }
}
function focusPassword() {
    var x = document.forms["signinform"]["password"].value;
    if (x == null || x == "") {
        document.getElementById("passmsg").style.display = "none"
    }
}
function register() {
    validateFirstName();
    validateLastName();
    validatePhone();
    validateRegEmail();
    validateRegPassword();
    validateConPassword();
    validateDog();
    validateBreed();
}
function validateFirstName() {
    var x = document.forms["register"]["firstname"].value;
    if (x == null || x == "") {
        document.getElementById("firstmsg").style.display = ""
        return false;
    }
    else {
        document.getElementById("firstmsg").style.display = "none"
        return true;
    }
}
function focusFirstName() {
    var x = document.forms["register"]["firstname"].value;
    if (x == null || x == "") {
        document.getElementById("firstmsg").style.display = "none"
    }
}
function validateLastName() {
    var x = document.forms["register"]["lastname"].value;
    if (x == null || x == "") {
        document.getElementById("lastmsg").style.display = ""
        return false;
    }
    else {
        document.getElementById("lastmsg").style.display = "none"
        return true;
    }
}
function focusLastName() {
    var x = document.forms["register"]["lastname"].value;
    if (x == null || x == "") {
        document.getElementById("lastmsg").style.display = "none"
    }
}
function validatePhone() {
    var x = document.forms["register"]["phone"].value;
    if (x == null || x == "") {
        document.getElementById("phonemsg").style.display = ""
        return false;
    }
    else {
        document.getElementById("phonemsg").style.display = "none"
        return true;
    }
}
function focusPhone() {
    var x = document.forms["register"]["phone"].value;
    if (x == null || x == "") {
        document.getElementById("phonemsg").style.display = "none"
    }
}
function validateRegEmail() {
    var x = document.forms["register"]["signinemail"].value;
    if (x == null || x == "") {
        document.getElementById("emailregmsg").style.display = ""
        return false;
    }
    else if (x.indexOf('@') === -1) {
        document.getElementById("emailregmsg").style.display = ""
    }
    else {
        document.getElementById("emailregmsg").style.display = "none"
        return true;
    }
}
function focusRegEmail() {
    var x = document.forms["register"]["signinemail"].value;
    if (x == null || x == "") {
        document.getElementById("emailregmsg").style.display = "none"
    }
}
function validateRegPassword() {
    var x = document.forms["register"]["pass"].value;
    if (x == null || x == "") {
        document.getElementById("passregmsg").style.display = ""
        return false;
    }
    else {
        document.getElementById("passregmsg").style.display = "none"
        return true;
    }
}
function focusRegPassword() {
    var x = document.forms["register"]["pass"].value;
    if (x == null || x == "") {
        document.getElementById("passregmsg").style.display = "none"
    }
}
function validateConPassword() {
    var x = document.forms["register"]["confirmpass"].value;
    var y = document.forms["register"]["pass"].value;
    if (x == null || x == "") {
        document.getElementById("passconmsg").style.display = ""
        return false;
    }
    else if (x!= y) {
        document.getElementById("passconmsg").style.display = ""
    }
    else {
        document.getElementById("passconmsg").style.display = "none"
        return true;
    }
}
function focusConPassword() {
    var x = document.forms["register"]["confirmpass"].value;
    if (x == null || x == "") {
        document.getElementById("passconmsg").style.display = "none"
    }
}
function validateDog() {
    var x = document.forms["register"]["dogname"].value;
    if (x == null || x == "") {
        document.getElementById("dogmsg").style.display = ""
        return false;
    }
    else {
        document.getElementById("dogmsg").style.display = "none"
        return true;
    }
}
function focusDog() {
    var x = document.forms["register"]["dogname"].value;
    if (x == null || x == "") {
        document.getElementById("dogmsg").style.display = "none"
    }
}
function validateBreed() {
    var x = document.forms["register"]["dogbreed"].value;
    if (x == null || x == "") {
        document.getElementById("breedmsg").style.display = ""
        return false;
    }
    else {
        document.getElementById("breedmsg").style.display = "none"
        return true;
    }
}
function focusBreed() {
    var x = document.forms["register"]["dogbreed"].value;
    if (x == null || x == "") {
        document.getElementById("breedmsg").style.display = "none"
    }
}
