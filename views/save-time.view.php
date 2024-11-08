<?php 
    view('partials/head');
 ?>

<body id="page-top">

    <?php
    view('partials/nav');
?>

    <!-- <section class="pt-10 mt-10 page-section masthead bg-primary d-flex justify-content-center align-items-center ">
        <div>
            <form action="/save-time-to-db" method="POST"
                class="d-flex flex-column align-items-center justify-content-center">
                 <div class="form-group">
                    <input type="text" id="demo" name="date" class="rounded" />
                </div>
                <button class=' bg-custom-gray-blue text-white rounded' type="submit">Запиши час</button> -->

    <!-- <div class="container mt-4">
                    <h2>Custom Date & Time Picker</h2>
                    <div id="calendar" class="mb-4"></div>
                    <div id="time-slots"></div> -->
    <!-- </div> -->
    <!-- </form> -->
    <!-- </div> -->
    <!-- </section> -->

    <!-- tova raboti  -->
    <!-- <section class="pt-10 mt-10 page-section masthead bg-primary d-flex justify-content-center align-items-center">
        <div>
            <form action="/save-time-to-db" method="POST"
                class="d-flex flex-column align-items-center justify-content-center">
                <div class="container mt-4">
                    <h2 class="text-white">Custom Date & Time Picker</h2>
                    <div id="calendar" class="calendar-container"></div>
                    <div id="time-slots" class="mt-3"></div>
                </div>
            </form>
        </div>
    </section> -->


    <!-- test -->

    <section class="pt-10 mt-10 page-section masthead bg-primary d-flex justify-content-center align-items-center">
        <div>
            <form action="/save-time-to-db" method="POST"
                class="d-flex flex-column align-items-center justify-content-center">
                <div class="container mt-4">
                    <h2 class="text-white">Custom Date & Time Picker</h2>
                    <div id="calendar" class="calendar-container"></div>
                    <div id="time-slots" class="mt-3"></div>
                </div>
            </form>
        </div>
    </section>

    <?php
        view('partials/footer');
    ?>

    <script src='/js/save-time.js'></script>
</body>

</html>