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

function changePassword() {
  var oldPassword = document.getElementById("oldPassword").value;
  var newPassword = document.getElementById("newPassword").value;
  var confirmNewPassword = document.getElementById("confirmNewPassword").value;
  var message = document.getElementById("message");

  // Validate if old password is not empty and new password is at least 6 characters long
  if (oldPassword.trim() === "") {
    message.textContent = "Please enter your old password.";
    return;
  }
  
  if (newPassword.trim().length < 6) {
    message.textContent = "New password must be at least 6 characters long.";
    return;
  }
  
  if (newPassword !== confirmNewPassword) {
    message.textContent = "New passwords do not match.";
    return;
  }

  // Password change logic goes here...
  // Here you can implement logic to make an AJAX request to your server
  // and handle the password change process securely.

  // Display success message
  message.textContent = "Password changed successfully!";
}


function redirectToLogin() {
  window.location.href = 'index.html';
}
