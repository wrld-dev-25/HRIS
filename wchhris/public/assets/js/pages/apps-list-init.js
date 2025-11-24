/*
Template Name: Tailwick - Admin & Dashboard Template
Author: Themesdesign
Version: 1.1.0
Website: https://themesdesign.in/
Contact: Themesdesign@gmail.com
File: apps user list init Js File
*/



/* subdivision list table */
var subdivisionOptions = {
    valueNames: [
        "code",
        "name",
        "location",
        "phaseNumber",
        "lot",
    ],
};

// Init list
/* var subdivisionTable = new List("subdivisionTable", subdivisionOptions).on("updated", function (list) {
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
}); */
/* subdivision list table end */

/* subdivision list table */
var columnNames = ["code", "name", "subdivision", "phase", "projectType", "location"]
paginateTable("onGoingProjectsTable", columnNames, 10);
/* subdivision list table end */

/* dashboard employee list table */
var dashboardOptions = {
    valueNames: [
        "code",
        "name",
        "division",
        "department",
        "position",
    ],
};

// Init list
var dashboardEmployee = new List("dashboardEmployee", dashboardOptions).on("updated", function (list) {
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
});
/* dashboard employee list table end */

/* division list table */
var projectOptions = {
    valueNames: [
        "code",
        "name",
        "subdivision",
        "phase",
        "location",
    ],
};

// Init list
/* var projectTable = new List("onGoingProjectsTable", projectOptions).on("updated", function (list) {
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
}); */
/* division list table end */

/* division list table */
var subdivisionOption = {
    valueNames: [
        "code",
        "name",
        "location",
        "no. of phase",
        "total no. of lots",
        "action",
    ],
};

// Init list
var subdivisionTable = new List("subdivisionTable", subdivisionOption).on("updated", function (list) {
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
});
/* division list table end */