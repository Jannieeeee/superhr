
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
            console.log(response);
            alert('Interview schedule has been added successfully');
            updateStatus(currentID, 'interviewed');
            location.reload();
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert('An error occurred: ' + textStatus + ' ' + errorThrown);
        }
    });
}


function DeclineFunct() {
    var confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
    confirmationModal.show();
    document.getElementById('confirmDeclineButton').addEventListener('click', function () {
        updateStatus(currentID, 'fail');
        confirmationModal.hide();
        location.reload();
    });
}


function ChangeStatusBtn() {
    if (selectCandidate.status == "test") {
        updateStatus(currentID, "scheduled_interview")
        location.reload();

    } else if (selectCandidate.status == "new") {
        alert("Please wait for test result.");
    } else if (selectCandidate.status == "pre_screen") {
        updateStatus(currentID, "short_list")
        location.reload();
    } else if (selectCandidate.status == "short_list") {

        alert("Please wait for test result.");

    } else if (selectCandidate.status == "scheduled_interview") {
        alert("Please send interview.");
    } else if (selectCandidate.status == "interviewed") {
        const selectCandidateTime = {
            InterviewDate: "2023-08-15",
            StartTime: "09:00:00",
            EndTime: "11:00:00"
        };
        const interviewDateTimeString = `${selectCandidateTime.InterviewDate} ${selectCandidateTime.StartTime}`;
        const interviewDateTime = new Date(interviewDateTimeString);
        const currentDateTime = new Date();

        if (interviewDateTime < currentDateTime || selectCandidate.isInter == 1) {
            updateStatus(currentID, "pass")
            location.reload();
        } else {
            alert("Please wait for interview.");

        }
    }
    else if (selectCandidate.status == "pass") {

    }
    else if (selectCandidate.status == "fail") {
        alert("Candidate failed.");
    }

}
function ChangeStatus() {

    if (selectCandidate.status == "new") {
        updateStatus(currentID, "pre_screen")
        selectCandidate.status = "pre_screen"
        document.getElementsByClassName("nv1")[0].style = "color: grey; pointer-events: none;";
        document.getElementsByClassName("nv2")[0].style = "color: grey; pointer-events: none;";
        location.reload();

    } else if (selectCandidate.status == "pre_screen") {
        document.getElementById("btndc").innerHTML = "Deline";
        document.getElementsByClassName("nv1")[0].style = "color: grey; pointer-events: none;";
        document.getElementsByClassName("nv2")[0].style = "color: grey; pointer-events: none;";
        document.getElementsByClassName("nv3")[0].style = "color: grey; pointer-events: none;";
        document.getElementById("btn1").innerHTML = "short_list";

    }
    else if (selectCandidate.status == "short_list") {
        document.getElementById("btndc").innerHTML = "Deline";
        document.getElementsByClassName("nv1")[0].style = "color: green; pointer-events: none;";
        document.getElementsByClassName("nv2")[0].style = "color: grey; pointer-events: none;";
        document.getElementsByClassName("nv3")[0].style = "color: grey; pointer-events: none;";
        document.getElementById("btn1").innerHTML = "Wait for test.";

    }
    else if (selectCandidate.status == "test") {
        document.getElementById("btndc").innerHTML = "Deline";

        document.getElementsByClassName("nv1")[0].style = "color: green; pointer-events: auto;";
        document.getElementsByClassName("nv2")[0].style = "color: grey; pointer-events: none;";
        document.getElementsByClassName("nv3")[0].style = "color: grey; pointer-events: none;";

        FetchTestData(currentID);
        FetchTestC(1);
        FetchInterC(1);
        document.getElementById("btn1").innerHTML = "Interview";

    } else if (selectCandidate.status == "scheduled_interview") {
        document.getElementById("btndc").innerHTML = "Deline";
        document.getElementsByClassName("nv1")[0].style = "color: grey; pointer-events: none;";
        document.getElementsByClassName("nv2")[0].style = "color: green; pointer-events: auto;";
        document.getElementsByClassName("nv3")[0].style = "color: grey; pointer-events: none;";

        document.getElementById("btn1").innerHTML = "Wait Interview.";

    } else if (selectCandidate.status == "interviewed") {
        document.getElementById("btndc").innerHTML = "Deline";
        document.getElementById("btn1").innerHTML = "Pass";
        document.getElementsByClassName("nv1")[0].style = "color: grey; pointer-events: none;";
        document.getElementsByClassName("nv2")[0].style = "color: grey; pointer-events: none;";
        document.getElementsByClassName("nv3")[0].style = "color: grey; pointer-events: none;";

    } else if (selectCandidate.status == "pass") {
        document.getElementById("btndc").innerHTML = "Deline";

        document.getElementById("btn1").innerHTML = "passed";
        document.getElementsByClassName("nv1")[0].style = "color: grey; pointer-events: none;";
        document.getElementsByClassName("nv2")[0].style = "color: grey; pointer-events: none;";
        document.getElementsByClassName("nv3")[0].style = "color: green; pointer-events: auto;";
    }
    else if (selectCandidate.status == "fail") {
        document.getElementById("btn1").innerHTML = "candidate failed";
        document.getElementById("btndc").innerHTML = "candidate failed";

        document.getElementsByClassName("nv1")[0].style = "color: grey; pointer-events: none;";
        document.getElementsByClassName("nv2")[0].style = "color: grey; pointer-events: none;";
        document.getElementsByClassName("nv3")[0].style = "color: grey; pointer-events: none;";

    }

}
