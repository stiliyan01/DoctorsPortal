<?php
    require('views/partials/head.php');
    require('views/partials/nav.php');
    require('views/partials/dashboardPanel.php');
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">

        </div>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                calendar
            </div>
            <div id='calendar'></div>
        </div>
    </div>
</main>


<script>
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        height: 650,
        events: [{
                title: 'event1',
                start: '2024-10-11'
            },
            {
                title: 'event2',
                start: '2010-01-05',
                end: '2010-01-07'
            },
            {
                title: 'event3',
                start: '2024-10-11T11:30:00',
                end: '2024-10-11T12:30:00',
                allDay: false // will make the time show
            }

        ]

    });
    calendar.render();
});
</script>
<?php 
    require('views/partials/footer.php');
?>