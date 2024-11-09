<?php 
    view('partials/head');
 ?>

<body id="page-top">

    <?php
    view('partials/nav');
?>
    <section class="pt-10 mt-10 page-section masthead bg-primary d-flex justify-content-center align-items-center">
        <div>
            <form action="/save-appointment-to-db" method="POST"
                class="d-flex flex-column align-items-center justify-content-center">
                <div class="container mt-4">
                    <div id="month-navigation">
                        <button id="prev-month" type="button"
                            class="btn btn-secondary bg-custom-gray-blue border-primary"><i
                                class="fa-solid fa-arrow-left"></i></button>

                        <div id="current-month"></div>

                        <button id="next-month" type="button"
                            class="btn btn-secondary bg-custom-gray-blue border-primary"><i
                                class="fa-solid fa-arrow-right"></i></button>
                    </div>

                    <div id="calendar" class="calendar-container"></div>

                    <div id="time-slots" class="mt-3"></div>
                </div>
                <input type="hidden" name="date" id="time_hidden">
                <input type="hidden" name="doctor_id" id="doctor_id" value="<?= requestParams()['doctor_id'] ?>">
                <button type="submit" id='submit-button'
                    class="btn mt-3 text-white bg-custom-gray-blue invisible">ЗАПАЗИ
                    ЧАС!</button>
            </form>
        </div>
    </section>

    <?php
        view('partials/footer');
    ?>

    <script src='/js/save-time.js'></script>
</body>

</html>