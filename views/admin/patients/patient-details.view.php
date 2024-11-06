<?php
view('partials/admin/head');
view('partials/admin/nav');
view('partials/admin/dashboardPanel');

?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Детайли</h1>

        <form method="POST" action="/admin/update-patient-details">

            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="id" value="<?= $user['id'] ?>">

            <div class="mb-3">
                <label for="first_name" class="form-label">Име</label>
                <input type="text" name="first_name" class="form-control" id="first_name"
                    value='<?= $user['first_name'] ?>' disabled>
            </div>

            <div class="mb-3">
                <label for="last_name" class="form-label">Фамилия</label>
                <input type="text" name="last_name" class="form-control" id="last_name"
                    value='<?= $user['last_name'] ?>' disabled>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Имейл</label>
                <input type="email" name="email" class="form-control" id="email" value='<?= $user['email'] ?>' disabled>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="мъж"
                    <?= $user['gender'] == 'мъж' ? 'checked' : '' ?> disabled>
                <label class="form-check-label" for="inlineRadio1">Мъж</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="жена"
                    <?= $user['gender'] == 'жена' ? 'checked' : '' ?> disabled>
                <label class="form-check-label" for="inlineRadio2">Жена</label>
            </div>
            <br>
            <br>

            <div class="form-group">
                <label class='mb-2' for="exampleFormControlTextarea3">Досие</label>
                <textarea class="form-control mb-3" name='file' id="exampleFormControlTextarea3"
                    rows="10"><?= $user['file'] ?? '' ?></textarea>
            </div>

            <button type="submit" class="btn bg-primary text-white">Запази</button>
        </form>

    </div>
</main>

<script src='/js/admin/patients.js'></script>
<?php
    view('partials/admin/footer');
?>