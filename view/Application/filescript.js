var file1;
var file2;
var file3;
var file4;
var file5;
var file6;
var file7;
document.getElementById('transcriptUpload').addEventListener('change', function() {
    var reader = new FileReader();
    reader.onloadend = function() {
        file1 = reader.result.replace(/^data:(.*?);base64,/, '');
    }
    reader.readAsDataURL(this.files[0]);
});
document.getElementById('resumeUpload').addEventListener('change', function() {
    var reader = new FileReader();
    reader.onloadend = function() {
        file2 = reader.result.replace(/^data:(.*?);base64,/, '');
    }
    reader.readAsDataURL(this.files[0]);
});
document.getElementById('houseUpload').addEventListener('change', function() {
    var reader = new FileReader();
    reader.onloadend = function() {
        file3 = reader.result.replace(/^data:(.*?);base64,/, '');
    }
    reader.readAsDataURL(this.files[0]);
});
document.getElementById('idcardUpload').addEventListener('change', function() {
    var reader = new FileReader();
    reader.onloadend = function() {
        file4 = reader.result.replace(/^data:(.*?);base64,/, '');
    }
    reader.readAsDataURL(this.files[0]);
});
document.getElementById('photoUpload').addEventListener('change', function() {
    var reader = new FileReader();
    reader.onloadend = function() {
        file5 = reader.result.replace(/^data:(.*?);base64,/, '');
    }
    reader.readAsDataURL(this.files[0]);
});
document.getElementById('certiUpload').addEventListener('change', function() {
    var reader = new FileReader();
    reader.onloadend = function() {
        file6 = reader.result.replace(/^data:(.*?);base64,/, '');
    }
    reader.readAsDataURL(this.files[0]);
});
document.getElementById('otherUpload').addEventListener('change', function() {
    var reader = new FileReader();
    reader.onloadend = function() {
        file7 = reader.result.replace(/^data:(.*?);base64,/, '');
    }
    reader.readAsDataURL(this.files[0]);
});
