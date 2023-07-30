
$(document).ready(function () {
    toggleDiv(true);
    fetchCandidates();
    FetchPositionList();
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
        { show: "Fall", value: "fail" },
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

function fetchCandidates() {
    let positions = [];
    $("#searchPos input[type=checkbox]:checked").each(function () {
        positions.push($(this).val());
    });

    let statuses = [];
    $("#searchStatus input[type=checkbox]:checked").each(function () {
        statuses.push($(this).val());
    });

    let fullNameTh = $('#searchName').val();
    let fullNameEn = $('#searchName').val();

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
            $('#candidates').html(data);
        },
        error: function () {
            console.log('There was an error.');
        }
    });
}



var currentID = 0;
var currentStatus;
$(document).ready(function () {
    $(document).on("click", ".userlist", function () {
        toggleDiv(false);
        var id = $(this).data("id");
        FetchFulldata(id);
        currentID = id;
        StatusManagement();
    });




});
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
            $('#candidates').html(data);
        },
        error: function () {
            console.log('There was an error.');
        }
    });
}

function search() {
    fetchCandidates()
}

function FetchPositionList() {
    $.ajax({
        url: '../../backend/HrviewList/fetchPositionList.php',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            $('#searchPos').empty();

            $.each(data, function (key, position) {
                $('#searchPos').append('<label class="dropdown-item w-100"><input type="checkbox" value="' + position + '">' + position + '</label>');
            });
        },
        error: function () {
            console.log('There was an error.');
        }
    });
}

function FetchFulldata(id) {

    $.ajax({
        url: '../../backend/HrviewList/fetchFulldata.php',
        type: 'POST',
        data: {
            id: id
        },
        success: function (data) {
            var parsedData = JSON.parse(data);
            console.log(parsedData);

            $('#username').text(parsedData.username);
            $('#password').text(parsedData.password);
            $('#tfullname').text(parsedData.full_name_th);
            $('#efullname').text(parsedData.full_name_eng);
            $('#area').text(parsedData.area);
            $('#areaFrom').text(parsedData.areafrom);
            $('#areaTo').text(parsedData.areato);
            $('#cancelReason').text(parsedData.cancel_reason);
            $('#certiData').text(parsedData.certi_data);
            $('#contactPerson').text(parsedData.contact_person);
            $('#cphone').text(parsedData.contact_phone_number);
            $('#currentAddress').text(parsedData.current_address);
            $('#bd').text(parsedData.date_of_birth);
            $('#educationLevel').text(parsedData.education_level);
            $('#cmail').text(parsedData.email);
            $('#facu').text(parsedData.faculty);
            $('#followupDate').text(parsedData.followup_date);
            $('#fromDate').text(parsedData.from_date);
            $('#gd').text(parsedData.gender);
            $('#gpa').text(parsedData.gpa);
            $('#cads').text(parsedData.house_registration_address);
            $('#hrData').text(parsedData.hr_data);
            $('#id').text(parsedData.id);
            $('#pid').text(parsedData.id_passport);
            $('#pidc').text(parsedData.idcard_data);
            $('#maj').text(parsedData.major);
            $('#ntl').text(parsedData.nationality);
            $('#notes').text(parsedData.notes);
            $('#phoneNumber').text(parsedData.phone_number);
            $('#photoData').text(parsedData.photo_data);
            $('#cpos1').text(parsedData.position_1);
            $('#cpos2').text(parsedData.position_2);
            $('#reason').text(parsedData.reason);
            $('#rlg').text(parsedData.religion);
            $('#resumeData').text(parsedData.resume_data);
            $('#role').text(parsedData.role);
            $('#salary').text(parsedData.salary);
            $('#status').text(parsedData.status);
            $('#toDate').text(parsedData.to_date);
            $('#typeapp').text(parsedData.typeapp);
            $('#uni').text(parsedData.university);
            $('#yrs').text(parsedData.year);

            $('#ag').text("20");
            currentStatus = parsedData.status;
            updateButton();

        },


        error: function () {
            console.log('There was an error.');
        }
    });
}


function ScheduleInterview() {
    var locationLink = $('#locationLink').val();
    var interdate = $('#interdate').val();
    var intersttime = $('#intersttime').val();
    var interentime = $('#interentime').val();

    $.ajax({
        url: '../../backend/HrviewList/AddSc.php',
        type: 'POST',
        data: {
            locationLink: locationLink,
            interdate: interdate,
            intersttime: intersttime,
            interentime: interentime,
            cid: currentID
        },
        success: function (response) {
            alert('Interview schedule has been added successfully');
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert('An error occurred: ' + textStatus + ' ' + errorThrown);
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
            console.log('Status has been updated successfully');
            // alert('Status has been updated successfully');
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log('An error occurred: ' + textStatus + ' ' + errorThrown);
            alert('An error occurred: ' + textStatus + ' ' + errorThrown);
        }
    });
}


function DeclineFunct() {
    // Show the confirmation modal
    var confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
    confirmationModal.show();

    // When the "Yes, Decline" button is clicked, update the status to "fail"
    document.getElementById('confirmDeclineButton').addEventListener('click', function () {
        updateStatus(currentID, 'fail');
        confirmationModal.hide();
        location.reload();
    });
}

// TODO Check test
var isTest = false
function StatusManagement() {
    if (currentStatus == "new") {
        updateStatus(id, "pre_screen");
        updateButton();
    } else if (isTest && currentStatus == "test") {
        $("#btn1").text("Interview");
    }
}

function updateButton() {
    if (currentStatus === "pre_screen") {
        $("#btn1").text("Test");
    }
}

function btnAction() {
    var btnState = document.getElementById("btn1").innerHTML;
    if (btnState == "Short-list") {
        updateStatus(currentID, "test");
    } else if (btnState == "Test") {
        updateStatus(id, "test");
        StatusManagement();
    }
}