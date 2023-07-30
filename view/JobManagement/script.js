var pid = 0;
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})
$('#pstatus').val("");
$('#pwtype').val("");


function selectJob(posid) {
    pid = posid
    fetch(`../../backend/CreatePosition/FetchPositionDetail.php?PositionID=${posid}`)
        .then(response => response.json())
        .then(data => {
            
            if (data.testAssessmentCriteria != null) {
                createC(data.testAssessmentCriteria, "c1")
            }else{
                document.getElementById("c1").innerHTML = "No Criteria"
            }
            if (data.interviewAssessmentCriteria != null) {
                createC(data.interviewAssessmentCriteria, "c2")
            }else{
                document.getElementById("c2").innerHTML = "No Criteria"
            }
            document.getElementById("pname").innerHTML = data.position.PositionName
            document.getElementById("pname2").value = data.position.PositionName
            document.getElementById("pmrt").value = data.position.Station
            document.getElementById("pbts").value = data.position.Station
            document.getElementById("pwtype").value = data.position.WorkType.toLowerCase();
            document.getElementById("pstatus").value = data.position.Enable == "0" ? "Closing" : "Opening"
            document.getElementById("ploca").value = data.position.Location
            document.getElementById("ptpd").value = data.position.TestPeriod
            document.getElementById("ptqt").value = data.position.TestQuestion
        })
        .catch(error => console.error('Error:', error));
}


function createC(data, t) {
    var n = 1;
    let uniqueId = new Date().getTime();
    var db = t == "c1" ? "Test" : "Interview"
    document.getElementById(t).innerHTML = "";
    for (const item of data) {
        document.getElementById(t).innerHTML +=
            `
      <div class="input-group mb-3" id="${uniqueId}">
      <input type="text" class="form-control" placeholder="Criteria" aria-label="Criteria" value="${item.Criteria}" id="${uniqueId}value">
      <button class="sv btn btn-outline-success d-none" type="button" onclick="save${db}('${uniqueId}', '${item.CriteriaID}', '${item.PositionID}')" data-bs-toggle="tooltip" data-bs-placement="top" title="Save">
        <i class=" bi bi-check-circle"></i>
      </button>
      <button class="sv btn btn-outline-danger d-none" type="button" onclick="delete${db}('${uniqueId}', '${item.CriteriaID}', '${item.PositionID}')" data-bs-toggle="tooltip" data-bs-placement="top" title="Save">
      <i class=" bi bi-trash"></i>
    </button>
    </div>
    
      `
        n += 1;
    }
}

var fl = true;

function enableEdit() {
    toggleMode()
    if (fl) {
        // Enable all input fields
        document.getElementById('pname2').disabled = false;
        document.getElementById('pmrt').disabled = false;
        document.getElementById('pwtype').disabled = false;
        document.getElementById('pbts').disabled = false;
        document.getElementById('pstatus').disabled = false;
        document.getElementById('ploca').disabled = false;
        document.getElementById('ptqt').disabled = false;
        document.getElementById('ptpd').disabled = false;
        const elements = document.getElementsByClassName("sv");
        for (let i = 0; i < elements.length; i++) {
            const element = elements[i];
            element.classList.remove("d-none");
            element.classList.add("d-block");
        }

    } else {
        document.getElementById('pname2').disabled = true;
        document.getElementById('pmrt').disabled = true;
        document.getElementById('pwtype').disabled = true;
        document.getElementById('pbts').disabled = true;
        document.getElementById('pstatus').disabled = true;
        document.getElementById('ploca').disabled = true;
        document.getElementById('ptqt').disabled = true;
        document.getElementById('ptpd').disabled = true;

        const elements = document.getElementsByClassName("sv");
        for (let i = 0; i < elements.length; i++) {
            const element = elements[i];
            element.classList.add("d-none");
            element.classList.remove("d-block");
        }

    }

    fl = !fl
}
function toggleMode() {
    const edittxt = document.getElementById("edittxt");
    const vmode = document.getElementById("vmode");
    const emode = document.getElementById("emode");


    if (!fl) {
        edittxt.innerHTML = "View";
        vmode.classList.remove("d-none");
        vmode.classList.add("d-block");
        emode.classList.remove("d-block");
        emode.classList.add("d-none");
    } else {
        edittxt.innerHTML = "Edit";
        vmode.classList.remove("d-block");
        vmode.classList.add("d-none");
        emode.classList.remove("d-none");
        emode.classList.add("d-block");
    }
}

function saveData(id, column) {
    let value = document.getElementById(id).value;

    // Create form data
    let formData = new FormData();
    formData.append('id', id);
    if (id == "pstatus") {
        value = value == "Opening" ? "1" : "0"
    }
    formData.append('column', column);
    formData.append('value', value);
    formData.append('pid', pid);

    // Send POST request
    fetch('../../backend/CreatePosition/UpdatePositionDetail.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.text())
        .then(response => alert(response))
        .catch(error => console.error('Error:', error));
}

function addInterview() {
    let uniqueId = new Date().getTime();

    document.getElementById("c2").innerHTML +=
        `
    <div class="input-group mb-3" id="${uniqueId}">
        <input id="${uniqueId}value" type="text" class="form-control" placeholder="Criteria" aria-label="Criteria" value="">
        <button class="sv btn btn-outline-success " type="button" onclick="insertInterview('${uniqueId}', '${pid}')" data-bs-toggle="tooltip" data-bs-placement="top" title="Save">
        <i class=" bi bi-check-circle"></i>
        </button>
        <button class="sv btn btn-outline-danger " type="button" onclick="deleteInterview('${uniqueId}', '', '')" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
        <i class=" bi bi-trash"></i>
        </button>
    </div>
    `
}
function addTest() {
    let uniqueId = new Date().getTime();

    document.getElementById("c1").innerHTML +=
        `
    <div class="input-group mb-3" id="${uniqueId}">
        <input id="${uniqueId}value" type="text" class="form-control" placeholder="Criteria" aria-label="Criteria" value="">
        <button class="sv btn btn-outline-success " type="button" onclick="insertTest('${uniqueId}', '${pid}')" data-bs-toggle="tooltip" data-bs-placement="top" title="Save">
        <i class=" bi bi-check-circle"></i>
        </button>
        <button class="sv btn btn-outline-danger " type="button" onclick="deleteTest('${uniqueId}','','')" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
        <i class=" bi bi-trash"></i>
        </button>
    </div>
    `
}
function deleteInterview(uniqueId, cid, pid) {
    let element = document.getElementById(uniqueId);
    if (cid != ""){
        UpdateCrit("delete_interview", cid, pid, "")
    }
    element.parentNode.removeChild(element);

}
function saveInterview(uniqueId, cid, pid,) {
    let criteria = document.getElementById(uniqueId + "value").value;
    UpdateCrit("update_interview", cid, pid, criteria)
}
function insertInterview(uniqueId, pid) {
    let element = document.getElementById(uniqueId);
    let criteria = document.getElementById(uniqueId + "value").value;
    let cid = new Date().getTime();
    UpdateCrit("insert_interview", cid, pid, criteria)
}
// Test
function deleteTest(uniqueId, cid, pid) {
    let element = document.getElementById(uniqueId);
    if (cid != ""){
        UpdateCrit("delete_test", cid, pid, "")
    }
    element.parentNode.removeChild(element);

}
function saveTest(uniqueId, cid, pid,) {
    let criteria = document.getElementById(uniqueId + "value").value;
    UpdateCrit("update_test", cid, pid, criteria)
}
function insertTest(uniqueId, pid) {
    let element = document.getElementById(uniqueId);
    let criteria = document.getElementById(uniqueId + "value").value;
    let cid = new Date().getTime();
    UpdateCrit("insert_test", cid, pid, criteria)
}




function searchPosition(type) {
    var searchTerm = document.getElementById("searchTerm").value;
    $.ajax({
        url: '../../backend/CreatePosition/SearchPosition.php',
        type: 'POST',
        data: {
            term: searchTerm,
            type: type
        },
        success: function (data) {
            if (type === 'Opening') {
                $('#toggleDiv1').html(data);
            } else {
                $('#toggleDiv2').html(data);
            }
        },
        error: function () {
            console.log('There was an error.');
        }
    });
}

function searchPositionAll() {
    searchPosition('Opening')
    searchPosition('Closing')
}

function UpdateCrit(command, criteria_id, position_id, criteria) {

    $.ajax({
        type: 'POST',
        url: '../../backend/CreatePosition/UpdateCri.php',
        data: {
            command: command,
            criteria_id: criteria_id,
            position_id: position_id,
            criteria: criteria
        },
        success: function (response) {
            console.log(response); // Show the response from the PHP script
            alert(response);
        },
        error: function (xhr, status, error) {
            console.log(xhr.responseText); // Show response from the PHP script for debugging purposes
            alert(xhr.responseText);
        }
    });
}