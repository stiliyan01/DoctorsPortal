// $(document).ready(function () {
//   let appointments;
//   $.get("/get-appointments", function (data) {
//     appointments = data;
//     console.log(data);

//     let occupiedTimes = {};
//     appointments.forEach((app) => {
//       let date = app.time.split(" ")[0];
//       let time = app.time.split(" ")[1].substring(0, 5); // Extract hour and minute
//       if (!occupiedTimes[date]) {
//         occupiedTimes[date] = [];
//       }
//       occupiedTimes[date].push(time);
//     });

//     let today = new Date();
//     let month = today.getMonth() + 1;
//     let year = today.getFullYear();
//     generateCalendar(month, year);

//     function generateCalendar(month, year) {
//       let daysInMonth = new Date(year, month, 0).getDate();
//       $("#calendar").empty();
//       for (let day = 1; day <= daysInMonth; day++) {
//         let date = `${year}-${String(month).padStart(2, "0")}-${String(
//           day
//         ).padStart(2, "0")}`;
//         let dayElem = $('<div class="calendar-day btn btn-light"></div>').text(
//           day
//         );
//         dayElem.click(function () {
//           let selectedDate = date;
//           generateTimeSlots(selectedDate);
//         });
//         $("#calendar").append(dayElem);
//       }
//     }

//     function generateTimeSlots(date) {
//       $("#time-slots").empty();
//       for (let hour = 9; hour <= 16; hour++) {
//         // Assuming working hours from 9 to 16
//         let time = `${String(hour).padStart(2, "0")}:00`;
//         let timeElem = $('<div class="time-slot btn btn-light"></div>').text(
//           time
//         );
//         if (occupiedTimes[date] && occupiedTimes[date].includes(time)) {
//           timeElem.addClass("disabled").prop("disabled", true);
//         }
//         $("#time-slots").append(timeElem);
//         timeElem.on("click", function () {
//           alert("Selected time: " + date + " " + time); // Alert the selected time
//         });
//       }
//     }
//   });
// });

$(document).ready(function () {
  let appointments;
  $.get("/get-appointments", function (data) {
    appointments = data;
    console.log(data);

    let occupiedTimes = {};
    appointments.forEach((app) => {
      let date = app.time.split(" ")[0];
      let time = app.time.split(" ")[1].substring(0, 5); // Extract hour and minute
      if (!occupiedTimes[date]) {
        occupiedTimes[date] = [];
      }
      occupiedTimes[date].push(time);
    });

    let today = new Date();
    let month = today.getMonth() + 1;
    let year = today.getFullYear();
    generateCalendar(year);

    function generateCalendar(year) {
      $("#calendar").empty();
      // Loop through 12 months
      for (let m = 1; m <= 12; m++) {
        let monthName = new Date(year, m - 1).toLocaleString("default", {
          month: "long",
        });
        let monthDiv = $(`<div class="month" data-month="${m}">
                            <div class="month-header">${monthName}</div>
                            <div class="days-grid"></div>
                          </div>`);

        // Generate the days for the month
        let daysInMonth = new Date(year, m, 0).getDate();
        for (let d = 1; d <= daysInMonth; d++) {
          let date = `${year}-${String(m).padStart(2, "0")}-${String(
            d
          ).padStart(2, "0")}`;
          let dayElem = $('<div class="day btn btn-light"></div>').text(d);

          if (occupiedTimes[date]) {
            dayElem.addClass("disabled");
          }

          dayElem.click(function () {
            let selectedDate = date;
            alert("Selected date: " + selectedDate); // Alert the selected date
            generateTimeSlots(selectedDate);
          });

          monthDiv.find(".days-grid").append(dayElem);
        }

        $("#calendar").append(monthDiv);
      }
    }

    function generateTimeSlots(date) {
      $("#time-slots").empty();
      for (let hour = 9; hour <= 16; hour++) {
        // Assuming working hours from 9 to 16
        let time = `${String(hour).padStart(2, "0")}:00`;
        let timeElem = $('<div class="time-slot btn btn-light"></div>').text(
          time
        );
        if (occupiedTimes[date] && occupiedTimes[date].includes(time)) {
          timeElem.addClass("disabled").prop("disabled", true);
        }
        $("#time-slots").append(timeElem);
        timeElem.on("click", function () {
          alert("Selected time: " + date + " " + time); // Alert the selected time
        });
      }
    }
  });
});
