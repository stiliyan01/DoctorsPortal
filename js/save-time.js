console.log($("#demo"));
$("#demo").datetimepicker({
  ownerDocument: document,
  contentWindow: window,
  value: "",
  rtl: false,
  format: "Y/m/d H:i",
  formatTime: "H:i",
  formatDate: "Y/m/d",
  inline: true,
});
