$(document).ready(function () {
  $("#showFieldsCheckbox").change(function () {
    if ($(this).is(":checked")) {
      $("#extraFields").slideDown();
    } else {
      $("#extraFields").slideUp();
    }
  });

  const selectElement = document.getElementById("doctorSpecialties");

  selectElement.addEventListener("mouseover", function (event) {
    if (event.target.tagName === "OPTION") {
      event.target.classList.add("hover-green");
    }
  });

  selectElement.addEventListener("mouseout", function (event) {
    if (event.target.tagName === "OPTION") {
      event.target.classList.remove("hover-green");
    }
  });
});
