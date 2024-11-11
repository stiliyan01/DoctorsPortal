document.addEventListener("DOMContentLoaded", function () {
  var events = appointments.map((appointment) => {
    const startTime = new Date(appointment.time);
    const endTime = new Date(startTime);
    endTime.setHours(startTime.getHours() + 3);

    return {
      id: appointment.id,
      title:  `${appointment.user_first_name}  ${ appointment.user_last_name}`,
      start: appointment.time,
      end: endTime.toISOString().replace("T", " ").substring(0, 19),
      user: {
        'first_name' : appointment.user_first_name,
        'last_name' : appointment.user_last_name,
      },
    };
  });
  const calendarEl = document.getElementById("calendar");
console.log(events, appointments);
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
                    <td>Час с пациент: ${event.user.first_name} ${event.user.last_name}</td>
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
