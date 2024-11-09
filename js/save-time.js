// $(document).ready(function () {
//   let appointments;
//   $.get("/get-appointments", function (data) {
//     appointments = data;
//     console.log(data);

//     let occupiedTimes = {};
//     appointments.forEach((app) => {
//       let date = app.time.split(" ")[0];
//       let time = app.time.split(" ")[1].substring(0, 5);
//       if (!occupiedTimes[date]) {
//         occupiedTimes[date] = [];
//       }
//       occupiedTimes[date].push(time);
//     });

//     let today = new Date();
//     let currentMonth = today.getMonth() + 1;
//     let currentYear = today.getFullYear();

//     function generateCalendar(year, month) {
//       $("#calendar").empty();
//       let monthName = new Date(year, month - 1).toLocaleString("default", {
//         month: "long",
//       });
//       $("#current-month").text(`${monthName.toUpperCase()} ${year}`);
//       $("#current-month").addClass("text-white bold");
//       let daysInMonth = new Date(year, month, 0).getDate();
//       let monthDiv = $('<div class="month rounded bg-custom-gray-blue"></div>');
//       let daysGrid = $('<div class="days-grid rounded"></div>');

//       for (let d = 1; d <= daysInMonth; d++) {
//         let date = `${year}-${String(month).padStart(2, "0")}-${String(
//           d
//         ).padStart(2, "0")}`;
//         let dayElem = $(
//           '<div class="day btn btn-light bg-primary text-white border-primary"></div>'
//         ).text(d);

//         if (occupiedTimes[date]) {
//           dayElem.addClass("disabled");
//         }

//         dayElem.click(function () {
//           let selectedDate = date;

//           generateTimeSlots(selectedDate);
//         });

//         daysGrid.append(dayElem);
//       }

//       monthDiv.append(daysGrid);
//       $("#calendar").append(monthDiv);
//     }

//     function generateTimeSlots(date) {
//       $("#time-slots").empty();
//       for (let hour = 9; hour <= 16; hour++) {
//         let time = `${String(hour).padStart(2, "0")}:00`;
//         let timeElem = $(
//           '<div class="time-slot btn btn-light bg-custom-gray-blue text-white border-0 "></div>'
//         ).text(time);
//         if (occupiedTimes[date] && occupiedTimes[date].includes(time)) {
//           timeElem.addClass("disabled").prop("disabled", true);
//         }
//         $("#time-slots").append(timeElem);
//         timeElem.on("click", function () {
//           alert("Selected time: " + date + " " + time);
//         });
//       }
//     }

//     function updateCalendar() {
//       generateCalendar(currentYear, currentMonth);
//     }

//     $("#prev-month").click(function () {
//       if (currentMonth === 1) {
//         currentMonth = 12;
//         currentYear--;
//       } else {
//         currentMonth--;
//       }
//       updateCalendar();
//     });

//     $("#next-month").click(function () {
//       if (currentMonth === 12) {
//         currentMonth = 1;
//         currentYear++;
//       } else {
//         currentMonth++;
//       }
//       updateCalendar();
//     });

//     updateCalendar();
//   });
// });

$(document).ready(function () {
  let appointments;
  $.get("/get-appointments", function (data) {
    appointments = data;
    let occupiedTimes = {};

    // Populate `occupiedTimes` to track which dates and times are occupied
    appointments.forEach((app) => {
      let date = app.time.split(" ")[0];
      let time = app.time.split(" ")[1].substring(0, 5); // Extract hour and minute
      if (!occupiedTimes[date]) {
        occupiedTimes[date] = [];
      }
      occupiedTimes[date].push(time);
    });

    let today = new Date();
    let currentMonth = today.getMonth() + 1;
    let currentYear = today.getFullYear();

    function generateCalendar(year, month) {
      $("#calendar").empty();
      let monthName = new Date(year, month - 1).toLocaleString("default", {
        month: "long",
      });
      $("#current-month").text(`${monthName.toUpperCase()} ${year}`);
      $("#current-month").addClass("text-white bold");
      let daysInMonth = new Date(year, month, 0).getDate();
      let monthDiv = $('<div class="month rounded bg-custom-gray-blue"></div>');
      let daysGrid = $('<div class="days-grid rounded"></div>');

      for (let d = 1; d <= daysInMonth; d++) {
        let date = `${year}-${String(month).padStart(2, "0")}-${String(
          d
        ).padStart(2, "0")}`;
        let dayElem = $(
          '<div class="day btn btn-light bg-primary text-white border-primary"></div>'
        ).text(d);

        dayElem.click(function () {
          generateTimeSlots(date);
        });

        daysGrid.append(dayElem);
      }

      monthDiv.append(daysGrid);
      $("#calendar").append(monthDiv);
    }

    function generateTimeSlots(date) {
      $("#time-slots").empty();

      const startHour = 9;
      const endHour = 16;

      for (let hour = startHour; hour <= endHour; hour++) {
        let time = `${String(hour).padStart(2, "0")}:00`;
        let timeElem = $(
          '<div class="time-slot btn btn-light bg-custom-gray-blue text-white border-0"></div>'
        ).text(time);

        if (occupiedTimes[date] && occupiedTimes[date].includes(time)) {
          timeElem.addClass("disabled").prop("disabled", true);
        }

        $("#time-slots").append(timeElem);

        timeElem.on("click", function () {
          if (!$(this).hasClass("disabled")) {
            $("#submit-button").removeClass("invisible");

            let selectedDateTime = new Date(`${date}T${time}:00`);

            $("#time_hidden").val(selectedDateTime);
          }
        });
      }
    }

    function updateCalendar() {
      generateCalendar(currentYear, currentMonth);
    }

    $("#prev-month").click(function () {
      if (currentMonth === 1) {
        currentMonth = 12;
        currentYear--;
      } else {
        currentMonth--;
      }
      updateCalendar();
    });

    $("#next-month").click(function () {
      if (currentMonth === 12) {
        currentMonth = 1;
        currentYear++;
      } else {
        currentMonth++;
      }
      updateCalendar();
    });

    updateCalendar();
  });
});
