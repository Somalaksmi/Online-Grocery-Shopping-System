// Next id for adding a new Product
var nextId = 1;
// ID of list currently editing
var activeId = 0;


function listDisplay(ctl) {
    var row = $(ctl).parents("tr");
    var cols = row.children("td");

    activeId = $($(cols[0]).children("button")[0]).data("id");
    $("#listnamef").val($(cols[1]).text());
    $("#listdesf").val($(cols[2]).text());

    // Change Update Button Text
    $("#updateButton").text("Update");
}

function listUpdate() {
    if ($("#updateButton").text() == "Update") {
        listUpdateInTable(activeId);
    } else {
        listAddToTable();
    }

    // Clear form fields
    formClear();

    // Focus to list name field
    $("#listnamef").focus();
}

// Add list to <table>
function listAddToTable() {
    // First check if a <tbody> tag exists, add one if not
    if ($("#listTable tbody").length == 0) {
        $("#listTable").append("<tbody></tbody>");
    }

    // Append list to table
    $("#listTable tbody").append(
        listBuildTableRow(nextId));

    // Increment next ID to use
    nextId += 1;
}

// Update list in <table>
function listUpdateInTable(id) {
    // Find list in <table>
    var row = $("#listTable button[data-id='" + id + "']")
        .parents("tr")[0];

    // Add changed list to table
    $(row).after(listBuildTableRow(id));
    // Remove original product
    $(row).remove();

    // Clear form fields
    formClear();

    // Change Update Button Text
    $("#updateButton").text("Add");
}

// Build a <table> row of list data
function listBuildTableRow(id) {
    var ret =
        "<tr>" +
        "<td>" +
        "<button type='button' " +
        "onclick='listDisplay(this);' " +
        "class='btn btn-default' " +
        "data-id='" + id + "'>" +
        "<img src='edit-i.png' width='30px' height='30px'> " +
        "</button>" +
        "</td>" +
        "<td>" + $("#listnamef").val() + "</td>" +
        "<td>" + $("#listdesf").val() + "</td>" +
        "<td>" +
        "<button type='button' " +
        "onclick='listView(this);' " +
        "class='btn btn-default' " +
        "data-id='" + id + "'data-bs-toggle='modal' data-bs-target='#listModal' data-bs-backdrop='static' onclick='viewList()' > " +
        "<img src='view-i.png' width='30px' height='30px' > " +
        "</button>" +
        "</td>" +
        "<td>" +
        "<button type='button' " +
        "onclick='listDelete(this);' " +
        "class='btn btn-default' " +
        "data-id='" + id + "'>" +
        "<img src='delete-i.png' width='30px' height='30px'> " +
        "</button>" +
        "</td>" +
        "</tr>"

    return ret;
}

function viewList() {

    var listnamef = document.querySelector('#listnamef');
    var listName = document.querySelector('#listName');

    listName.textContent = document.getElementById("listnamef").value;
}

// Delete list from <table>
function listDelete(ctl) {
    $(ctl).parents("tr").remove();
}

// Clear form fields
function formClear() {
    $("#listnamef").val("");
    $("#listdesf").val("");
}