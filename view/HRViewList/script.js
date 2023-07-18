$(document).ready(function () {
    fetchCandidates();
});

function fetchCandidates() {
    let positions = [];
    $(".dropdown-menu input[type=checkbox]:checked").each(function() {
        positions.push($(this).val());
    });

    let fullNameTh = $('#searchName').val();
    let fullNameEn = $('#searchName').val();
    let status = $('#searchStatus').val();

    $.ajax({
        url: '../../backend/HrviewList/fetchCandidates.php',
        type: 'POST',
        data: {
            positions: positions,
            full_name_th: fullNameTh,
            full_name_en: fullNameEn,
            status: status
        },
        success: function(data) {
            $('#candidates').html(data);
        },
        error: function() {
            console.log('There was an error.');
        }
    });
}



$(document).ready(function () {
    $(document).on("click", ".userlist", function () {
        var id = $(this).data("id");
        fetchFulldata(id);
    });


    function fetchFulldata(id) {
        $.ajax({
            url: '../../backend/HrviewList/fetchFulldata.php',
            type: 'POST',
            data: {
                id: id // This should be 'id' not 'status'
            },
            success: function (data) {
                var userData = JSON.parse(data);
                document.getElementById("cfullname").innerHTML = userData.full_name_eng
                document.getElementById("cmail").innerHTML = userData.email
                document.getElementById("cads").innerHTML = userData.house_registration_address
                document.getElementById("cphone").innerHTML = userData.phone_number

            },
            error: function () {
                console.log('There was an error.');
            }
        });
    }

});

function search() {
    fetchCandidates()
}