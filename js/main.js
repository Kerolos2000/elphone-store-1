// hover in btn
let mouse;
let btn = document.querySelector(
  ".mouse-cursor-gradient-tracking, .mouse-cursor-1, .mouse-cursor-2"
);
btn.addEventListener("mousemove", (mouse) => {
  let rect = mouse.target.getBoundingClientRect();
  let x = mouse.clientX - rect.left;
  let y = mouse.clientY - rect.top;
  btn.style.setProperty("--x", x + "px");
  btn.style.setProperty("--y", y + "px");
});

// validation for form
(function () {
  "use strict";
  var forms = document.querySelectorAll(".needs-validation");
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add("was-validated");
      },
      false
    );
  });
})();

// function to eye icon
function myFunction() {
  var x = document.getElementById("typePasswordX");
  var y = document.getElementById("color");
  if (x.type === "password") {
    x.type = "text";
    document.getElementById("color").innerHTML =
      '<i class="fas fa-eye-slash"></i>';
  } else {
    x.type = "password";
    document.getElementById("color").innerHTML =
      '<i class="fa-solid fa-eye"></i>';
  }
}

function myFunction1() {
  var x = document.getElementById("typePasswordX1");

  if (x.type === "password") {
    x.type = "text";
    document.getElementById("color1").innerHTML =
      '<i class="fas fa-eye-slash"></i>';
  } else {
    x.type = "password";
    document.getElementById("color1").innerHTML =
      '<i class="fa-solid fa-eye"></i>';
  }
}
// check confirm password
var password = document.getElementById("typePasswordX"),
  confirm_password = document.getElementById("typePasswordX1");
function validatePassword() {
  if (password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity("");
  }
}
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
