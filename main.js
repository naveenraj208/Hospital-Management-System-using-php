let menu = document.querySelector('.menu')
let sidebar = document.querySelector('.sidebar')
let mainContent = document.querySelector('.main--content')
menu.onclick = function() {
    sidebar.classList.toggle('active')
    mainContent.classList.toggle('active')
}
function searchDoctors() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchBar");
    filter = input.value.toUpperCase();
    table = document.getElementById("doctorsTable");
    tr = table.getElementsByTagName("tr");

  
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0]; 
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
function confirmRemove(button) {
    var row = button.parentNode.parentNode;
    var doctorName = row.cells[0].textContent;

    if (confirm("Do you really want to remove Dr. " + doctorName + "?")) {
        row.remove();
    }
}
function openAddDoctorForm() {
    document.getElementById("addDoctorForm").style.display = "block";
}

function addDoctor() {
    var doctorForm = document.getElementById("doctorForm");

    // Get form values
    var doctorName = doctorForm.elements["doctorName"].value;
    var phoneNumber = doctorForm.elements["phoneNumber"].value;
    var mailId = doctorForm.elements["mailId"].value;
    var password = doctorForm.elements["password"].value;
    var ratings = doctorForm.elements["ratings"].value;
    var experience = doctorForm.elements["experience"].value;
    var department = doctorForm.elements["department"].value;

    // Create a new row
    var table = document.getElementById("doctorsTable").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.rows.length);
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);
    var cell6 = newRow.insertCell(5);
    var cell7 = newRow.insertCell(6);
    var cell8 = newRow.insertCell(7);
    
    cell1.innerHTML = doctorName;
    cell2.innerHTML = phoneNumber;
    cell3.innerHTML = mailId;
    cell4.innerHTML = password;
    cell5.innerHTML = ratings;
    cell6.innerHTML = experience;
    cell7.innerHTML = department;
    cell8.innerHTML = '<button class="remove-btn" onclick="confirmRemove(this)">Remove</button>';

   
    document.getElementById("addDoctorForm").style.display = "none";

   
    alert("Doctor successfully added!");
}
function confirmRemove(button) {
    var row = button.parentNode.parentNode;
    var pharmacistName = row.cells[0].textContent;

    if (confirm("Do you really want to remove Pharmacist " + pharmacistName + "?")) {
        row.remove();
    }
}
function confirmRemove(button) {
    var row = button.parentNode.parentNode;
    var pharmacistName = row.cells[0].textContent;

    if (confirm("Do you really want to remove Pharmacist " + pharmacistName + "?")) {
        row.remove();
    }
}

function searchPharmacists() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchBar");
    filter = input.value.toUpperCase();
    table = document.getElementById("pharmacistsTable");
    tr = table.getElementsByTagName("tr");

   
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0]; 
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
function confirmRemove(button) {
    var row = button.parentNode.parentNode;
    var pharmacistName = row.cells[0].textContent;

    if (confirm("Do you really want to remove Pharmacist " + pharmacistName + "?")) {
        row.remove();
    }
}

function searchPharmacists() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchBar");
    filter = input.value.toUpperCase();
    table = document.getElementById("pharmacistsTable");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those that don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0]; // Assuming pharmacist name is in the first column
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

function openAddPharmacistForm() {
    document.getElementById("addPharmacistForm").style.display = "block";
}

function addPharmacist() {
    var pharmacistForm = document.getElementById("pharmacistForm");

    // Get form values
    var pharmacistName = pharmacistForm.elements["pharmacistName"].value;
    var pharmacistPassword = pharmacistForm.elements["pharmacistPassword"].value;
    var pharmacistMail = pharmacistForm.elements["pharmacistMail"].value;

    // Create a new row
    var table = document.getElementById("pharmacistsTable").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.rows.length);
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);

    // Populate cells with form values
    cell1.innerHTML = pharmacistName;
    cell2.innerHTML = pharmacistPassword;
    cell3.innerHTML = pharmacistMail;
    cell4.innerHTML = '<button class="remove-btn" onclick="confirmRemove(this)">Remove</button>';

    // Hide the form
    document.getElementById("addPharmacistForm").style.display = "none";

    // Show success alert
    alert("Pharmacist successfully added!");
}
