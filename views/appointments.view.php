<?php
view('partials/head');
?>

<body id="page-top">

<?php
view('partials/nav');
?>
<!-- Page Content-->

<section class="pt-10 mt-10 page-section masthead bg-primary">
    <div class="container px-lg-5">

        <div class="card mb-4">
            <div class="card-header">
            </div>
            <div id='calendar'></div>
        </div>

    </div>
</section>

<script src='../js/appointments.js'>

<?php
view('partials/footer');
?>
</body>

</html>