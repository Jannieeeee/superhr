var AllApps;
var CurApps;
$(document).ready(function () {
    fetchApplication()
});

function fetchApplication() {
    var userid = localStorage.getItem('userid');

    $.ajax({
        url: '../../backend/CandidateFollowup/FetchMyApplication.php',
        type: 'POST',
        data: {
            userid: userid
        },
        dataType: 'json', // expect a json response
        success: function(data) {
            console.log(data); // this will be an array of objects
            AllApps = data;

            // iterate over the applications and append them to the listApps div
            var html = '';
            for(var i=0; i<AllApps.length; i++) {
                html += '<div class="card" style="cursor: pointer;" onClick="onSelect(' + i + ')">';
                html += '<div class="card-body">';
                html += '<div class="d-flex justify-content-between">';
                html += '<div class="h6 card-title">' + AllApps[i].position_1 +'/'+AllApps[i].position_2 + '</div>';
                html += '<div> > </div>';
                html += '</div>';
                html += '<div class="d-flex justify-content-between">';
                html += '<div class="card-text">' + AllApps[i].followup_date + '</div>';
                html += '<div class="card-text">' + AllApps[i].status + '</div>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
            }

            $('#listApps').html(html);
        },
        error: function() {
            console.log('There was an error.');
        }
    });
}

function onSelect(index) {
    CurApps = AllApps[index];
    console.log(CurApps); // Logs the selected card data

    // Now, update the application details
    document.getElementById('position_1').innerText = CurApps.position_1;
    document.getElementById('position_2').innerText = CurApps.position_2;
    document.getElementById('period').innerText = CurApps.from_date + " - " + CurApps.to_date;
    document.getElementById('house_address').innerText = CurApps.house_address;
    document.getElementById('current_address').innerText = CurApps.current_address;
    document.getElementById('contact_person').innerText = CurApps.contact_person;
    document.getElementById('contact_person_number').innerText = CurApps.contact_person_number;
    document.getElementById('test_result').innerText = CurApps.test_result;
    document.getElementById('result').innerText = CurApps.result;

    // document.getElementById('document').innerText = CurApps.document;
    document.getElementById('university').innerText = CurApps.university;
    document.getElementById('faculty').innerText = CurApps.faculty;
    document.getElementById('major').innerText = CurApps.major;
    document.getElementById('year').innerText = CurApps.year;
    document.getElementById('gpa').innerText = CurApps.gpa;
    document.getElementById('application_reason').innerText = CurApps.reason;
    document.getElementById('interview_date').innerText = CurApps.interview_date;
    document.getElementById('interview_result').innerText = CurApps.interview_result;
}




function cancelApplication() {
    var userid = localStorage.getItem('userid');
    var cancelReason = $("#cancelReason").val();

    $.ajax({
        url: '../../backend/CandidateFollowup/CancelApplication.php',
        type: 'POST',
        data: {
            userid: userid,
            status: 'cancel',
            cancel_reason: cancelReason
        },
        success: function(data) {
            console.log(data);
            alert(data);
            fetchApplication();
        },
        error: function() {
            console.log('There was an error.');
        }
    });
}
