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


// Function to handle form submission for searching patients
function searchPatients() {
    // Access form field
    var IDNumber = document.getElementById("IDNumber").value;

    // Validate form field if needed

    // Process the form data for searching patients
    console.log('Search form submitted');
    console.log('Student Number:', IDNumber);
}

function redirectToLogin() {
    window.location.href = 'index.html';
  }