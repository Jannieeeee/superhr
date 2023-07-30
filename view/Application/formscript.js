$(document).ready(function () {
    $('#houseads, #curads').on('input', function () {
        if ($('#isSame').is(":checked")) {
            var newValue = $(this).val();
            $('#houseads').val(newValue);
            $('#curads').val(newValue);
        }
    });

    $('#isSame').change(function () {
        if ($(this).is(":checked")) {
            var newValue = $('#houseads').val();
            $('#curads').val(newValue);
        }
    });
});

function changeType() {
    if ($('#typeSelection').val() == "intern" || $('#typeSelection').val() == "Choose...") {
        $('#salary').prop('disabled', true);
        $('#salary').val("0");
    } else {
        $('#salary').prop('disabled', false);
    }
}

var data1;
var data2;
var data3;
var data4;
function validateTab1() {
    var typeApplicant = document.getElementById('typeSelection');
    var Position1 = document.getElementById('pos1Selection');
    var Position2 = document.getElementById('pos2Selection');
    var salaries = document.getElementById('salary');
    var FromDate = document.getElementById('fromdate');
    var ToDate = document.getElementById('fromto');
    var Reason = document.getElementById('reason');
    var fields1 = [typeApplicant, Position1, Position2, FromDate, ToDate, Reason, salaries];
    fields1.forEach(field => {
        field.classList.remove('is-valid', 'is-invalid');
    });

    var isValid = true;

    fields1.forEach(field => {
        if ((field != salaries) && !field.value || (field === typeSelection && field.value === 'Choose...') || (field === pos1Selection && field.value === 'Choose...') || (field === pos2Selection && field.value === 'Choose...')) {
            field.classList.add('is-invalid');
            isValid = false;
        } else {
            field.classList.add('is-valid');
        }
    });
    if (isValid) {
        data1 = {
            typeApplicant: typeApplicant.value,
            Position1: Position1.value,
            Position2: Position2.value,
            salaries: salaries.value,
            FromDate: FromDate.value,
            ToDate: ToDate.value,
            Reason: Reason.value
        }

    }
    return isValid;
}

function validateTab2() {
    var HouseRegisAddress = document.getElementById('houseads');
    var CurrentAddress = document.getElementById('curads');
    var contactperson = document.getElementById('contactperson');
    var contactnumber = document.getElementById('contacttel');
    var field2 = [HouseRegisAddress, CurrentAddress, contactperson, contactnumber];
    field2.forEach(field => {
        field.classList.remove('is-valid', 'is-invalid');
    });

    var isValid = true;

    field2.forEach(field => {
        if (!field.value) {
            field.classList.add('is-invalid');
            isValid = false;
        } else {
            field.classList.add('is-valid');
        }
    });
    if (isValid) {
        data2 = {
            HouseRegisAddress: HouseRegisAddress.value,
            CurrentAddress: CurrentAddress.value,
            contactperson: contactperson.value,
            contactnumber: contactnumber.value
        }
    }
    return isValid;
}

function validateTab3() {
    var University = document.getElementById('university');
    var Faculty = document.getElementById('faculty');
    var Major = document.getElementById('major');
    var GPA = document.getElementById('gpa');
    var year = document.getElementById('yearSelection');

    var field3 = [University, Faculty, Major, GPA, year];

    field3.forEach(field => {
        field.classList.remove('is-valid', 'is-invalid');
    });

    var isValid = true;

    field3.forEach(field => {
        if (!field.value || (field === yearSelection && field.value === 'Choose...')) {
            field.classList.add('is-invalid');
            isValid = false;
        } else {
            field.classList.add('is-valid');
        }
    });
    if (isValid) {
        data3 = {
            University: University.value,
            Faculty: Faculty.value,
            Major: Major.value,
            GPA: GPA.value,
            Year: year.value
        }
    }
    return isValid;
}

async function validateTab4() {
    var Transcript = document.getElementById('transcriptUpload');
    var Resume = document.getElementById('resumeUpload');
    var HouseRdata = document.getElementById('houseUpload');
    var IDCard = document.getElementById('idcardUpload');
    var Photo = document.getElementById('photoUpload');
    var Certi = document.getElementById('certiUpload');
    var OtherData = document.getElementById('otherUpload');

    var field4 = [Transcript, Resume, HouseRdata, Photo, Certi, OtherData, IDCard];

    field4.forEach(field => {
        field.classList.remove('is-valid', 'is-invalid');
    });

    var isValid = true;

    field4.forEach(field => {
        if ((field != Certi) && (field != OtherData) && !field.value) {
            field.classList.add('is-invalid');
            isValid = false;
        } else {
            field.classList.add('is-valid');
        }
    });
    return isValid;
}








function tab1Next() {
    if (validateTab1()) {
        document.getElementById("tab1").classList.replace("d-block", "d-none");
        document.getElementById("tab2").classList.replace("d-none", "d-block");
    }
}
function tab2Next() {
    if (validateTab2()) {
        document.getElementById("tab2").classList.replace("d-block", "d-none");
        document.getElementById("tab3").classList.replace("d-none", "d-block");
    }
}
function tab3Next() {
    if (validateTab3()) {
        document.getElementById("tab3").classList.replace("d-block", "d-none");
        document.getElementById("tab4").classList.replace("d-none", "d-block");
    }
}
function backTab2() {
    document.getElementById("tab1").classList.replace("d-none", "d-block");
    document.getElementById("tab2").classList.replace("d-block", "d-none");
}
function backTab3() {
    document.getElementById("tab2").classList.replace("d-none", "d-block");
    document.getElementById("tab3").classList.replace("d-block", "d-none");
}
function backTab4() {
    document.getElementById("tab3").classList.replace("d-none", "d-block");
    document.getElementById("tab4").classList.replace("d-block", "d-none");
}

async function submitData() {
    var isValid = validateTab1() && validateTab2() && validateTab3() && await validateTab4();

    if (isValid) {

        let user = JSON.parse(localStorage.getItem("user"));
        let userId = user.id;

        let candidateFollowupData = {
            typeapp: data1.typeApplicant,
        };
        let addressesData = {
            house_registration_address: data2.HouseRegisAddress,
            current_address: data2.CurrentAddress,
        };
        let positionsData = {
            position_1: data1.Position1,
            position_2: data1.Position2,
            from_date: data1.FromDate,
            to_date: data1.ToDate,
            reason: data1.Reason,
        };
        let contactsData = {
            contact_person: data2.contactperson,
            contact_phone_number: data2.contactnumber,
        };
        let educationData = {
            university: data3.University,
            faculty: data3.Faculty,
            major: data3.Major,
            year: data3.Year,
            gpa: data3.GPA,
        };

        let documentsData = {
            transcript: file1,
            resume_data: file2,
            house_data: file3,
            idcard_data: file4,
            photo_data: file5,
            certi_data: file6,
            other: file7,
        };


        let salariesData = {
            salary: data1.salaries,
        };

        document.getElementById("smform").classList.replace("d-block", "d-none");
        try {
            let response = await fetch('../../backend/Application/Application.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    candidateFollowupData,
                    addressesData,
                    positionsData,
                    contactsData,
                    educationData,
                    documentsData,
                    salariesData,
                    userId
                }),
            });

            if (!response.ok) { // or check for response.status
                document.getElementById("smform").classList.replace("d-none", "d-block");

                throw new Error(`HTTP error! status: ${response.status}`);
            } else {
                let responseText = await response.text();
                document.getElementById("smform").classList.replace("d-none", "d-block");
                console.log('Response text: ', responseText);

                let jsonData = JSON.parse(responseText);
                if (jsonData.status === 'success') {
                    document.getElementById("smform").classList.replace("d-none", "d-block");
                    alert("ส่งใบสมัครเรียบร้อยแล้ว");
                    window.location.href = "../CandidateFollowUp/CandidateFollowMain.php";
                } else {
                    throw new Error(`Application submission failed! Message: ${jsonData.message}`);
                }
            }
        } catch (error) {
            console.log(error);
            document.getElementById("smform").classList.replace("d-none", "d-block");

            alert(`An error occurred: ${error.message}`);
        }




    }
}


function toMysqlFormat(isoDateString) {
    let date = new Date(isoDateString);
    let year, month, day, hours, minutes, seconds;

    year = String(date.getFullYear());
    month = String(date.getMonth() + 1).padStart(2, '0'); // Months are 0 indexed
    day = String(date.getDate()).padStart(2, '0');
    hours = String(date.getHours()).padStart(2, '0');
    minutes = String(date.getMinutes()).padStart(2, '0');
    seconds = String(date.getSeconds()).padStart(2, '0');

    let mysqlDateString = `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;

    return mysqlDateString;
}

let mysqlDate = toMysqlFormat('2023-07-30T16:10:19.426Z');
