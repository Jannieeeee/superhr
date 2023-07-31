var AllApps;
var AllPos = {};
var CurApps;
$(document).ready(function () {
    fetchPositionList()
    fetchApplication()
});

function fetchPositionList() {
    $.ajax({
        url: '../../backend/Application/FetchPositionList.php',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            data.forEach(element => {
                AllPos[element.PositionID] = element.PositionName;
            });
            console.log(AllPos);
        },
        error: function (e) {
            console.log('There was an error.' + JSON.stringify(e));
        }
    });

}
function fetchApplication() {
    var userid = JSON.parse(localStorage.getItem('user')).id;
    console.log(userid);

    $.ajax({
        url: '../../backend/CandidateFollowup/FetchMyApplication.php',
        type: 'POST',
        data: {
            userid: userid
        },
        dataType: 'json', // expect a json response
        success: function (data) {
            console.log(data); // this will be an array of objects
            AllApps = data;

            // iterate over the applications and append them to the listApps div
            var html = '';
            for (var i = 0; i < AllApps.length; i++) {
                html += '<div class="card my-3 shadow-sm" style="cursor: pointer;" onClick="onSelect(' + i + ')">';
                html += '<div class="card-body">';
                html += '<div class="d-flex justify-content-between">';
                html += '<div class="h6 card-title">' + AllPos[AllApps[i].position_1] + '/' + AllPos[AllApps[i].position_2] + '</div>';
                html += '<div class="fw-bold" > </div>';
                html += '</div>';
                html += '<div class="d-flex justify-content-between">';
                html += '<div class="card-text fw-bold">[' + AllApps[i].typeapp + ']</div>';
                html += '<div class="card-text">' + AllApps[i].followup_date + '</div>';
                html += '<div class="card-text">' + AllApps[i].status + '</div>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
            }

            $('#listApps').html(html);
        },
        error: function (e) {
            console.log('There was an error.' + JSON.stringify(e));
        }
    });
}

function onSelect(index) {
    CurApps = AllApps[index];
    console.log(CurApps);
    if (CurApps.status == "short_list" && (CurApps.testid == null)) {
        document.getElementById("testbtn").disabled = false;
    } else if (CurApps.status == "interviewed" && (CurApps.isInter == "0")) {
        document.getElementById("interbtn").disabled = false;
    }
    else {
        document.getElementById("testbtn").disabled = true;
        document.getElementById("interbtn").disabled = true;

    }
    document.getElementById('position_1').innerText = AllPos[CurApps.position_1] || "-";
    document.getElementById('position_2').innerText = AllPos[CurApps.position_2] || "-";
    document.getElementById('period').innerText = (CurApps.from_date + " - " + CurApps.to_date) || "-";
    document.getElementById('house_address').innerText = CurApps.house_registration_address || "-";
    document.getElementById('current_address').innerText = CurApps.current_address || "-";
    document.getElementById('contact_person').innerText = CurApps.contact_person || "-";
    document.getElementById('contact_person_number').innerText = CurApps.contact_person_number || "-";
    document.getElementById('status').innerText = CurApps.status || "-";
    document.getElementById('result').innerText = CurApps.result || "-";

    document.getElementById('university').innerText = CurApps.university || "-";
    document.getElementById('faculty').innerText = CurApps.faculty || "-";
    document.getElementById('major').innerText = CurApps.major || "-";
    document.getElementById('year').innerText = CurApps.year || "-";
    document.getElementById('gpa').innerText = CurApps.gpa || "-";
    document.getElementById('application_reason').innerText = CurApps.reason || "-";
    document.getElementById('interview_date').innerText = CurApps.interview_date || "-";
    document.getElementById('interview_result').innerText = CurApps.interview_result || "-";


    document.getElementById('questionText1').innerText = CurApps.TestQuestionPos1 || "-";
    document.getElementById('questionText2').innerText = CurApps.TestQuestionPos2 || "-";

    document.getElementById('test_result1').innerText = CurApps.res1 || "-";
    document.getElementById('test_result2').innerText = CurApps.res2 || "-";
}





function cancelApplication() {
    var cancelReason = $("#cancelReason").val();

    $.ajax({
        url: '../../backend/CandidateFollowup/CancelApplication.php',
        type: 'POST',
        data: {
            userid: CurApps.id,
            status: 'cancel',
            cancel_reason: cancelReason
        },
        success: function (data) {
            console.log(data);
            alert(data);
            fetchApplication();
        },
        error: function () {
            console.log('There was an error.');
        }
    });
}

function downloadFiles() {
    var filesdata = [
        { name: "certi_data", data: CurApps.certi_data },
        { name: "house_data", data: CurApps.house_data },
        { name: "idcard_data", data: CurApps.idcard_data },
        { name: "photo_data", data: CurApps.photo_data },
        { name: "resume_data", data: CurApps.resume_data },
        { name: "transcript", data: CurApps.transcript },
        { name: "other", data: CurApps.other }
    ];

    var zip = new JSZip();

    filesdata.forEach((file, index) => {
        // Skip if data is null
        if (file.data === null) {
            return;
        }

        var block = file.data.split(";");
        var contentType = block[0].split(":")[1];
        var realData = block[1].split(",")[1];

        var blob = b64toBlob(realData, contentType);

        // Map the content type to an extension
        var extension = getExtension(contentType);

        // Use the name from the filedata array for the filename and append the extension
        zip.file(`${file.name}.${extension}`, blob, { binary: true });
    });

    zip.generateAsync({ type: "blob" }).then(function (content) {
        // Create a link element
        var a = document.createElement("a");

        // Create a URL for the blob
        var url = URL.createObjectURL(content);
        a.href = url;
        a.download = "files.zip";
        document.body.appendChild(a);

        // Simulate a click
        a.click();

        // Remove the link when done
        document.body.removeChild(a);
    });

    // Map MIME types to file extensions
    function getExtension(contentType) {
        var extensions = {
            "image/jpeg": "jpg",
            "image/jpeg": "jpeg",
            "image/gif": "gif",
            "image/png": "png",
            "application/pdf": "pdf",
            "application/msword": "doc",
            "application/vnd.openxmlformats-officedocument.wordprocessingml.document": "docx",
            "application/vnd.ms-excel": "xls",
            "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet": "xlsx",
            "application/vnd.ms-powerpoint": "ppt",
            "application/vnd.openxmlformats-officedocument.presentationml.presentation": "pptx",
            "text/plain": "txt",
            "application/zip": "zip"

        };

        return extensions[contentType];
    }


}



function b64toBlob(b64Data, contentType, sliceSize) {
    contentType = contentType || '';
    sliceSize = sliceSize || 512;

    var byteCharacters = atob(b64Data);
    var byteArrays = [];

    for (var offset = 0; offset < byteCharacters.length; offset += sliceSize) {
        var slice = byteCharacters.slice(offset, offset + sliceSize);

        var byteNumbers = new Array(slice.length);
        for (var i = 0; i < slice.length; i++) {
            byteNumbers[i] = slice.charCodeAt(i);
        }

        var byteArray = new Uint8Array(byteNumbers);

        byteArrays.push(byteArray);
    }

    var blob = new Blob(byteArrays, { type: contentType });
    return blob;
}
