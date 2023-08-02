//ready

var currentDataC;
async  function setData() {
    var currentData = await getUserData();
    currentDataC = currentData;
    console.log(currentDataC);
    document.getElementById("thfullname").value = currentData.full_name_th || "";
    document.getElementById("enfullname").value = currentData.full_name_eng || "";
    document.getElementById("ttname").innerHTML = (currentData.full_name_eng + " / " + currentData.full_name_th  )|| "";
    document.getElementById("gender").value = currentData.gender || "";
    document.getElementById("bod").value = currentData.date_of_birth || "";
    let dob = new Date(currentData.date_of_birth);
    let age = new Date().getFullYear() - dob.getFullYear();
    document.getElementById("age").innerHTML = age || 0;
    document.getElementById("ctID").value = currentData.id_citizen || "";
    document.getElementById("ptID").value = currentData.id_passport || "";
    document.getElementById("national").value = currentData.nationality || "";
    document.getElementById("religion").value = currentData.religion || "";
    document.getElementById("address").value = currentData.address || "";
    document.getElementById("email").innerHTML = currentData.email || "";
    document.getElementById("tel").innerHTML = currentData.phone_number || "";
    currentID = currentData.id;

    var fieldinput = document.getElementsByClassName("fieldinput");
    for (var i = 0; i < fieldinput.length; i++) {
        fieldinput[i].setAttribute("disabled", "disabled");
    }
};

function getUserData() {
    var ids = JSON.parse(localStorage.getItem("user")).id;
    return fetch('../../backend/createAccount/getUserData.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ id: ids })
    })
        .then(response => response.json())
        .catch(error => console.error('Error:', error));
}
setData();







var currentID;
var isEdit = false;
var editalert = document.getElementById("edital");
var viewalert = document.getElementById("viewal");

function toggleEdit() {
    if (isEdit) {
        editalert.classList.replace("d-block", "d-none");
        viewalert.classList.replace("d-none", "d-block");
        document.getElementById("svbtn").classList.replace("d-block", "d-none");

        isEdit = false;
        var fieldinput = document.getElementsByClassName("fieldinput");
        for (var i = 0; i < fieldinput.length; i++) {
            fieldinput[i].setAttribute("disabled", "disabled");
        }
    } else {
        editalert.classList.replace("d-none", "d-block");
        viewalert.classList.replace("d-block", "d-none");
        document.getElementById("svbtn").classList.replace("d-none", "d-block");
        isEdit = true;
        var fieldinput = document.getElementsByClassName("fieldinput");
        for (var i = 0; i < fieldinput.length; i++) {
            fieldinput[i].removeAttribute("disabled");
        }
    }
}

function SaveData() {
    var xhttp = new XMLHttpRequest();
    var url = '../../backend/createAccount/UpdateUserData.php';

    var params = {
        'id': currentID,
        'full_name_th': document.getElementById('thfullname').value,
        'full_name_eng': document.getElementById('enfullname').value,
        'gender': document.getElementById('gender').value,
        'date_of_birth': document.getElementById('bod').value,
        'id_citizen': document.getElementById('ctID').value,
        'id_passport': document.getElementById('ptID').value,
        'nationality': document.getElementById('national').value,
        'religion': document.getElementById('religion').value,
        'address': document.getElementById('address').value
    };
    console.log(params);
    xhttp.open('POST', url, true);

    // Send the proper header information along with the request
    xhttp.setRequestHeader('Content-type', 'application/json');

    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            alert('Data updated successfully!');
            // Here you could also add logic to handle UI updates or errors
        }
    }

    xhttp.send(JSON.stringify(params));
}


function dowloadfile(){

}