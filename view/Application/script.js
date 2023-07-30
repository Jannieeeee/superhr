function GetUserData() {
    return fetch('../../backend/Application/FetchPositionList.php', {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json'
        }
    })
        .then(response => response.json())
        .catch(error => console.error('Error:', error));
}

function fetchpos1(data) {
    var select = document.getElementById('pos1Selection');
    select.innerHTML = '<option selected>Choose...</option>';
    for (var i = 0; i < data.length; i++) {
        var opt = document.createElement('option');
        opt.value = data[i].PositionID;
        opt.innerHTML = data[i].PositionName;
        select.appendChild(opt);
    }
}
function fetchpos2(data) {
    var select = document.getElementById('pos2Selection');
    select.innerHTML = '<option selected>Choose...</option>';
    for (var i = 0; i < data.length; i++) {
        var opt = document.createElement('option');
        opt.value = data[i].PositionID;
        opt.innerHTML = data[i].PositionName;
        select.appendChild(opt);
    }
}
async function setData() {
    try {
        var data = await GetUserData();
        console.log(data);
        fetchpos1(data);
        fetchpos2(data);
    } catch (error) {
        console.error('Error:', error);
    }
}

setData();

