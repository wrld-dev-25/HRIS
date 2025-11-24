
/*
Template Name: gmail - Admin & Dashboard Template
Author: Themesdesign
Website: https://themesdesign.in/
Contact: Themesdesign@gmail.com
File: apps hr employee init js
*/


/* if (document.querySelector("#profile-img-file-input")) {
    document.querySelector("#profile-img-file-input").addEventListener("change", function () {
        var preview = document.querySelector(".user-profile-image");
        var file = document.querySelector(".profile-img-file-input").files[0];
        var reader = new FileReader();
        reader.addEventListener(
            "load",
            function () {
                preview.src = reader.result;
            },
            false
        );
        if (file) {
            reader.readAsDataURL(file);
        }
    });
} */

/* //product list Table
var options = {
    valueNames: [
        'employeeCode',
        'name',
        'email',
        'cellphoneNumber',
        'division',
        'department',
        'position',
        'employmentType',
        'dateHired',
    ],
    page: 5,
    pagination: true,
    plugins: [
        ListPagination({
            left: 2,
            right: 2,
        }),
    ],
}; */

// event Litinor on dropdown
/* function eventListenerDropdown1(event, subitem, item, place) {
    subitem.classList.toggle("show");
    var popper = Popper.createPopper(subitem, item.querySelector("#employeeTable .dropdown-menu"), {
        placement: place
    });

    if (subitem.classList.contains("show") != true) {
        item.querySelector("#employeeTable .dropdown-menu").classList.remove("block")
        item.querySelector("#employeeTable .dropdown-menu").classList.add("hidden")
    } else {
        dismissDropdownMenu()
        item.querySelector("#employeeTable .dropdown-menu").classList.add("block")
        item.querySelector("#employeeTable .dropdown-menu").classList.remove("hidden")
        if (item.querySelector("#employeeTable .dropdown-menu").classList.contains("block")) {
            subitem.classList.add("show")
        } else {
            subitem.classList.remove("show")
        }
        event.stopPropagation();
    }
} */
// manage dropdown-menu
/* function dismissDropdownMenu() {
    Array.from(document.querySelectorAll("#employeeTable .dropdown-menu")).forEach(function (item) {
        item.classList.remove("block")
        item.classList.add("hidden")
    });
    Array.from(document.querySelectorAll(".dropdown-toggle")).forEach(function (item) {
        item.classList.remove("show")
    });
} */

// manage dropdown-menu event removed
/* function dropdownEvent1(elem, place, isRemove = null) {
    if (isRemove) {
        elem.forEach(function (item) {
            item.removeEventListener('click', eventListenerDropdown1);
        });
    } else {
        Array.from(elem).forEach(function (item) {
            item.querySelectorAll(".dropdown-toggle").forEach(function (subitem) {
                subitem.addEventListener("click", function (event) {
                    eventListenerDropdown1(event, subitem, item, place)
                });
            });
        });
    }
} */

// update Dropdown
/* function updateDropdown() {
    setTimeout(() => {
        drawerSetting()
        // pagination change
        var allElements = document.querySelectorAll('#employeeTable .dropdown');

        // Filter elements that do not have a click event listener
        var elementsWithoutClickListener = Array.from(allElements).filter(function (element) {
            return !element.onclick;
        });

        if (elementsWithoutClickListener) {
            dropdownEvent1(elementsWithoutClickListener, 'bottom-start', true)
        }
        // end remove listeners

        dropdownEvent1(elementsWithoutClickListener, 'bottom-start')

    }, 250);
} */

// json data get
/* var employeeList = [
    {
        "id": 1,
        "employeeCode": "#TWE1001528",
        "name": "Willie Torres",
        "img": "assets/images/users/user-1.jpg",
        "email": "willie@gmail.com",
        "cellphoneNumber": "070 3715 3689",
        "dateHired": "05 Feb, 2020"
    },
    {
        "id": 2,
        "employeeCode":  "#TWE1001524",
        "name": "Patricia Garcia",
        "img": "assets/images/users/user-2.jpg",
        "email": "PatriciaJGarcia@gmail.com",
        "cellphoneNumber": "077 7317 7572",
        "dateHired": "12 Aug, 2023"
    },
    {
        "id": 3,
        "employeeCode":  "#TWE1001506",
        "name": "Tonya Johnson",
        "img": "assets/images/users/user-3.jpg",
        "email": "TonyaEJohnson@gmail.com",
        "cellphoneNumber": "079 2383 2340",
        "dateHired": "11 Nov, 2023"
    },
    {
        "id": 4,
        "employeeCode":  "#TWE1001502",
        "name": "Jose White",
        "img": "assets/images/users/user-4.jpg",
        "email": "ameida@gmail.com",
        "cellphoneNumber": "03476 56 14 12",
        "dateHired": "09 Jun, 2022"
    },
    {
        "id": 5,
        "employeeCode":  "#TWE1001503",
        "name": "Juliette Fecteau",
        "img": "assets/images/users/user-1.jpg",
        "email": "JulietteFecteau@gmail.com",
        "cellphoneNumber": "07231 96 25 88",
        "dateHired": "11 May, 2021"
    },
    {
        "id": 6,
        "employeeCode":  "#TWE1001504",
        "name": "Jonas Frederiksen",
        "img": "assets/images/users/user-2.jpg",
        "email": "jonas@gmail.com",
        "cellphoneNumber": "61 53 62 05",
        "dateHired": "18 Jan, 2019"
    },
    {
        "id": 7,
        "employeeCode":  "#TWE1001505",
        "name": "Kim Broberg",
        "img": "assets/images/users/user-4.jpg",
        "email": "KimBroberg@gmail.com",
        "cellphoneNumber": "040 382 2096",
        "dateHired": "23 April, 2021"
    },
    {
        "id": 8,
        "employeeCode":  "#TWE1001507",
        "name": "Nancy Reynolds",
        "img": "assets/images/users/user-1.jpg",
        "email": "NancyM@gmail.com",
        "cellphoneNumber": "0391 13 79 21",
        "dateHired": "01 July, 2022"
    },
    {
        "id": 9,
        "employeeCode":  "#TWE1001508",
        "name": "Thomas Hatfield",
        "img": "assets/images/users/user-2.jpg",
        "email": "thomas@gmail.com",
        "cellphoneNumber": "0911 47 65 49",
        "dateHired": "08 Aug, 2021"
    },
    {
        "id": 10,
        "employeeCode":  "#TWE1001509",
        "name": "Holly Kavanaugh",
        "img": "assets/images/users/user-3.jpg",
        "email": "HollyKavanaugh@gmail.com",
        "cellphoneNumber": "819 947 5846",
        "dateHired": "23 Dec, 2020"
    },
    {
        "id": 11,
        "employeeCode":  "#TWE1001510",
        "name": "Kim Broberg",
        "img": "assets/images/users/user-4.jpg",
        "email": "KimBroberg@gmail.com",
        "cellphoneNumber": "040 382 2096",
        "dateHired": "23 April, 2021"
    },
    {
        "id": 12,
        "employeeCode":  "#TWE1001511",
        "name": "Juliette Fecteau",
        "img": "assets/images/users/user-1.jpg",
        "email": "JulietteFecteau@gmail.com",
        "cellphoneNumber": "07231 96 25 88",
        "dateHired": "11 May, 2021"
    }
] */

// employee Table get
/* var employeeTable = new List("employeeTable", options).on("updated", function (list) {
    // noresult show or hidden
    if (document.getElementsByClassName("noresult") && document.getElementsByClassName("noresult")[0]) {
        list.matchingItems.length == 0 ?
            (document.getElementsByClassName("noresult")[0].style.display = "block") :
            (document.getElementsByClassName("noresult")[0].style.display = "none");

        if (list.matchingItems.length > 0) {
            document.getElementsByClassName("noresult")[0].style.display = "none";
        } else {
            document.getElementsByClassName("noresult")[0].style.display = "block";
        }
    }

    // length get of list
    var isFirst = list.i == 1;
    var isLast = list.i > list.matchingItems.length - list.page;

    // make the Prev and Nex buttons disabled on first and last pages accordingly
    document.querySelector(".pagination-prev.disabled") ?
        document.querySelector(".pagination-prev.disabled").classList.remove("disabled") : "";
    document.querySelector(".pagination-next.disabled") ?
        document.querySelector(".pagination-next.disabled").classList.remove("disabled") : "";
    // pagination code
    if (isFirst) {
        document.querySelector(".pagination-prev").classList.add("disabled");
    }
    if (isLast) {
        document.querySelector(".pagination-next").classList.add("disabled");
    }
    // show total numbers of records
    const totalEmploysElement = document.querySelector(".total-Employs");
    const totalRecordsElement = employeeTable.listContainer.querySelector(".total-records");
    const showingElement = employeeTable.listContainer.querySelector(".showing");

    if (totalEmploysElement) totalEmploysElement.innerHTML = employeeTable.items.length;
    if (totalRecordsElement) totalRecordsElement.innerHTML = employeeTable.items.length;

    if (showingElement) showingElement.innerHTML = employeeTable.visibleItems.length;
    document.querySelector(".pagination-next").addEventListener("click", function () {
        document.querySelector(".pagination.listjs-pagination") ?
            document.querySelector(".pagination.listjs-pagination").querySelector(".active") && document.querySelector(".pagination.listjs-pagination").querySelector(".active").nextElementSibling != null ?
                document.querySelector(".pagination.listjs-pagination").querySelector(".active").nextElementSibling.children[0].click() : "" : "";
    });

    document.querySelector(".pagination-prev").addEventListener("click", function () {
        document.querySelector(".pagination.listjs-pagination") ?
            document.querySelector(".pagination.listjs-pagination").querySelector(".active") && document.querySelector(".pagination.listjs-pagination").querySelector(".active").previousSibling != null ?
                document.querySelector(".pagination.listjs-pagination").querySelector(".active").previousSibling.children[0].click() : "" : "";
    });
    // end pagination code

    //lode js in package
    lucide.createIcons();
    
    //collapseComponent();
    //refreshCallbacks();
}); */


// Employee Init list
/* function loadFileData(datas) {
    document.querySelector("#employeeList").innerHTML = '';
    var cnt = 11;

    // data init
    Array.from(datas).forEach(function (element, index) {
        cnt++;
        employeeTable.add({
            employeeCode: `<a href="#!" class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">${element.employeeCode}</a>`,
            name: `<a href="#!" class="flex items-center gap-3">
                <div div class="w-6 h-6 rounded-full shrink-0 bg-slate-100 dark:bg-zink-600">
                    <img src="`+ element.img + `" alt="" class="h-6 rounded-full">
                </div>
                <h6 class="grow">`+ element.name + `</h6>
            </a>`,
            email: element.email,
            cellphoneNumber: element.cellphoneNumber,
            dateHired: element.dateHired,
            Action: `<div class="flex gap-3">
                        <a class="flex items-center justify-center w-8 h-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:bg-custom-500/20 dark:hover:text-custom-500" href="pages-account.html"><i data-lucide="eye" class="inline-block w-3 h-3"></i> </a>
                        <a href="#!" data-modal-target="addEmployeeModal" class="edit-item-btn flex items-center justify-center w-8 h-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:bg-custom-500/20 dark:hover:text-custom-500"><i data-lucide="pencil" class="w-4 h-4"></i></a>
                        <a href="#!" data-modal-target="deleteModal" class="remove-item-btn flex items-center justify-center w-8 h-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:bg-custom-500/20 dark:hover:text-custom-500"><i data-lucide="trash-2" class="w-4 h-4"></i></a>
                    </div>`,
        });
        //data init end
        employeeTable.sort('employeeCode', { order: "desc" });
    });   
    employeeTable.remove("employeeCode", `<a href="#!" class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">#TWE1001501</a>`);
    
    // call function on package
    lucide.createIcons();
    
    collapseComponent();
    drawerSetting();
    paginationUpdateLink()
} */
/* setTimeout(() => {
    refreshCallbacks();
}, 1000); */
// load data function call
//loadFileData(employeeList);


//common Pagination Update Link function
/* function paginationUpdateLink() {

    // list js pagination called
    var pageLinks = document.querySelectorAll('#employeeTable .listjs-pagination .page');
    pageLinks.forEach(function (link) {
        link.addEventListener("click", updateDropdown);
    });
} */

var employeeCode = document.getElementById("employeeCode");
var firstName = document.getElementById("firstName");
var middleName = document.getElementById("middleName");
var lastName = document.getElementById("lastName");
var extension = document.getElementById("extension");
var birthDate = document.getElementById("birthDate");
var birthPlace = document.getElementById("birthPlace");
var age = document.getElementById("age");
var gender = document.getElementById("gender");
var civilStatus = document.getElementById("civilStatus");
var email = document.getElementById("email");
var zipCode = document.getElementById("zipCode");
var province = document.getElementById("province");
var telephoneNumber = document.getElementById("telephoneNumber");
var cellphoneNumber = document.getElementById("cellphoneNumber");
var presentBarangay = document.getElementById("presentBarangay");
var presentCity = document.getElementById("presentCity");
var sameAddress = document.getElementById("sameAddress");
var permanentBarangay = document.getElementById("permanentBarangay");
var permanentCity = document.getElementById("permanentCity");
var division = document.getElementById("division");
var department = document.getElementById("department");
var position = document.getElementById("position");
var employmentType = document.getElementById("employmentType");
var dateHired = document.getElementById("dateHired");
var employeeStatus = document.getElementById("employeeStatus");
var contractExpiryDate = document.getElementById("contractExpiryDate");
var dateSeparated = document.getElementById("dateSeparated");
var probationaryDate = document.getElementById("probationaryDate");
var regularizationDate = document.getElementById("regularizationDate");
var is_assignable = document.getElementById("is_assignable");
var editList = false;

// refresh call back data reload and get
document.querySelector(".add-employee").addEventListener("click", () => {
    clearFields();
    //var idRandom = Math.floor(Math.random() * 100000)
    //document.querySelector('#employeeCode').value ="#TWE10"+idRandom;
})
/* function refreshCallbacks() {
    // editBtns
    Array.from(document.querySelectorAll(".edit-item-btn")).forEach(function (elem) {
        elem.addEventListener('click', function (e) {
            e.target.closest("tr").children[0].innerText;
            itemId = e.target.closest("tr").children[0].innerText;
            var itemValues = employeeTable.get({
                id: `<a href="#!" class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">`+itemId+`</a>`,
            });
            Array.from(itemValues).forEach(function (x) {
                var isId = new DOMParser().parseFromString(x._values.ID, "text/html");
                var name = new DOMParser().parseFromString(x._values.Name, "text/html");
                var Name = name.querySelector('.grow').innerText;
                var selectedId = isId.body.querySelector("a").innerText.trim();
                
                if (selectedId == itemId) {


                    editList = true;
                    employeeCode.value = selectedId;
                    firstName.value = Name
                    email.value = x._values.Email
                    cellphoneNumber.value = x._values.Phone
                    locationInput.value = x._values.Country
                    joiningDateInput.value = x._values.JoinDate
                    experienceInput.value = x._values.Experience;
                    document.getElementById("addNew").innerHTML = "Update";
                    document.getElementById("addEmployeeLabel").innerHTML = "Edit Employee Data";
                    document.getElementById("create-form").classList.remove("was-validated");
                    document.querySelector("#id").value = selectedId;
                }
            });
        });
    });

    // add & edit modal value change
    document.getElementById("addEmployeeModal").addEventListener("show.bs.modal", function (e) {
        if (e.relatedTarget.classList.contains("edit-item-btn")) {
            document.getElementById("addEmployeeLabel").innerHTML = "Edit Employee";
            document.getElementById("addNew").innerHTML = "Update";
        } else if (e.relatedTarget.classList.contains("addEmployee")) {
            document.getElementById("addEmployeeLabel").innerHTML = "Add Employee";
            document.getElementById("addNew").innerHTML = "Add";
        } else {
            document.getElementById("addEmployeeLabel").innerHTML = "List Customer";
        }
    });

    // removeBtns
    Array.from(document.querySelectorAll(".remove-item-btn")).forEach(function (btn) {
        btn.addEventListener("click", function (e) {
            e.target.closest("tr").children[0].innerText;
            var removeitemId = e.target.closest("tr").children[0].innerText;
            var itemValues = employeeTable.get({
                id: `<a href="#!" class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">` + removeitemId + `</a>`,
            });
            Array.from(itemValues).forEach(function (x) {
                var deleteid = new DOMParser().parseFromString(x._values.ID, "text/html");
                var isdeleteid = deleteid.body.querySelector("a").innerText.trim();
                if (isdeleteid == removeitemId) {
                    document.getElementById("delete-record").addEventListener("click", function () {
                        employeeTable.remove("ID", deleteid.body.innerHTML);
                        document.getElementById("deleteRecord-close").click();
                    });
                }
            });
        });
    });

   
} */

// tablelist-form
var count = 11;
var itemId ;

var forms = $('.create-form');
forms.each(function() {
    $(this).on('submit', function(event) {
        event.preventDefault();
        var errorMsg = $("#alert-error-msg");
        // Define an array with all the required input fields and their corresponding error messages
        var requiredFields = [
            { input: $('#firstName'), error: "Please enter first name." },
            { input: $('#lastName'), error: "Please enter last name." },
            { input: $('#employeeCode'), error: "Please enter an employee code." },
            { input: $('#birthDate'), error: "Please enter birth date." },
            { input: $('#birthPlace'), error: "Please enter birth place." },
            { input: $('#age'), error: "Please enter age." },
            { input: $('#gender'), error: "Please select gender." },
            { input: $('#civilStatus'), error: "Please select civil status." },
            { input: $('#zipCode'), error: "Please enter zip code." },
            { input: $('#province'), error: "Please select province." },
            /* { input: $('#cellphoneNumber'), error: "Please enter cellphone number." }, */
            { input: $('#presentBarangay'), error: "Please enter street/barangay." },
            { input: $('#presentCity'), error: "Please enter town/city." },
            { input: $('#division'), error: "Please select division." },
            { input: $('#department'), error: "Please select department." },
            { input: $('#position'), error: "Please select position." },
            { input: $('#employmentType'), error: "Please select employment type." },
            // { input: $('#dateHired'), error: "Please enter date hired." },
            { input: $('#employeeStatus'), error: "Please select employee status." }
        ];

        let allFieldsValid = true;
        // Check each required input field to see if it has a value
        $.each(requiredFields, function(index, field) {
            if (allFieldsValid && $.trim(field.input.val()) === "") {
                // The field is empty, so show the error message and mark allFieldsValid as false
                errorMsg.html(field.error);
                field.input.addClass("is-invalid");
                allFieldsValid = false;
                errorMsg.removeClass("hidden");
                setTimeout(function() {
                    errorMsg.addClass("hidden");
                }, 4000);
            } else {
                // The field has a value, so remove the error message and mark the field as valid
                field.input.removeClass("is-invalid");
            }
        });
        
        // date & time
        if (!editList && allFieldsValid) {
            console.log('All Fields are valid and ready for processing');
            // add new event
            this.submit();
        } else if (editList && allFieldsValid) {
            console.log('Complete all fields before submitting');
            // Edit list actions
        }

        lucide.createIcons();
        
        //collapseComponent();
        //drawerSetting();
        //paginationUpdateLink();
        //refreshCallbacks();
        return true;
    });
});

var updateForms = $('.editEmployeeForm');
updateForms.each(function() {
    $(this).on('submit', function(event) {
        //console.log('Submitted');
        event.preventDefault();
        var errorMsg = $(".editEmployeeForm #alert-error-msg");
        // Define an array with all the required input fields and their corresponding error messages
        var requiredFields = [
            { input: $('.editEmployeeForm #firstName'), error: "Please enter first name." },
            { input: $('.editEmployeeForm #lastName'), error: "Please enter last name." },
            { input: $('.editEmployeeForm #employeeCode'), error: "Please enter an employee code." },
            { input: $('.editEmployeeForm #birthDate'), error: "Please enter birth date." },
            { input: $('.editEmployeeForm #birthPlace'), error: "Please enter birth place." },
            { input: $('.editEmployeeForm #age'), error: "Please enter age." },
            { input: $('.editEmployeeForm #gender'), error: "Please select gender." },
            { input: $('.editEmployeeForm #civilStatus'), error: "Please select civil status." },
            { input: $('.editEmployeeForm #zipCode'), error: "Please enter zip code." },
            { input: $('.editEmployeeForm #province'), error: "Please select province." },
            /* { input: $('#cellphoneNumber'), error: "Please enter cellphone number." }, */
            { input: $('.editEmployeeForm #presentBarangay'), error: "Please enter street/barangay." },
            { input: $('.editEmployeeForm #presentCity'), error: "Please enter town/city." },
            { input: $('.editEmployeeForm #division2'), error: "Please select division." },
            { input: $('.editEmployeeForm #department2'), error: "Please select department." },
            { input: $('.editEmployeeForm #position'), error: "Please select position." },
            { input: $('.editEmployeeForm #employmentType'), error: "Please select employment type." },
            // { input: $('.editEmployeeForm #dateHired'), error: "Please enter date hired." },
            { input: $('.editEmployeeForm #employeeStatus'), error: "Please select employee status." }
        ];
        
        let allFieldsValid = true;
        // Check each required input field to see if it has a value
        $.each(requiredFields, function(index, field) {
            if (allFieldsValid && $.trim(field.input.val()) === "") {
                // The field is empty, so show the error message and mark allFieldsValid as false
                errorMsg.html(field.error);
                field.input.addClass("is-invalid");
                allFieldsValid = false;
                errorMsg.removeClass("hidden");
                setTimeout(function() {
                    errorMsg.addClass("hidden");
                }, 4000);
            } else {
                // The field has a value, so remove the error message and mark the field as valid
                field.input.removeClass("is-invalid");
            }
        });
        
        // date & time
        if (!editList && allFieldsValid) {
            console.log('All Fields are valid and ready for processing');
            // add new event
            this.submit();
        } else if (editList && allFieldsValid) {
            console.log('Complete all fields before submitting');
            // Edit list actions
        }

        lucide.createIcons();
        
        //collapseComponent();
        //drawerSetting();
        //paginationUpdateLink();
        //refreshCallbacks();
        return true;
    });
});

// tablelist form submit event
/* var forms = document.querySelectorAll('.create-form')
Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener('submit', function (event) {
        event.preventDefault();
        var errorMsg = document.getElementById("alert-error-msg");
        // Define an array with all the required input fields and their corresponding error messages
        const requiredFields = [
            { input: firstName, error: "Please enter first name." },
            { input: lastName, error: "Please enter last name." },
            { input: employeeCode, error: "Please enter a employee code." },
            { input: birthDate, error: "Please enter birth date." },
            { input: birthPlace, error: "Please enter birth place." },
            { input: age, error: "Please enter age." },
            { input: gender, error: "Please select gender." },
            { input: civilStatus, error: "Please select civil status." },
            { input: zipCode, error: "Please enter zip code." },
            { input: province, error: "Please select province." },
            { input: cellphoneNumber, error: "Please enter cellphone number." },
            { input: presentBarangay, error: "Please enter street/barangay." },
            { input: presentCity, error: "Please enter town/city." },
            { input: division, error: "Please select division." },
            { input: department, error: "Please select department." },
            { input: position, error: "Please select position." },
            { input: employmentType, error: "Please select employment type." },
            { input: dateHired, error: "Please enter date hired." },
            { input: employeeStatus, error: "Please select employee status." },
        ];

        let allFieldsValid = true;
        // Check each required input field to see if it has a value
        requiredFields.forEach(function (field) {
            if (allFieldsValid && field.input.value.trim() === "") {
                // The field is empty, so show the error message and mark allFieldsValid as false
                errorMsg.innerHTML = field.error;
                field.input.classList.add("is-invalid");
                allFieldsValid = false;
                errorMsg.classList.remove("hidden");
                setTimeout(() => errorMsg.classList.add("hidden"), 4000);
            } else {
                // The field has a value, so remove the error message and mark the field as valid
                field.input.classList.remove("is-invalid");
            }
        });
        
        // date & time
        if (!editList && allFieldsValid) {
            console.log('All Fields are valid and ready for processing');
            // add new event           
        } else if (editList && allFieldsValid) {

        }
        
        // call function on package
        lucide.createIcons();
        
        collapseComponent();
        drawerSetting();
        paginationUpdateLink();
        refreshCallbacks();
        return true;
    });

}); */

// Clear
function clearFields() {
    /* editList = false;
    firstName.value = "";
    email.value = "";
    cellphoneNumber.value = "";
    locationInput.value = "";
    experienceInput.value = "";
    joiningDateInput.value = ""; */
}

/* presentBarangay.addEventListener('change', function () {
    permanentBarangay.value=presentBarangay.value.trim()
})

presentCity.addEventListener('change', function () {
    permanentCity.value = presentCity.value.trim()
    console.log(this.value.trim())
})

sameAddress.addEventListener('change', function() {
    if (this.checked) {
        permanentBarangay.disabled = true
        permanentBarangay.required = false
        permanentBarangay.value=presentBarangay.value.trim()
        permanentCity.disabled = true
        permanentCity.required = false
        permanentCity.value = presentCity.value.trim()
    } else {
        permanentBarangay.disabled = false
        permanentBarangay.required = true
        permanentBarangay.value=''
        permanentCity.disabled = false
        permanentCity.required = true
        permanentCity.value = ''
    }    
}); */

// function for age calculation using class
document.addEventListener('DOMContentLoaded', function () {
    // Add an event listener to all elements with the class 'birth-date'
    document.querySelectorAll('.edit-birth-date').forEach(function (birthDateField) {
        birthDateField.addEventListener('change', function () {
            const birthDateValue = this.value; // Get the value of the birth date field
            const ageField = this.closest('form').querySelector('.age'); // Find the corresponding age field in the same form

            if (birthDateValue) {
                const age = calculateAge(birthDateValue); // Calculate the age
                if (ageField) {
                    ageField.value = age; // Set the calculated age in the age field
                    console.log(ageField.value)
                }
            }
        });
    });

    document.querySelectorAll('.add-birth-date').forEach(function (birthDateField) {
        birthDateField.addEventListener('change', function () {
            const birthDateValue = this.value; // Get the value of the birth date field
            const ageField = this.closest('form').querySelector('.age'); // Find the corresponding age field in the same form

            if (birthDateValue) {
                const age = calculateAge(birthDateValue); // Calculate the age
                if (ageField) {
                    ageField.value = age; // Set the calculated age in the age field
                    console.log(ageField.value)
                }
            }
        });
    });
});

// Function to calculate age based on the birth date
function calculateAge(birthDate) {
    const today = new Date();
    const birthDateObj = new Date(birthDate);
    let age = today.getFullYear() - birthDateObj.getFullYear();
    const monthDiff = today.getMonth() - birthDateObj.getMonth();

    // Adjust age if the birth date hasn't occurred yet this year
    if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDateObj.getDate())) {
        age--;
    }

    return age;
}
