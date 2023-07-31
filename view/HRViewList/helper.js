function LoadFile1() {
    if (file1str != "-") {
        var block = file1str.split(";");
        var contentType = block[0].split(":")[1];
        var realData = block[1].split(",")[1];
        var blob = b64toBlob(realData, contentType);

        var link = document.createElement("a");
        link.href = URL.createObjectURL(blob);
        link.download = "download." + getExtension(contentType);
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }else{
        alert("ไม่มีไฟล์");
    }
}

function LoadFile2() {
    if (file2str != "-") {
        var block = file2str.split(";");
        var contentType = block[0].split(":")[1];
        var realData = block[1].split(",")[1];
        var blob = b64toBlob(realData, contentType);

        var link = document.createElement("a");
        link.href = URL.createObjectURL(blob);
        link.download = "download." + getExtension(contentType);
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }else{
        alert("ไม่มีไฟล์");
    }
}

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


function downloadFiles() {
    CurApps = selectCandidate;
    var filesdata = [ 
        {name: "certi_data", data: CurApps.certi_data}, 
        {name: "house_data", data: CurApps.house_data}, 
        {name: "idcard_data", data: CurApps.idcard_data},
        {name: "photo_data", data: CurApps.photo_data}, 
        {name: "resume_data", data: CurApps.resume_data},
        {name: "transcript", data: CurApps.transcript}, 
        {name: "other", data: CurApps.other} 
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
    
    zip.generateAsync({ type: "blob" }).then(function(content) {
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

}