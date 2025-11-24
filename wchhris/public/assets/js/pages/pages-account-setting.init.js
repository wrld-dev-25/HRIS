/*
Template Name: Tailwick - Admin & Dashboard Template
Author: Themesdesign
Website: https://themesdesign.in/
Contact: Themesdesign@gmail.com
File: pages account setting init js
*/

// Profile Foreground Img
if (document.querySelector("#profile-img-file-input")) {
    document.querySelector("#profile-img-file-input").addEventListener("change", function (event) {
        event.preventDefault(); // Prevent the default form submission behavior

        var preview = document.querySelector(".user-profile-image");
        var file = document.querySelector(".profile-img-file-input").files[0];
        var reader = new FileReader();
        var employeeRecordCode = document.querySelector("#employeeRecordCode").value;

        reader.addEventListener(
            "load",
            function () {
                preview.src = reader.result;
                addFileToEmployeeUploadFolder(file, employeeRecordCode);
            },
            false
        );

        if (file) {
            reader.readAsDataURL(file);
        }
    });
}

async function addFileToEmployeeUploadFolder(file, empCode) {

    if (!file) {
        console.error("No file selected");
        return;
    }

    var formData = new FormData();
    formData.append("attachment", file);
    formData.append("empCode", empCode);
    formData.append("fileSize", file.size);

    try {
        let response = await fetch('/upload-profile-picture', {
            method: 'POST',
            body: formData
        });

        if (response.ok) {
            let jsonResponse = await response.json();
            console.log('File uploaded successfully:', jsonResponse);
            let filePath = jsonResponse.filePath;
            console.log('triggered')
            uploadProfileImageToAPI(filePath);
        } else {
            console.error('File upload failed:', response.statusText);
        }
    } catch (error) {
        console.error('Error uploading file:', error);
    }
}

async function uploadProfileImageToAPI(filePath) {
    console.log('triggered')
    var employeeRecordId = document.querySelector("#empId").value;
    let jsonObjectDate = {
        "profile_photo_path": filePath,
    };
    var addProfilePath = await apiCall('POST', 'api/employee/profile_photo_add/' + employeeRecordId, jsonObjectDate);
    console.log(addProfilePath);
}
