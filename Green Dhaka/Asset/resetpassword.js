function validateForm() {
    var email = document.getElementsByName("email")[0].value;
    var cnum = document.getElementsByName("cnum")[0].value;
    var uppassword = document.getElementsByName("uppassword")[0].value;

    var isValid = true;
    var errorMessage = "";

    if (email === "" || cnum === "" || uppassword === "") {
        errorMessage = "Please fill in all the fields!";
        isValid = false;
    } else if (uppassword === email) {
        errorMessage = "Username and Password cannot be the same!";
        isValid = false;
    } else if (cnum.length !== 11) {
        errorMessage = "Contact Number must contain 11 digits!";
        isValid = false;
    } else {
   
        var number = /[0-9]/.test(uppassword);
        var specialChars = /[^\w]/.test(uppassword);

        if (!number || !specialChars || uppassword.length < 4) {
            errorMessage = "Password must contain at least 4 characters with a number and a special character!";
            isValid = false;
        }
    }

    var errorContainer = document.getElementById("error-container");
    errorContainer.textContent = errorMessage;

    return isValid;
}
