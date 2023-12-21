function validation() {
    var email = document.getElementById("email").value;
    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
    var contactNumber = document.getElementById("contactNumber").value;
    var dob = document.getElementById("dob").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;

    
    var errorMessage = document.getElementById("error-message");

    
    errorMessage.innerHTML = "";

    
    if (email === "" || firstName === "" || lastName === "" || contactNumber === "" || dob === "" || password === "") {
        errorMessage.innerHTML += "Please fill in all required fields.<br>";
    }

    if (password !== confirmPassword) {
        errorMessage.innerHTML += "Confirm Password does not match.<br>";
    }

    if (password === email) {
        errorMessage.innerHTML += "Username and Password cannot be the same.<br>";
    }

   
    if (contactNumber.length !== 11 || isNaN(contactNumber)) {
        errorMessage.innerHTML += "Contact Number must contain 11 digits and be numeric.<br>";
    }

    var number = /\d/.test(password);
    var specialChars = /[^\w\s]/.test(password);
    if (!number || !specialChars || password.length < 4) {
        errorMessage.innerHTML += "Password must contain at least 4 characters with a number and a special character.<br>";
    }

    if (errorMessage.innerHTML !== "") {
        return false;
    }

    return true;
}
