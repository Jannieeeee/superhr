var pid = 0;
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})

function selectJob(posid) {
    pid = posid
    fetch(`../../backend/CreatePosition/FetchPositionDetail.php?PositionID=${posid}`)
        .then(response => response.json())
        .then(data => {
            console.log(data)
            createC(data.testAssessmentCriteria, "c1")
            createC(data.interviewAssessmentCriteria, "c2")
            document.getElementById("pname").value = data.position.PositionName
            document.getElementById("pname2").value = data.position.PositionName
            document.getElementById("pmrt").value = data.position.Station
            document.getElementById("pwtype").value = data.position.WorkType
            document.getElementById("pbts").value = data.position.Station
            document.getElementById("pstatus").value = data.position.Enable == "0" ? "Closing" : "Openning"
            document.getElementById("ploca").value = data.position.Location
            document.getElementById("ptpd").value = data.position.TestPeriod
            document.getElementById("ptqt").value = data.position.TestQuestion
        })
        .catch(error => console.error('Error:', error));
}


function createC(data, t) {
    var n = 1;
    document.getElementById(t).innerHTML = "";
    for (const item of data) {
        document.getElementById(t).innerHTML +=
            `
      <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Criteria" aria-label="Criteria" value="${n}. ${item.Criteria}">
      <button class="sv btn btn-outline-success d-none" type="button" onclick="saveData('5')" data-bs-toggle="tooltip" data-bs-placement="top" title="Save">
        <i class=" bi bi-check-circle"></i>
      </button>
      <button class="sv btn btn-outline-danger d-none" type="button" onclick="saveData('5')" data-bs-toggle="tooltip" data-bs-placement="top" title="Save">
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
        value = value == "Openning" ? "1" : "0"
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