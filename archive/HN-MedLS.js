let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e) => {
    let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
    arrowParent.classList.toggle("showMenu");
  });
}
let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".bx-menu");
console.log(sidebarBtn);
sidebarBtn.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});



// Function to add multiple empty rows to the table
function addInitialRows(numRows) {
  var table = document.getElementById("logTable").getElementsByTagName('tbody')[0];

  for (var j = 0; j < numRows; j++) {
    var newRow = table.insertRow();

    // Add cells for each column
    for (var i = 0; i < 8; i++) {
      var cell = newRow.insertCell(i);
      // Set the first cell (containing the row number) as non-editable
      if (i === 0) {
        cell.innerText = j + 1;
        cell.contentEditable = false; // Make the cell non-editable
      } else {
        cell.contentEditable = true; // Allow users to edit other cells
      }
    }
  }
}

// Call the addInitialRows function to add 20 empty rows initially
// addInitialRows(1);

// Function to add a new empty row to the table
function addEmptyRow() {
  var table = document.getElementById("logTable").getElementsByTagName('tbody')[0];
  var newRow = table.insertRow();

  // Add cells for each column
  for (var i = 0; i < 8; i++) {
    var cell = newRow.insertCell(i);
    // Set the first cell (containing the row number) as non-editable
    if (i === 0) {
      cell.innerText = table.rows.length; // Set the row number as the length of the table rows
      cell.contentEditable = false; // Make the cell non-editable
    } else {
      cell.contentEditable = true; // Allow users to edit other cells
    }
  }
}

// Add event listener to detect typing in the last cell of any row
document.addEventListener('input', function (event) {
  var target = event.target;
  var isLastCell = target.nodeName === 'TD' && !target.nextSibling;

  if (isLastCell && !target.innerText.trim()) {
    addEmptyRow();
  }
});



/*
// Function to add a new row to the table
function addRow() {
  var table = document.getElementById("logTable").getElementsByTagName('tbody')[0];
  var newRow = table.insertRow(); // Insert a new row at the end of the table

  // Add a class to the newly added row
  newRow.classList.add("new-row");

  // Add cells for each column in the new row
  for (var i = 0; i < 8; i++) {
    var cell = newRow.insertCell(i);
    cell.contentEditable = true; // Make the new cell editable
    // Add numbering to the first cell of the new row
    if (i === 0) {
      cell.innerText = table.rows.length; // Set the row number as the length of the table rows
    }
  }
}
addRow();
*/

/*
// Function to add a new row to the table
function addRow() {
  var table = document.getElementById("logTable").getElementsByTagName('tbody')[0];
  var newRow = table.insertRow(); // Insert a new row at the end of the table

  // Add a class to the newly added row
  newRow.classList.add("new-row");

  // Add cells for each column in the new row
  for (var i = 0; i < 8; i++) {
    var cell = newRow.insertCell(i);
    cell.contentEditable = true; // Make the new cell editable
    // Add numbering to the first cell of the new row
    if (i === 0) {
      cell.innerText = table.rows.length; // Set the row number as the length of the table rows
    } else if (i === 6) { // Quantity column
      cell.innerText = ""; // Leave the cell empty initially
      cell.addEventListener('keydown', function (event) {
        var key = event.key;
        // Check if the entered key is a number or a control key (like backspace)
        if (!isNaN(key) || ["Backspace", "ArrowLeft", "ArrowRight", "Delete"].includes(key)) {
          // Allow the input
        } else {
          // Prevent the input and show a pop-up message
          event.preventDefault();
          alert("Only numbers are allowed in the Quantity field.");
        }
      });
    }
  }
}
*/
// Function to fetch available medicines and populate the dropdown options
// Function to populate medicines dropdown for a specific cell
function addPlusButton(cell) {
  // Create a button element with a "+" icon
  var plusButton = document.createElement("button");
  plusButton.innerText = "+";
  plusButton.classList.add("plus-button");
  plusButton.type = "button";

  // Attach a click event listener to the button
  plusButton.addEventListener('click', function (event) {
      // Call populateMedicinesDropdown(cell) to regenerate the dropdown options
      populateMedicinesDropdown(cell);
      
      // Combine the newly selected options with the previously selected ones
      var newlySelectedOptions = selectedOptions;
      var row = cell.parentElement.parentElement;
      var medicineCell = row.cells[5]; // Medicine column index
      var existingOptions = medicineCell.innerText.split(", ");
      selectedOptions = existingOptions.concat(newlySelectedOptions);

      // Update the medicine cell content with the combined selected options
      updateMedicineCell();
  });

  // Append the button to the cell
  cell.appendChild(plusButton);
}

function populateMedicinesDropdown(cell) {
  var select = document.createElement("select");
  select.name = "medicineGiven";
  select.classList.add("medicine-dropdown");
  select.multiple = false;

  // Add an empty option as the default option
  var defaultOption = document.createElement("option");
  defaultOption.text = "Select Medicine";
  defaultOption.disabled = true;
  defaultOption.selected = false;
  select.appendChild(defaultOption);

  // Fetch medicines from the database using AJAX
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "server/get_available_medicines.php", true);
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      var medicines = JSON.parse(xhr.responseText);

      // Add each medicine as an option in the dropdown
      medicines.forEach(function (medicine) {
        var option = document.createElement("option");
        option.value = medicine; // Set option value to the medicine name
        option.text = medicine; // Set option text to the medicine name
        select.appendChild(option);
      });
    }
  };
  xhr.send();

  // Add change event listener to capture selected value and append to medicine cell
  select.addEventListener('change', function (event) {
    var selectedOptions = Array.from(this.selectedOptions).map(option => option.value);
    var row = this.parentElement.parentElement;
    var medicineCell = row.cells[5]; // Medicine column index

    if (selectedOptions.length > 0) {
      medicineCell.innerText = selectedOptions.join(", ");
    } else {
      // Reset the medicine cell if no options are selected
      medicineCell.innerText = "";
    }
  });



  // Append the dropdown to the cell
  cell.appendChild(select);

  // Add change event listener to capture selected value and set medicine cell value
  // Add change event listener to capture selected value and set medicine cell value

}



// Function to add a new row to the table
function addRow() {
  var table = document.getElementById("logTable").getElementsByTagName('tbody')[0];
  var newRow = table.insertRow(); // Insert a new row at the end of the table

  // Add a class to the newly added row
  newRow.classList.add("new-row");

  // Add cells for each column in the new row
  for (var i = 0; i < 8; i++) {
    var cell = newRow.insertCell(i);
    cell.contentEditable = true; // Make the new cell editable
    // Add numbering to the first cell of the new row
    if (i === 0) {
      cell.innerText = table.rows.length; // Set the row number as the length of the table rows
    } else if (i === 5) { // Medicine Given column
      populateMedicinesDropdown(cell);
    } else if (i === 6) { // Quantity column
      cell.innerText = ""; // Leave the cell empty initially
      cell.addEventListener('keydown', function (event) {
        var key = event.key;
        // Check if the entered key is a number or a control key (like backspace)
        if (!isNaN(key) || ["Backspace", "ArrowLeft", "ArrowRight", "Delete"].includes(key)) {
          // Allow the input
        } else {
          // Prevent the input and show a pop-up message
          event.preventDefault();
          alert("Only numbers are allowed in the Quantity field.");
        }
      });
    }
  }
}
addRow();



/*
function addInitialRowIfEmpty() {
  var table = document.getElementById("logTable").getElementsByTagName('tbody')[0];
  if (table.rows.length === 0) {
    addRow(); // Add a new row if the table is empty
  } else {
    addRow();
  }
}
addInitialRowIfEmpty();
*/


// Add event listener to the "Add Row" button
document.getElementById("addRowBtn").addEventListener("click", addRow);






/*
// Function to save the data from the table to local storage
function saveData() {
  var table = document.getElementById("logTable");
  var data = [];
 
  // Loop through each row of the table
  for (var i = 1; i < table.rows.length; i++) { // Start from index 1 to skip the header row
    var row = table.rows[i];
    var rowData = [];
 
    // Loop through each cell of the row
    for (var j = 0; j < row.cells.length; j++) {
      var cell = row.cells[j];
      // Push the content of each cell into the rowData array
      rowData.push(cell.innerText);
    }
 
    // Push the rowData array into the data array
    data.push(rowData);
  }
 
  // Convert the data array to a JSON string and save it to local storage
  localStorage.setItem('tableData', JSON.stringify(data));
}
 
// Add event listener to the "Save Data" button
document.getElementById("saveDataBtn").addEventListener("click", saveData);
*/


function saveData() {
  var table = document.getElementById("logTable");
  var data = [];

  // Loop through each row of the table
  for (var i = 1; i < table.rows.length; i++) { // Start from index 1 to skip the header row
    var row = table.rows[i];

    // Check if the row has the "new-row" class
    if (row.classList.contains("new-row")) {
      var rowData = [];

      // Loop through each cell of the row
      for (var j = 0; j < row.cells.length; j++) {
        var cell = row.cells[j];
        // Push the content of each cell into the rowData array
        rowData.push(cell.innerText);
      }

      // Push the rowData array into the data array
      data.push(rowData);
    }
  }

  // If there are no valid rows to save, return without submitting
  if (data.length === 0) {
    console.log("No new data to save.");
    return;
  }

  // Convert the data array to a JSON string
  var jsonData = JSON.stringify(data);

  // Send data to PHP script using AJAX
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "server/save_medls.php", true);
  xhr.setRequestHeader("Content-Type", "application/json");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      console.log(xhr.responseText);
    }
  };
  xhr.send(jsonData);
}

// Add event listener to the "Save Data" button
document.getElementById("saveDataBtn").addEventListener("click", saveData);

document.addEventListener("DOMContentLoaded", function () {
  // Call the function to fetch and populate table data
  fetchDataAndPopulateTable();
});

function fetchDataAndPopulateTable() {
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "server/get_medls.php", true);
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      var data = JSON.parse(xhr.responseText);
      populateTable(data);
    }
  };
  xhr.send();
}

function populateTable(data) {
  var table = document.getElementById("logTable").getElementsByTagName('tbody')[0];
  // Clear existing table rows
  table.innerHTML = "";
  // Loop through the fetched data and create table rows and cells
  data.forEach(function (row, index) {
    var newRow = table.insertRow();
    newRow.insertCell(0).innerText = index + 1; // Row number
    newRow.insertCell(1).innerText = row.time;
    newRow.insertCell(2).innerText = row.college_dept;
    newRow.insertCell(3).innerText = row.name;
    newRow.insertCell(4).innerText = row.chief_complaint;
    newRow.insertCell(5).innerText = row.given_meds;
    newRow.insertCell(6).innerText = row.quantity;
    newRow.insertCell(7).innerText = row.nurse_on_duty;
  });
  addRow();
}

/*
// Function to save the data from the table to HTML code
function saveDataToHTML() {
  var table = document.getElementById("logTable");
  var dataHTML = "";

  // Loop through each row of the table
  for (var i = 1; i < table.rows.length; i++) { // Start from index 1 to skip the header row
    var row = table.rows[i];

    // Construct HTML for each row
    dataHTML += "<tr>";
    for (var j = 0; j < row.cells.length; j++) {
      var cell = row.cells[j];
      // Append the content of each cell to the HTML string
      dataHTML += "<td>" + cell.innerText + "</td>";
    }
    dataHTML += "</tr>";
  }

  // Insert the generated HTML code into the specified element
  document.getElementById("searchOutput").innerHTML = "<table>" + dataHTML + "</table>";
}

// Add event listener to the "Save Data" button
document.getElementById("saveDataBtn").addEventListener("click", saveDataToHTML);








// Function to save all data from the table to HTML code
function saveDataToHTML() {
  var table = document.getElementById("logTable");
  var dataHTML = "";

  // Loop through each row of the table
  for (var i = 1; i < table.rows.length; i++) { // Start from index 1 to skip the header row
    var row = table.rows[i];

    // Get the data from each cell of the row
    var date = row.cells[0].innerText; // Assuming the date is in the first cell
    var data1 = row.cells[1].innerText; // Assuming data is in the second cell
    var data2 = row.cells[2].innerText; // Assuming data is in the third cell

    // Construct HTML for each row of data
    dataHTML += "<tr>";
    dataHTML += "<td>" + date + "</td>";
    dataHTML += "<td>" + data1 + "</td>";
    dataHTML += "<td>" + data2 + "</td>";
    dataHTML += "</tr>";
  }

  // Insert the generated HTML code into the specified element
  document.getElementById("insertDataHere").innerHTML = dataHTML;
}

// Add event listener to the "Save Data" button
document.getElementById("saveDataBtn").addEventListener("click", saveDataToHTML);




function redirectToLogin() {
  window.location.href = 'index.html';
}
*/