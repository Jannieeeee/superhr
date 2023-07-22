$(document).ready(function () {
    fetchCandidates();
    FetchPositionList();
    addStatusChoice();
});

function addStatusChoice(){
    var statusChoice = document.getElementById("searchStatus");
    var statuss = [
        {show:"New", value:"new"},
        {show:"Pre-screen", value:"pre_screen"},
        {show:"Short-list", value:"short_list"},
        {show:"Test", value:"test"},
        {show:"Scheduled interview", value:"scheduled_interview"},
        {show:"Interview", value:"interviewed"},
        {show:"Pass", value:"pass"},
        {show:"Fall", value:"fail"},
        {show:"Hire", value:"hire"},
        {show:"Hold", value:"hold"},
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
    $("#searchPos input[type=checkbox]:checked").each(function() {
        positions.push($(this).val());
    });

    let statuses = [];
    $("#searchStatus input[type=checkbox]:checked").each(function() {
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


    function fetchCandidates() {
        let positions = [];
        $(".dropdown-menu input[type=checkbox]:checked").each(function() {
            positions.push($(this).val());
        });
    
        let statuses = [];
        $("#searchStatus input[type=checkbox]:checked").each(function() {
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
            success: function(data) {
                $('#candidates').html(data);
            },
            error: function() {
                console.log('There was an error.');
            }
        });
    }
    

});

function search() {
    fetchCandidates()
}

function FetchPositionList() {
    $.ajax({
        url: '../../backend/HrviewList/fetchPositionList.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#searchPos').empty();
            
            $.each(data, function(key, position) {
                $('#searchPos').append('<label class="dropdown-item w-100"><input type="checkbox" value="' + key + '">' + position + '</label>');
            });
        },
        error: function() {
            console.log('There was an error.');
        }
    });
}
