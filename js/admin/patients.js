$(document).ready(function () {
  $(".details").on("click", function () {
    var id = $(this).attr("data-id");

    // $.ajax({
    //   url: "patients/details/" + id,
    //   success: function (data) {
    //     $("#details").html(data);
    //     $("#details").modal("show");
    //   },
    // });
  });
});
