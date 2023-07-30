function nextTab() {
    var isvalid = validateForm_1();
    if (isvalid) {
        document.getElementById("tab1").classList.add("d-none");
        document.getElementById("tab1").classList.remove("d-block");
        document.getElementById("tab2").classList.remove("d-none");
        document.getElementById("tab2").classList.add("d-block");
    } else {
        console.log("not valid");
    }
}

function backTab() {
    document.getElementById("tab2").classList.add("d-none");
    document.getElementById("tab2").classList.remove("d-block");
    document.getElementById("tab1").classList.remove("d-none");
    document.getElementById("tab1").classList.add("d-block");
}

var thfullname;
var enfullname;
var phonenumber;
var email;
var genderSelection;
var photoUpload;
var dob;
var ctID;
var psID;
var nationalSelection;
var reliSelection;
var username;
var password;
var cfpassword;
var address;

function validateForm_1() {
    thfullname = document.getElementById('thfullname');
    enfullname = document.getElementById('enfullname');
    phonenumber = document.getElementById('phonenumber');
    email = document.getElementById('email');
    genderSelection = document.getElementById('genderSelection');
    photoUpload = document.getElementById('photoUpload');
    dob = document.getElementById('dob');
    ctID = document.getElementById('ctID');
    psID = document.getElementById('psID');
    nationalSelection = document.getElementById('nationalSelection');
    reliSelection = document.getElementById('reliSelection');
    address = document.getElementById('address');

    let fields = [thfullname, enfullname, phonenumber, email, genderSelection, photoUpload, dob, ctID, psID, nationalSelection, reliSelection, address];

    fields.forEach(field => {
        field.classList.remove('is-valid', 'is-invalid');
    });

    let isValid = true;

    fields.forEach(field => {
        if (!field.value || (field === genderSelection && field.value === 'Choose...') || (field === nationalSelection && field.value === 'Choose...') || (field === reliSelection && field.value === 'Choose...')) {
            field.classList.add('is-invalid');
            isValid = false;
        } else {
            field.classList.add('is-valid');
        }
    });
    return isValid;
}
function validateForm_2() {
    username = document.getElementById('username');
    password = document.getElementById('password');
    cfpassword = document.getElementById('cfpassword');

    let fields = [username, password, cfpassword];

    fields.forEach(field => {
        field.classList.remove('is-valid', 'is-invalid');
    });
    fields.forEach(field => {
        if (!field.value) {
            field.classList.add('is-invalid');
            isValid = false;
        } else {
            field.classList.add('is-valid');
        }
    });

    let isValid = true;
    if (password.value !== cfpassword.value) {
        password.classList.remove('is-valid');
        password.classList.add('is-invalid');
        cfpassword.classList.remove('is-valid');
        cfpassword.classList.add('is-invalid');
        alert("Password and Confirm Password not match");
        isValid = false;
    }

    return isValid;
}


var base64string;
document.getElementById('photoUpload').addEventListener('change', function() {
    var reader = new FileReader();
    reader.onloadend = function() {
        base64string = reader.result.replace(/^data:(.*?);base64,/, '');
    }
    reader.readAsDataURL(this.files[0]);
});



function signup() {
    var isValid = validateForm_2();
    username = document.getElementById('username').value;
    password = document.getElementById('password').value;
    thfullname = document.getElementById('thfullname').value;
    enfullname = document.getElementById('enfullname').value;
    phonenumber = document.getElementById('phonenumber').value;
    email = document.getElementById('email').value;
    genderSelection = document.getElementById('genderSelection').value;
    photoUpload = document.getElementById('photoUpload').value;
    dob = document.getElementById('dob').value;
    ctID = document.getElementById('ctID').value;
    psID = document.getElementById('psID').value;
    nationalSelection = document.getElementById('nationalSelection').value;
    reliSelection = document.getElementById('reliSelection').value;
    photoUpload = document.getElementById('photoUpload').value;
    address = document.getElementById('address').value;
    if (isValid) {
        var formData = {
            username: username,
            password: password,
            thfullname: thfullname,
            enfullname: enfullname,
            phonenumber: phonenumber,
            email: email,
            genderSelection: genderSelection,
            dob: dob,
            ctID: ctID,
            psID: psID,
            nationalSelection: nationalSelection,
            reliSelection: reliSelection,
            photoUpload: base64string,
            address: address
        }
        console.log(formData);
        
        fetch('../../backend/createAccount/Signup.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(formData),
        })
            .then(response => response.text())
            .then(data => {
                console.log('Success:', data);
                alert("Sign up success");
                window.location.href = "../../index.php";
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    }
}
