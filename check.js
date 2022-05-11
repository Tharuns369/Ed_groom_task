let registerButton = document.getElementById("register");
let errorMessage = document.getElementById("errorMessage");

function validate() {
    let firstName = document.getElementById("firstname").value;
    let lastName = document.getElementById("lastname").value;
    let phoneNumber = document.getElementById("phonenumber").value;
    let emailAddress = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    

    errorMessage.innerTex = "";
    if (firstName.length < 3) {
        alert("hi hero")
        document.getElementById("errorMessage").classList.remove("hidden");
        errorMessage.innerText = "first name should be alteast 3 characters"
        return false;
    } else if (lastName.length < 3) {
        document.getElementById("errorMessage").classList.remove("hidden");
        errorMessage.innerText = "\nlast name should be atleast 3 characters"
        return false;
    } else if (!isValidPhone(phoneNumber)) {
        document.getElementById("errorMessage").classList.remove("hidden");
        errorMessage.innerText = "\nNumber should be of 10 digits ";
        return false;
    } else if (!isValidEmail(emailAddress)) {
        document.getElementById("errorMessage").classList.remove("hidden");
        errorMessage.innerText = "\n tt must be a gmail account";
        return false;
    }
    else if(!isValidPassword(password)){
        document.getElementById("errorMessage").classList.remove("hidden");
        errorMessage.innerText = "\n password should contain atleast 8 characters must includes 1 spl charcters and 1 small letter and 1 capital";
        return false;
    }
    else {
        document.getElementById("errorMessage").classList.add("hidden");
        return true;
    }
}

function isValidPassword(password){
    let re = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    return re.test(password);
}
function isValidPhone(number) {
    // console.log(number)
    if (Number.isInteger(+number) && (number.length == 10)) {
        return true;
    }
    return false;
}
function isValidEmail(email) {
    console.log(email)
    if (email.endsWith("@gmail.com")) {
        return true;
    }
    return false;
}

