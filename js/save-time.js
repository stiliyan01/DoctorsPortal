$(document).ready(function () {
  let appointments;
  let selectedDate = null;
  let selectedTime = null;

  $.get("/get-appointments", function (data) {
    appointments = data;
    let occupiedTimes = {};

    appointments.forEach((app) => {
      let date = app.time.split(" ")[0];
      let time = app.time.split(" ")[1].substring(0, 5);
      if (!occupiedTimes[date]) {
        occupiedTimes[date] = [];
      }
      occupiedTimes[date].push(time);
    });

    let today = new Date();
    let currentMonth = today.getMonth() + 1;
    let currentYear = today.getFullYear();
    let currentDay = today.getDate();
    let currentDateString = `${currentYear}-${String(currentMonth).padStart(
      2,
      "0"
    )}-${String(currentDay).padStart(2, "0")}`;

    function generateCalendar(year, month) {
      $("#calendar").empty();
      let monthName = new Date(year, month - 1).toLocaleString("default", {
        month: "long",
      });
      $("#current-month").text(`${monthName.toUpperCase()} ${year}`);
      $("#current-month").addClass("text-white bold");

      const daysOfWeek = [
        "Неделя",
        "Понеделник",
        "Вторник",
        "Сряда",
        "Четвъртък",
        "Петък",
        "Събота",
      ];
      let daysHeader = $('<div class="days-grid-header"></div>');
      daysOfWeek.forEach((day) => {
        let dayElem = $(
          '<div class="day-header rounded bg-custom-gray-blue text-white"></div>'
        ).text(day);
        daysHeader.append(dayElem);
      });
      $("#calendar").append(daysHeader);

      let daysInMonth = new Date(year, month, 0).getDate();
      let firstDay = new Date(year, month - 1, 1).getDay();

      let daysGrid = $('<div class="days-grid"></div>');

      for (let i = 0; i < firstDay; i++) {
        daysGrid.append($('<div class="day empty"></div>'));
      }

      for (let day = 1; day <= daysInMonth; day++) {
        let date = `${year}-${String(month).padStart(2, "0")}-${String(
          day
        ).padStart(2, "0")}`;
        let dayElem = $(
          '<div class="day btn btn-light bg-custom-gray-blue text-white border-0"></div>'
        ).text(day);

        let dayOfWeek = new Date(year, month - 1, day).getDay();
        if (dayOfWeek === 0 || dayOfWeek === 6) {
          dayElem.addClass("disabled").prop("disabled", true);
        } else {
          dayElem.click(function () {
            selectDay(date, dayElem);
          });
        }

        if (date === currentDateString) {
          dayElem.addClass("today");
        }

        daysGrid.append(dayElem);
      }

      $("#calendar").append(daysGrid);
    }

    function selectDay(date, dayElem) {
      if (selectedDate) {
        $(`.day[data-date="${selectedDate}"]`).removeClass("selected-element");
      }
      selectedDate = date;
      dayElem.addClass("selected-element");
      dayElem.attr("data-date", date);

      generateTimeSlots(date);
    }

    function generateTimeSlots(date) {
      $("#time-slots").addClass("d-flex justify-content-between flex-wrap");
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

        timeElem.on("click", function () {
          if (!$(this).hasClass("disabled")) {
            if (selectedTime) {
              $(`.time-slot[data-time="${selectedTime}"]`).removeClass(
                "selected-element"
              );
            }

            selectedTime = time;
            $(this).addClass("selected-element");
            $(this).attr("data-time", time);

            let selectedDateTime = new Date(`${date}T${time}:00`);
            $("#time_hidden").val(selectedDateTime);

            $("#submit-button").removeClass("invisible");
          }
        });

        $("#time-slots").append(timeElem);
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
