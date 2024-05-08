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

let table = new DataTable('#logTable');

$(document).ready(function () {
  function updateTime() {
    var currentDate = new Date();
    var month = currentDate.getMonth() + 1;
    var day = currentDate.getDate();
    var year = currentDate.getFullYear();
    var hours = currentDate.getHours();
    var minutes = currentDate.getMinutes();
    var seconds = currentDate.getSeconds();
    var ampm = hours >= 12 ? 'PM' : 'AM';
    hours = hours % 12;
    hours = hours ? hours : 12; // Handle midnight (0 hours)

    var dateString = (month < 10 ? '0' : '') + month + '/' + (day < 10 ? '0' : '') + day + '/' + year;
    var timeString = (hours < 10 ? '0' : '') + hours + ':' + (minutes < 10 ? '0' : '') + minutes + ':' + (seconds < 10 ? '0' : '') + seconds + ' ' + ampm;

    $('#time').val(dateString + ' - ' + timeString);
  }
  updateTime(); // Call once to set initial value
  setInterval(updateTime, 1000); // Update every second
});

/*
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
  addInitialRows(20);
  
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
  document.addEventListener('input', function(event) {
    var target = event.target;
    var isLastCell = target.nodeName === 'TD' && !target.nextSibling;
  
    if (isLastCell && !target.innerText.trim()) {
        addEmptyRow();
    }
  });




  // Function to add a new row to the table
function addRow() {
    var table = document.getElementById("logTable").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(); // Insert a new row at the end of the table
    
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
  
  // Add event listener to the "Add Row" button
  document.getElementById("addRowBtn").addEventListener("click", addRow);






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