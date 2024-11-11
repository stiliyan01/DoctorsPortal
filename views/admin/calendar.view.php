<?php
   view('partials/admin/head');
   view('partials/admin/nav');
   view('partials/admin/dashboardPanel');
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Календар</h1>

        <div class="row">

        </div>

        <div class="card mb-4">
            <div class="card-header">
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

<script>
var appointments = <?php echo json_encode($appointments); ?>;
</script>

<script src='../../js/admin/calendar.js'>

</script>
<?php 
   view('partials/admin/footer');
?>