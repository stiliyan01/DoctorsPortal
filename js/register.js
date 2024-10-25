$(document).ready(function () {
  $("#showFieldsCheckbox").change(function () {
    if ($(this).is(":checked")) {
      $("#extraFields").slideDown();
    } else {
      $("#extraFields").slideUp();
    }
  });
});
