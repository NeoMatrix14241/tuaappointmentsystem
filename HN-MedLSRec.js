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




  function search() {
    var searchDate = document.getElementById("searchDate").value;
    var searchOutput = document.getElementById("searchOutput");
    // You can implement your search logic here
    // For demonstration, I'm just displaying the entered date
    searchOutput.innerHTML = "<p>You searched for: " + searchDate + "</p>";
    document.getElementById("results").style.display = "block";
}

function redirectToLogin() {
    window.location.href = 'index.html';
  }