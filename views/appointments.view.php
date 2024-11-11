<?php
view('partials/head');
?>

<body id="page-top">

    <?php
        view('partials/nav');
    ?>
    <main class="masthead">
        <div class="container-fluid px-4">
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
        var appointments = <?php echo json_encode($appointments); ?>
    </script>

    <script src='../js/appointments.js'></script>

    <?php
        view(name: 'partials/footer');
    ?>
</body>