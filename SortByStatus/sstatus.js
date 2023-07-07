$(document).ready(function() {
    fetchCandidates('new');
    document.getElementById("defs").classList.add("selected-button");


    $(".btn").click(function() { 
    $(".btn").removeClass("selected-button"); 
    $(".btn").removeClass("disabled"); 
    $(this).addClass("selected-button"); 
    var status = $(this).val(); 
        setBtn(status)
        fetchCandidates(status); 
    }); 

    function fetchCandidates(status) { 
    $.ajax({ 
        url: 'fetchCandidates.php',
        type: 'POST',
        data: { status: status },
        success: function(data) {
        $('#candidates').html(data);
        },
        error: function() {
        console.log('There was an error.');
        } 
    }); 
    } 

    function setBtn(value){
        if (value == "new"){
            document.getElementById("confirmbtn").innerText="Short-list"
        }
        if (value == "short_list"){
            document.getElementById("confirmbtn").innerText="Test"
        }
        if (value == "test"){
            document.getElementById("confirmbtn").innerText="Interview"
        }
        if (value == "scheduled_interview"){
            document.getElementById("confirmbtn").innerText="Pass"
            document.getElementById("confirmbtn").classList.add("disabled");
        }
        if (value == "interviewed"){
            document.getElementById("confirmbtn").innerText="Pass"
        }
    }
}); 


function test(){
    
}