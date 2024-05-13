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

  document.addEventListener("DOMContentLoaded", function () {
    const timeButtons = document.querySelectorAll('.timeButton');
    const appointmentForm = document.getElementById('appointmentForm');
    const dateInput = document.getElementById('date');

    // Add event listener to each time button
    timeButtons.forEach(button => {
        button.addEventListener('click', function () {
            // Set the value of the hidden time input field when a time button is clicked
            document.getElementById('time').value = this.value;
        });
    });

    // Event listener for form submission
    appointmentForm.addEventListener('submit', function (event) {
        // Check if time is selected
        if (document.getElementById('time').value === '') {
            alert('Please select a time.');
            event.preventDefault(); // Prevent form submission if time is not selected
        }
    });

    // Event listener for date input change
    dateInput.addEventListener('change', function () {
        disableWeekend();
    });
});

function disableWeekend() {
    var selectedDate = new Date(document.getElementById("date").value);
    var dayOfWeek = selectedDate.getDay();

    if (dayOfWeek === 5 || dayOfWeek === 6 || dayOfWeek === 0) {
        alert("Appointments are not available on Fridays, Saturdays, and Sundays. Please choose another date.");
        document.getElementById("date").value = "";
    }
}

function redirectToLogin() {
    window.location.href = 'index.html';
}
