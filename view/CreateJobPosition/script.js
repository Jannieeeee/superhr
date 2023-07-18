var inputField = document.getElementById("postestpr");

inputField.addEventListener("input", function () {
    var value = inputField.value;
    inputField.value = value.replace(/\D/g, "");
});

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("step");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:

    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").classList.add("d-none")
        document.getElementById("saveBtn").classList.remove("d-none")
        document.getElementById("saveBtn").classList.add("d-block")
        return;
    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
    }
    fixStepIndicator(n)
}

function nextPrev(n) {
    var x = document.getElementsByClassName("step");
    if (n == 1 && !validateForm()) return false;
    x[currentTab].style.display = "none";
    currentTab = currentTab + n;
    if (currentTab >= x.length) {
        // document.getElementById("cratejob").submit();
        document.getElementById("nextBtn").classList.add("d-none")
        document.getElementById("saveBtn").classList.remove("d-none")
        document.getElementById("saveBtn").classList.add("d-block")

    } else {
        showTab(currentTab);
    }
}

function validateForm() {
    var x, y, i, valid = true;
    x = document.getElementsByClassName("step");
    y = x[currentTab].getElementsByTagName("input");
    for (i = 0; i < y.length; i++) {
        if (y[i].value == "") {
            y[i].className += " invalid";
            valid = false;
        }
    }
    if (valid) {
        document.getElementsByClassName("stepIndicator")[currentTab].className += " finish";
    }
    return valid;
}

function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("stepIndicator");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
}

// add row
var cId = 2;
$("#addRow").click(function () {

    var html = '';
    html += '<div class="row align-items-center py-2">';
    html += '<div class= "col-md-8">';
    html += '<label for="input" class="col-form-label">criteria</label>';
    html += '<input type="text" name="testCtr' + cId + '" id="testCtr' + cId + '" class="form-control m-input" placeholder="Enter criteria" autocomplete="off">';
    html += '</div>';
    html += '</div>';
    $('#newRow').append(html);
    document.querySelector("#nctr").innerHTML = cId;
    cId = cId + 1;
});


// add row inter
var cId2 = 2;
$("#addRow2").click(function () {
    var html = '';
    html += '<div class="row align-items-center py-2">';
    html += '<div class= "col-md-8">';
    html += '<label for="input" class="col-form-label">criteria</label>';
    html += '<input type="text" name="interCtr' + cId2 + '" id="interCtr' + cId2 + '" class="form-control m-input" placeholder="Enter criteria" autocomplete="off">';
    html += '</div>';
    html += '</div>';
    $('#newRow2').append(html);
    document.querySelector("#nctri").innerHTML = cId2;
    cId2 = cId2 + 1;
});



function postData(url, data) {
    var formData = new FormData();
    formData.append('data', JSON.stringify(data));

    fetch(url, {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
    })
    .catch(error => {
        console.error('Error:', error);
    });
}


function saveData() {
    var url = '../backend/CreatePosition/CreatePosition.php';
    var testAssessmentCriteria = Array.from(document.querySelectorAll("[id^='testCtr']")).map((input) => ({
        Criteria: input.value
    }));
    var interviewAssessmentCriteria = Array.from(document.querySelectorAll("[id^='interCtr']")).map((input) => ({
        Criteria: input.value
    }));

    var data = {
        position: {
            PositionName: document.getElementById("posname").value,
            WorkType: document.getElementById("postype").value,
            Location: document.getElementById("posloca").value,
            Station: document.getElementById("posstation").value,
            Enable: document.getElementById("posenable").checked,
            TestRequire: document.getElementById("postestreq").checked,
            TestPeriod: parseInt(document.getElementById("postestpr").value),
            TestQuestion: document.getElementById("postestqt").value
        },
        nearTransport: [
            {
                TransportType: 'MRT',
                checked: document.getElementById("posmrt").checked
            },
            {
                TransportType: 'BTS',
                checked: document.getElementById("posbts").checked
            }
        ],
        testAssessmentCriteria: testAssessmentCriteria,
        interviewAssessmentCriteria: interviewAssessmentCriteria
    };


    postData(url, data);
    console.log(data)
    window.location.href = "select.php";

}
