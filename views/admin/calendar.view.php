<?php
    require('views/partials/admin/head.php');
    require('views/partials/admin/nav.php');
    require('views/partials/admin/dashboardPanel.php');
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Calendar</h1>

        <div class="row">

        </div>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Calendar
            </div>
            <div id='calendar'></div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Информация за прегледи
            </div>
            <div id='eventInfo'>

            </div>
        </div>


    </div>
</main>


<script src='../../js/admin/calendar.js'>

</script>
<?php 
    require('views/partials/admin/footer.php');
?>