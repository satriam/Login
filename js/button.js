const buttonForm = document.getElementById("buttonForm");

window.onresize = function () {
  if (window.innerWidth <= 991) {
    buttonForm.classList.add("text-center");
  } else {
    buttonForm.classList.remove("text-center");
  }
};
