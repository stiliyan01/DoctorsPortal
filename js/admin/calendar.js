document.addEventListener("DOMContentLoaded", function () {
  var events = appointments.map((appointment) => {
    const startTime = new Date(appointment.time);
    const endTime = new Date(startTime);
    endTime.setHours(startTime.getHours() + 3);

    return {
      title: appointment.description,
      start: appointment.time,
      end: endTime.toISOString().replace("T", " ").substring(0, 19), // Formatting to match input time format
    };
  });
  const calendarEl = document.getElementById("calendar");

  const calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: "dayGridMonth",
    height: 550,
    headerToolbar: {
      left: "prev,next today",
      center: "title",
      right: "dayGridMonth,timeGridWeek,timeGridDay",
    },
    events: events,
    dateClick: function (info) {
      showEventInfo(info.dateStr);
    },
  });

  calendar.render();

  function showEventInfo(date) {
    const eventInfo = document.getElementById("eventInfo");
    eventInfo.innerHTML = "";

    const filteredEvents = events.filter((event) =>
      event.start.startsWith(date)
    );
    if (filteredEvents.length === 0) {
      eventInfo.innerHTML = `<p>Няма срещи за ${date}.</p>`;
    } else {
      let html = `
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Заглавие</th>
                        <th scope="col">Начало</th>
                        <th scope="col">Край</th>
                    </tr>
                </thead>
                <tbody>
        `;

      filteredEvents.forEach((event, index) => {
        html += `
                <tr>
                    <th scope="row">${index + 1}</th>
                    <td>${event.title}</td>
                    <td>${event.start}</td>
                    <td>${event.end}</td>
                </tr>
            `;
      });

      html += `
                </tbody>
            </table>
        `;

      eventInfo.innerHTML = html;
    }

    eventInfo.style.display = "block";
  }
});
