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
    require('views/partials/footer.php');
?>