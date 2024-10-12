document.addEventListener("DOMContentLoaded", function () {
  const calendarEl = document.getElementById("calendar");

  const calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: "dayGridMonth",
    height: 550,
    headerToolbar: {
      left: "prev,next today",
      center: "title",
      right: "dayGridMonth,timeGridWeek,timeGridDay",
    },
    events: [
      {
        title: "Среща с пациент 1",
        start: "2024-10-11T10:00:00",
        end: "2024-10-11T11:00:00",
        allDay: false, // Не е целодневно събитие
      },
      {
        title: "Среща с пациент 1.1",
        start: "2024-10-11T10:00:00",
        end: "2024-10-11T12:00:00",
        allDay: false, // Не е целодневно събитие
      },
      {
        title: "Среща с пациент 2",
        start: "2024-10-12T14:00:00",
        end: "2024-10-12T15:00:00",
        allDay: false,
      },
      {
        title: "Среща с пациент 3",
        start: "2024-10-15T09:00:00",
        end: "2024-10-15T10:00:00",
        allDay: false,
      },
      {
        title: "Среща с пациент 4",
        start: "2024-10-20T11:30:00",
        end: "2024-10-20T12:30:00",
        allDay: false,
      },
      {
        title: "Среща с пациент 5",
        start: "2024-10-25T13:00:00",
        end: "2024-10-25T14:00:00",
        allDay: false,
      },
    ],
    dateClick: function (info) {
      console.log(info.dateStr);
      showEventInfo(info.dateStr);
    },
  });

  calendar.render();
});

function showEventInfo(date) {
  const eventInfo = document.getElementById("eventInfo");
  eventInfo.innerHTML = "";

  const events = [
    {
      id: 1,
      title: "Среща с пациент 1",
      start: "2024-10-11T10:00:00",
      end: "2024-10-11T11:00:00",
    },
    {
      id: 2,
      title: "Среща с пациент 2",
      start: "2024-10-12T14:00:00",
      end: "2024-10-12T15:00:00",
    },
    {
      id: 3,
      title: "Среща с пациент 3",
      start: "2024-10-15T09:00:00",
      end: "2024-10-15T10:00:00",
    },
  ];

  const filteredEvents = events.filter((event) => event.start.startsWith(date));
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
                        <th scope="col">Детайли</th>
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
                    <td><button class="btn btn-primary">Преглед</button></td>
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
