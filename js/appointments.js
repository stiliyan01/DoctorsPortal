document.addEventListener("DOMContentLoaded", function () {
    var events = appointments.map((appointment) => {
        const startTime = new Date(appointment.time);
        const endTime = new Date(startTime);
        endTime.setHours(startTime.getHours() + 3);

        return {
            id: appointment.id,
            title: `${appointment.doctor_title} ${appointment.doctor_first_name} ${appointment.doctor_last_name}`,
            start: appointment.time,
            end: endTime.toISOString().replace("T", " ").substring(0, 19),
            doctor: {
                'title' : appointment.doctor_title,
                'first_name' : appointment.doctor_first_name,
                'last_name' : appointment.doctor_last_name,
            },
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
                          <th scope="col">Описание</th>
                          <th scope="col">Начало</th>
                          <th scope="col">Край</th>
                          <th scope="col">Опции</th>
                      </tr>
                  </thead>
                  <tbody>
          `;

            filteredEvents.forEach((event, index) => {
                html += `
                  <tr>
                      <th scope="row">${index + 1}</th>
                      <td>Час при: ${event.doctor.title} ${event.doctor.first_name} ${event.doctor.last_name}</td>
                      <td>${event.start}</td>
                      <td>${event.end}</td>
                      <td>
                         <form method="POST" action="/delete-appointment">
                            <input type="hidden" name="_method" value="DELETE"></input>
                            <input type="hidden" name="appointment_id" value="${event.id}"></input>
                            <button class="btn p-0 text-danger">Изтрий</button>  
                         </form>
                      </td>
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
