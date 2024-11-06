<?php view('partials/head'); ?>

<body id="page-top">
    <?php
view('partials/nav');
?>

    <section class="page-section portfolio masthead bg-primary" id="">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Профил</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>

            <!-- Row containing the form centered -->
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form method='POST' action='/update-user-profile'>
                        <input type="hidden" name="_method" value='PUT'>
                        <input type="hidden" name="id" value='<?= $user['id'] ?>'>
                        <div class="form-group mb-3">
                            <input type="text" name="first_name" class="form-control" id="first_name"
                                value='<?= $user['first_name'] ?>' required placeholder="Име">
                        </div>

                        <div class="form-group mb-3">
                            <input type="text" name="last_name" class="form-control" id="last_name"
                                value='<?= $user['last_name'] ?>' required placeholder="Фамилия">
                        </div>

                        <div class="form-group mb-3">
                            <input type="email" name="email" class="form-control" id="email"
                                value='<?= $user['email'] ?>' required placeholder="Емайл">
                        </div>

                        <div class="form-group mb-3">
                            <input type="password" name="password" class="form-control" id="password"
                                value='<?= $user['password'] ?>' required placeholder="Парола">
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="мъж"
                                <?= $user['gender'] == 'мъж' ? 'checked' : '' ?>>
                            <label class="form-check-label" for="inlineRadio1">Мъж</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="жена"
                                <?= $user['gender'] == 'жена' ? 'checked' : '' ?>>
                            <label class="form-check-label" for="inlineRadio2">Жена</label>
                        </div>

                        <div class='d-flex justify-content-center'>
                            <button type="submit"
                                class="btn bg-secondary text-white btn-block rounded text-uppercase">ЗАПИШИ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php view('partials/footer'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="js/scriptsLandingPage.js"></script>
    <!-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->
</body>

</html>