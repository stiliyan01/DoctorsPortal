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


            <div class="row lg-5 mt-50">
                <?php foreach($doctors as $doctor): ?>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0 bg-custom-gray-blue rounded">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i
                                    class="bi bi-collection"></i></div>
                            <h2 class="fs-4 fw-bold text-white">
                                <?= "{$doctor['title']}  {$doctor['first_name']} {$doctor['last_name']} " ?></h2>

                            <form method="get" action="/save-time">
                                <input type="hidden" name="doctor_id" value="<?= $doctor['id'] ?>">
                                <button type="submit" class="btn btn-primary">Запази Час!</button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>

        </div>
    </section>
    <?php
    view('partials/footer');
?>
</body>

</html>