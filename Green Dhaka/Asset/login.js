function validation() {
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;

    if (!email) {
        document.getElementById('message').innerHTML = "Email Couldn't Be Empty!";
        return false;
    }

    if (!password) {
        document.getElementById('message').innerHTML = "Password Couldn't Be Empty!";
        return false;
    }

    if (password == email) {
        document.getElementById('message').innerHTML = "Email and Password cannot be the same!";
        return false;
    }
}
