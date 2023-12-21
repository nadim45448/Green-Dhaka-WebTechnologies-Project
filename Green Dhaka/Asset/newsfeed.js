function validation() {
    let email = document.getElementById('email').value;
    let firstName = document.getElementById('firstName').value;
    let lastName = document.getElementById('lastName').value;
    let contactNumber = document.getElementById('contactNumber').value;
    let dob = document.getElementById('dob').value;
    let password = document.getElementById('password').value;
    let confirmPassword = document.getElementById('confirmPassword').value;

    let len_password = strlen(password);
    let len_contactNumber = strlen(contactNumber);

    let number = preg_match('@[0-9]@', password);
    let specialChars = preg_match('@[^\w]@', password);

    if (!email) {
        document.getElementById('message').innerHTML = "Email Couldn't Be Empty!";
        return false;
    }
    if (!firstName) {
        document.getElementById('message').innerHTML = "FirstName Couldn't Be Empty!";
        return false;
    }
    if (!lastName) {
        document.getElementById('message').innerHTML = "LastName Couldn't Be Empty!";
        return false;
    }
    if (!contactNumber) {
        document.getElementById('message').innerHTML = "ContactNumber Couldn't Be Empty!";
        return false;
    }
    if (!dob) {
        document.getElementById('message').innerHTML = "Dob Couldn't Be Empty!";
        return false;
    }
    if (!password) {
        document.getElementById('message').innerHTML = "Password Couldn't Be Empty!";
        return false;
    }
    if (!confirmPassword) {
        document.getElementById('message').innerHTML = "ConfirmPassword Couldn't Be Empty!";
        return false;
    }
    
    if (password !== cpassword) {
        document.getElementById('message').innerHTML = "Confirm Password does not match!";
        return false;
    }
    
    if (password == email) {
        document.getElementById('message').innerHTML = "Username and Password cannot be same!";
        return false;
    }
    
    if (len_contactNumber != 11) {
        document.getElementById('message').innerHTML = "Contact Number must contain 11 digits!";
        return false;
    }
    
    if (!number || !specialChars || len_password < 4) {
        document.getElementById('message').innerHTML = "Password must contain at least 4 characters with number and special character!";
        return false;
    }
    return false;
}


