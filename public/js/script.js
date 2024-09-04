const signinBtn = document.querySelector(".signinBtn");
const signupBtn = document.querySelector(".signupBtn");
const formBx = document.querySelector(".formBx");
const body = document.querySelector("body");

signupBtn.addEventListener("click", function () {
  formBx.classList.add("active");
  body.classList.add("active");
});

signinBtn.addEventListener("click", function () {
  formBx.classList.remove("active");
  body.classList.remove("active");
});
