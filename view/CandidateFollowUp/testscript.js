var file1;
var file2;
document.getElementById('ansfile1').addEventListener('change', function () {
    var reader = new FileReader();
    reader.onloadend = function () {
        file1 = reader.result;
    }
    reader.readAsDataURL(this.files[0]);
});
document.getElementById('ansfile2').addEventListener('change', function () {
    var reader = new FileReader();
    reader.onloadend = function () {
        file2 = reader.result;
    }
    reader.readAsDataURL(this.files[0]);
});


function updateCandidateData(id, field, value) {
    fetch('../../backend/CandidateFollowup/UpdateAppData.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            id: id,
            field: field,
            value: value
        })
    })
        .then(response => response.json())
        .then(data => alert(data))
        .catch((error) => {
            console.error('Error:', error);
        });
}


function submitTest() {
    if (confirm("ยืนยันการส่งผลการทดสอบ")) {
        const data = {
            'ansfile1': file1 || "-",
            'ansfile2': file2 || "-",
            'link1': document.getElementById('link1').value || "-",
            'link2': document.getElementById('link2').value || "-",
            'followup_id': CurApps.id,
        };

        updateCandidateData(CurApps.id, 'isTest', '1')
        updateStatus(CurApps.id, 'test')


        fetch('../../backend/CandidateFollowup/TurnJob.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data)
        }).then(response => response.text())
            .then(data => alert("ส่งผลการทดสอบเรียบร้อย : " + data))
            .catch((error) => {
                console.error('Error:', error);
                alert("เกิดข้อผิดพลาดในการส่งผลการทดสอบ: " + error);
            });

    } else {
        // Handle the case where the user clicks "Cancel".
        alert("การทดสอบยังไม่ถูกส่ง");
    }
}

function submitInter() {
    if (confirm("ยืนยันการส่งผลการสัมภาษณ์")) {
        alert("ส่งผลการสัมภาษณ์เรียบร้อย");
        updateCandidateData(CurApps.id, 'isInter', '1')
    }
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

