$(document).ready(function () {
  let appointments;
  $.get("/get-appointments", function (data, status) {
    appointments = data;
    console.log(data);
  });

  $("#demo").datetimepicker({
    ownerDocument: document,
    contentWindow: window,
    value: "",
    rtl: false,
    format: "Y/m/d H:i",
    formatTime: "H:i",
    formatDate: "Y/m/d",
    inline: true,
    disabledDates: appointments,
  });
});
