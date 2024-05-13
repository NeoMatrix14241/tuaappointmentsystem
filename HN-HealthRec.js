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



function redirectToLogin() {
  // Set the default password
  const defaultPassword = "changeMe123!";
}


function redirectToLogin() {
  window.location.href = 'index.html';
}

function generateRandomPassword(length) {
  const charset = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+";

  let password = "";
  for (let i = 0; i < length; i++) {
    const randomIndex = Math.floor(Math.random() * charset.length);
    password += charset[randomIndex];
  }

  return password;
}

window.onload = function () {
  const generatedPasswordInput = document.getElementById("gen_key");
  const generatedPasswordLength = 8; // Change the length as needed
  generatedPasswordInput.value = generateRandomPassword(generatedPasswordLength);
};

document.getElementById("pass_gen").addEventListener("click", function () {
  const generatedPasswordInput = document.getElementById("gen_key");
  const generatedPasswordLength = 8; // Change the length as needed
  generatedPasswordInput.value = generateRandomPassword(generatedPasswordLength);
});


// Cross-checking checkboxes and radio buttons
document.getElementById('dpt_opv').addEventListener('change', function () {
  var radios = document.querySelectorAll('input[name="dpt_opv_radio"]');
  radios.forEach(function (radio) {
    radio.disabled = !this.checked;
    radio.checked = false; // Uncheck all radio buttons when the checkbox state changes
  }, this);
});

document.getElementById('hib').addEventListener('change', function () {
  var radios = document.querySelectorAll('input[name="hib_radio"]');
  radios.forEach(function (radio) {
    radio.disabled = !this.checked;
    if (!this.checked) {
      radio.checked = false; // Uncheck all radio buttons when the checkbox is unchecked
    }
  }, this);
});

document.getElementById('hepaA').addEventListener('change', function () {
  var radios = document.querySelectorAll('input[name="hepaA_radio"]');
  radios.forEach(function (radio) {
    radio.disabled = !this.checked;
    radio.checked = false; // Uncheck all radio buttons when the checkbox state changes
  }, this);
});

document.getElementById('hepaB').addEventListener('change', function () {
  var radios = document.querySelectorAll('input[name="hepaB_radio"]');
  radios.forEach(function (radio) {
    radio.disabled = !this.checked;
    radio.checked = false; // Uncheck all radio buttons when the checkbox state changes
  }, this);
});
