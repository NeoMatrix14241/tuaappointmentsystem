  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });


/*
  document.querySelector(".inventory-form").addEventListener("submit", function(event) {
    event.preventDefault();
    
    // Get form values
    var itemId = document.getElementById("item_id").value;
    var itemName = document.getElementById("item_name").value;
    var itemDescription = document.getElementById("item_description").value;
    var quantity = document.getElementById("quantity").value;
    var expirationDate = document.getElementById("stock_date").value;
    var stockDate = document.getElementById("expiration_date").value;
    
    // Create table row
    var table = document.getElementById("inventory-table").getElementsByTagName("tbody")[0];
    var newRow = table.insertRow();
    newRow.innerHTML = "<td>" + itemId + "</td><td>" + itemName + "</td><td>" + itemDescription + "</td><td>" + quantity + "</td><td>" + stockDate + "</td>" + expirationDate + "</td>";
    
    // Clear form inputs
    document.getElementById("item_id").value = "";
    document.getElementById("item_name").value = "";
    document.getElementById("item_description").value = "";
    document.getElementById("quantity").value = "";
    document.getElementById("stock_date").value = "";
    document.getElementById("expiration_date").value = "";
});
*/

/*
document.getElementById("searchInput").addEventListener("keyup", function() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("inventory-table");
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
});
*/

$(document).ready(function(){
  $("#searchInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#inventory-table tbody tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
  });
});

/*
function redirectToLogin() {
    window.location.href = 'index.html';
  }

*/