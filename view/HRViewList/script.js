var allPositions;


$(document).ready(function () {
    FetchPositionList();
    toggleDiv(true);
    fetchCandidates();
    addStatusChoice();
});

function toggleDiv(isDisabled) {
    var myDiv = document.getElementById("blockcontent");
    if (isDisabled) {
        myDiv.style.pointerEvents = "none";
        myDiv.style.opacity = "0.4";
    } else {
        myDiv.style.pointerEvents = "auto";
        myDiv.style.opacity = "1";
    }
}


function addStatusChoice() {
    var statusChoice = document.getElementById("searchStatus");
    var statuss = [
        { show: "New", value: "new" },
        { show: "Pre-screen", value: "pre_screen" },
        { show: "Short-list", value: "short_list" },
        { show: "Test", value: "test" },
        { show: "Scheduled interview", value: "scheduled_interview" },
        { show: "Interview", value: "interviewed" },
        { show: "Pass", value: "pass" },
        { show: "Fail", value: "fail" },
        { show: "Hire", value: "hire" },
        { show: "Hold", value: "hold" },
    ]

    statuss.forEach(item => {
        var label = document.createElement("label");
        label.className = "dropdown-item w-100";

        var checkbox = document.createElement("input");
        checkbox.type = "checkbox";
        checkbox.value = item.value;

        var text = document.createTextNode(" " + item.show);

        label.appendChild(checkbox);
        label.appendChild(text);

        statusChoice.appendChild(label);
    });
}


var currentID = 0;
$(document).ready(function () {
    $(document).on("click", ".userlist", function () {
        toggleDiv(false);
        var id = $(this).data("id");
        currentID = id;
        FetchFulldata(id);
    });




});

var allCandidates;

function fetchCandidates() {
    let positions = [];
    $(".dropdown-menu input[type=checkbox]:checked").each(function () {
        positions.push($(this).val());
    });

    let statuses = [];
    $("#searchStatus input[type=checkbox]:checked").each(function () {
        statuses.push($(this).val());
    });

    let fullNameTh = $('#searchName').val();
    let fullNameEn = $('#searchName').val();

    console.log(statuses);
    $.ajax({
        url: '../../backend/HrviewList/fetchCandidates.php',
        type: 'POST',
        data: {
            positions: positions,
            full_name_th: fullNameTh,
            full_name_en: fullNameEn,
            status: statuses
        },
        success: function (data) {
            allCandidates = data;
            console.log(data);
            let html = '';

            console.log(data);
            for (let user of data) {
                var p1 = allPositions.find(position => position.id == user.position_1);
                var p2 = allPositions.find(position => position.id == user.position_2);
                html += `
                <div class="userlist" data-id="${user.caid}" style="cursor: pointer;">
                    <div class="mb-2 shadow-sm" >
                    <div class="p-4">
                        <div class="p-1 px-2 text-white text-end fw-bold" style="background: #CB0021; border-radius: 10px 10px 0 0;">${user.status}</div>
                        <div class="row mt-1">
                            <div class="col-3 d-flex justify-content-center">
                                <div class="">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" width="50" height="50" class="rounded-circle">
                                </div>
                            </div>
                            <div class="col-9">
                                <p class="">${user.full_name_th} - ${user.full_name_eng}</p>
                                <div class="d-flex justify-content-start-50 gap-2">
                                <div class="">${p1.name}</div>/
                                <div class="">${p2.name}</div>
                                <div class="">${(user.isTest ? "Tested" : "") || ""}</div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>`;
            }
            $('#candidates').html(html);

        },
        error: function (e) {
            console.log('There was an error.' + JSON.stringify(e));
        }
    });
}

function updateStatus(userId, status) {
    $.ajax({
        url: '../../backend/HrviewList/UpdateStatus.php',
        type: 'POST',
        data: {
            userId: userId,
            status: status
        },
        success: function (response) {
            console.log(response);
            alert('Status has been updated successfully');
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log('An error occurred: ' + textStatus + ' ' + errorThrown);
            alert('An error occurred: ' + textStatus + ' ' + errorThrown);
        }
    });
}

function search() {
    fetchCandidates()
}

async function FetchPositionList() {
    await
        $.ajax({
            url: '../../backend/HrviewList/fetchPositionList.php',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                allPositions = data;
                $('#searchPos').empty();
                $.each(data, function (id, position) {
                    $('#searchPos').append('<label class="dropdown-item w-100"><input type="checkbox" value="' + position.id + '">' + position.name + '</label>');
                });
            },
            error: function () {
                console.log('There was an error.');
            }
        });
}
var selectCandidate;
function FetchFulldata(id) {
    selectCandidate = allCandidates.find(candidate => candidate.caid == id);
    console.log(selectCandidate);
    ChangeStatus();

    $('#username').text(selectCandidate.username);
    $('#password').text(selectCandidate.password);
    $('#tfullname').text(selectCandidate.full_name_th);
    $('#efullname').text(selectCandidate.full_name_eng);
    $('#cphone').text(selectCandidate.contact_phone_number);
    $('#currentAddress').text(selectCandidate.current_address);
    $('#cads').text(selectCandidate.house_registration_address);
    $('#bd').text(selectCandidate.date_of_birth);
    $('#cmail').text(selectCandidate.email);
    $('#facu').text(selectCandidate.faculty);
    $('#maj').text(selectCandidate.major);
    $('#gpa').text(selectCandidate.gpa);
    $('#uni').text(selectCandidate.university);
    $('#followupDate').text(selectCandidate.followup_date);
    $('#fromDate').text(selectCandidate.from_date);

    $('#id').text(selectCandidate.id);
    $('#pid').text(selectCandidate.id_passport);
    $('#pidc').text(selectCandidate.id_citizen);
    $('#ntl').text(selectCandidate.nationality);
    $('#notes').text(selectCandidate.notes);
    $('#phoneNumber').text(selectCandidate.phone_number);
    $('#photoData').text(selectCandidate.photo_data);
    var pos1name = allPositions.find(position => position.id == selectCandidate.position_1);
    var pos2name = allPositions.find(position => position.id == selectCandidate.position_2);
    $('#cpos1').text(pos1name.name);
    $('#cpos2').text(pos2name.name);
    $('#reason').text(selectCandidate.reason);
    $('#rlg').text(selectCandidate.religion);
    $('#role').text(selectCandidate.role);
    $('#salary').text(selectCandidate.salary);
    $('#status').text(selectCandidate.status);
    $('#toDate').text(selectCandidate.to_date);
    $('#typeapp').text(selectCandidate.typeapp);
    $('#yrs').text(selectCandidate.year);
    var age = Date.now() - new Date(selectCandidate.date_of_birth);
    var age_in_years = age / (365.25 * 24 * 60 * 60 * 1000);
    var rounded_age = Math.round(age_in_years);

    $('#ag').text(rounded_age);

}


var file1str;
var file2str;

function FetchTestData(id) {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "../../backend/HrviewList/FetchQuestion.php?id=" + id, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var res = JSON.parse(xhr.responseText);
                console.log(res)
                document.getElementById("testquestion1").innerHTML = res[0].TestQuestionPos1 || "-";
                document.getElementById("testquestion2").innerHTML = res[0].TestQuestionPos2 || "-";
                document.getElementById("link1").innerHTML = res[0].link1 || "-";
                document.getElementById("link2").innerHTML = res[0].link2 || "-";
                document.getElementById("link1").href = res[0].link1 || "#";
                document.getElementById("link2").href = res[0].link2 || "#";
                file1str = res[0].ansfile1;
                file2str = res[0].ansfile2;


            } else {
                console.error("Error occurred while fetching data.");
            }
        }
    };
    xhr.send();

}


var testcs;
function FetchTestC(id) {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "../../backend/HrviewList/FetchTestC.php?id=" + id, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var res = JSON.parse(xhr.responseText);
                testcs = res
                var html = `<h5 class="text-secondary"> Test Criteria : </h5>`;
                
                testcs.forEach(element => {
                    if (element.PositionID == selectCandidate.position_1) {
                        html += `
                        <div>
                        <p class="fw-bold mb-2">${element.Criteria}</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="evaluation_${element.CriteriaID}" value="2" id="pass_${element.CriteriaID}">
                            <label class="form-check-label" for="pass_${element.CriteriaID}">Pass</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="evaluation_${element.CriteriaID}" value="1" id="fail_${element.CriteriaID}">
                            <label class="form-check-label" for="fail_${element.CriteriaID}">Fail</label>
                        </div>
                        <div class="form-check">
                            <input checked class="form-check-input" type="radio" name="evaluation_${element.CriteriaID}" value="0" id="notEvaluated_${element.CriteriaID}">
                            <label class="form-check-label" for="notEvaluated_${element.CriteriaID}">Not Evaluated</label>
                        </div>
                    </div>
                    
                        `
                    }
                });
                html += '<button class="btn btn-success" onclick="savet1()">Save</button>';
                document.getElementById("c1").innerHTML = html;
                
                html = `<h5 class="text-secondary"> Test Criteria : </h5>`;
                testcs.forEach(element => {
                    if (element.PositionID == selectCandidate.position_2) {
                        html += `
                        <div>
                        <p class="fw-bold mb-2">${element.Criteria}</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="evaluation_${element.CriteriaID}" value="2" id="pass_${element.CriteriaID}">
                            <label class="form-check-label" for="pass_${element.CriteriaID}">Pass</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="evaluation_${element.CriteriaID}" value="1" id="fail_${element.CriteriaID}">
                            <label class="form-check-label" for="fail_${element.CriteriaID}">Fail</label>
                        </div>
                        <div class="form-check">
                            <input checked class="form-check-input" type="radio" name="evaluation_${element.CriteriaID}" value="0" id="notEvaluated_${element.CriteriaID}">
                            <label class="form-check-label" for="notEvaluated_${element.CriteriaID}">Not Evaluated</label>
                        </div>
                    </div>
                    
                        `
                    }
                });
                html += '<button class="btn btn-success" onclick="savet2()">Save</button>';

                document.getElementById("c2").innerHTML = html;


            } else {
                console.error("Error occurred while fetching data.");
            }
        }
    };
    xhr.send();

}
var intercs;
function FetchInterC(id) {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "../../backend/HrviewList/FetchInterC.php?id=" + id, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var res = JSON.parse(xhr.responseText);
                intercs = res;

            } else {
                console.error("Error occurred while fetching data.");
            }
        }
    };
    xhr.send();

}

function savet1() {
    var evaluations = {};
    var valueString = '';
    testcs.forEach(element => {
        if (element.PositionID == selectCandidate.position_1) {
            var radios = document.getElementsByName(`evaluation_${element.CriteriaID}`);
            radios.forEach(radio => {
                if (radio.checked) {
                    evaluations[element.CriteriaID] = radio.value;
                    valueString += radio.value; 
                }
            });
        }
    });
    valueString += Object.keys(evaluations).length;  
    updateTable('testjob', 'followup_id', selectCandidate.caid, 'res1', valueString);

    return false;
}

function savet2() {
    var evaluations = {};
    var valueString = '';
    testcs.forEach(element => {
        if (element.PositionID == selectCandidate.position_2) {
            var radios = document.getElementsByName(`evaluation_${element.CriteriaID}`);
            radios.forEach(radio => {
                if (radio.checked) {
                    evaluations[element.CriteriaID] = radio.value;
                    valueString += radio.value; 
                }
            });
        }
    });
    valueString += Object.keys(evaluations).length;  
    updateTable('testjob', 'followup_id', selectCandidate.caid, 'res2', valueString);

    return false;
}


function updateTable(table,idname, id, field, value) {
    const data = {
        table: table,
        idname: idname,
        id: id,
        field: field,
        value: value
    };

    fetch('../../backend/HrviewList/UpdateTable.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
    })
    .then(response => response.json())
    .then(data => {
        if (data.message) {
            alert(data.message);
        }
    })
    .catch((error) => {
        alert('Error:', error);
    });
}

