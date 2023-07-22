var inputField = document.getElementById("postestpr");
var currentPage = 0;
document.getElementById("step2").style.display = "none";
document.getElementById("step3").style.display = "none";
changeStepIndicator(currentPage);

inputField.addEventListener("input", function () {
    var value = inputField.value;
    inputField.value = value.replace(/\D/g, "");
});

function changeStepIndicator(index) {
    var stepIndicators = document.querySelectorAll('#cratejob .form-header .stepIndicator');
    for (let i = 0; i < stepIndicators.length; i++) {
        var indicator = stepIndicators[i];
        indicator.classList.remove('active', 'finish');
        if (i < index) {
            indicator.classList.add('finish');
        }
        if (i === index) {
            indicator.classList.add('active');
        }
    }
}

function nextstep() {
    var valid = true;
    var inputs = document.querySelectorAll(`#step${currentPage+1} input`);
    console.log(`step${currentPage+1} input`)
    for (var i = 0; i < inputs.length; i++) {
        var input = inputs[i];
        if (input.value.trim() === '' || !input.checkValidity()) {
            input.classList.add('is-invalid');
            valid = false;
        } else {
            input.classList.remove('is-invalid');
        }
    }

    if (valid) {
        changeStepIndicator(currentPage += 1);
        if(currentPage == 3){
            saveData();
        }
        if (currentPage == 1) {
            document.getElementById("step1").style.display = "none";
            document.getElementById("step2").style.display = "block";
        } else if (currentPage == 2) {
            document.getElementById("step2").style.display = "none";
            document.getElementById("step3").style.display = "block";
        }
    }
}

function previousstep() {
    changeStepIndicator(currentPage -= 1);
    if (currentPage == 0) {
        document.getElementById("step1").style.display = "block";
        document.getElementById("step2").style.display = "none";
    } else if (currentPage == 1) {
        document.getElementById("step2").style.display = "block";
        document.getElementById("step3").style.display = "none";
    } else if (currentPage == 2) {
        document.getElementById("step3").style.display = "block";
    }
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
    var url = '../../backend/CreatePosition/CreatePosition.php';
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
            Enable: true,
            TestRequire: document.getElementById("postestreq").checked,
            TestPeriod: parseInt(document.getElementById("postestpr").value),
            TestQuestion: document.getElementById("postestqt").value,
            StartDate: document.getElementById("posstartdate").value,
            EndDate: document.getElementById("posenddate").value
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
