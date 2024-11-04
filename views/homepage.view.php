<?php view('partials/head'); ?>

<body id="page-top">
    <?php
view('partials/nav');
view('partials/header');
?>

    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="saveATime">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">ЗАПАЗИ ЧАС</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>

            <!-- Row containing the form centered -->
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <!-- Adjust the width of the form -->
                    <form action='/doctors'>
                        <div class="form-group mb-2">
                            <select class="form-control" id="exampleFormControlSelect1" name='doctorSpecialty'>
                                <option>Избери Специалност</option>

                                <?php foreach ($doctorsSpecialties as $specialty) : ?>
                                    <option value='<?= $specialty['id'] ?>'><?= $specialty['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group mb-2">
                            <select class="form-control" id="exampleFormControlSelect2" name='city'>
                                <option>Избери град</option>

                                <?php foreach ($cities as $city) : ?>
                                    <option value='<?= $city['id'] ?>'><?= $city['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control mb-2" name='doctor_name' placeholder="Име на лекар">
                        </div>

                        <div class='d-flex justify-content-center'>
                            <button type="submit" class="btn btn-primary btn-block">ТЪРСИ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section-->

    <!-- Contact Section-->

    <!-- Footer-->

    <?php view('partials/footer'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="js/scriptsLandingPage.js"></script>
    <!-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->
</body>

</html>