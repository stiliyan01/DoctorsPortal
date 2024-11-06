<?php
view('partials/admin/head');
view('partials/admin/nav');
view('partials/admin/dashboardPanel');

?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Детайли</h1>

        <form method="POST" action="/admin/update-patient-profile">

            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="id" value="<?= $user['id'] ?>">

            <div class="mb-3">
                <label for="title" class="form-label"></label>
                <input type="text" name="title" class="form-control" id="title" value='<?= $user['title'] ?>' required>
            </div>

            <div class="mb-3">
                <label for="first_name" class="form-label">Име</label>
                <input type="text" name="first_name" class="form-control" id="first_name"
                    value='<?= $user['first_name'] ?>' required>
            </div>

            <div class="mb-3">
                <label for="last_name" class="form-label">Фамилия</label>
                <input type="text" name="last_name" class="form-control" id="last_name"
                    value='<?= $user['last_name'] ?>' required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Имейл</label>
                <input type="email" name="email" class="form-control" id="email" value='<?= $user['email'] ?>' required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Парола</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>

            <div class="mb-3">
                <label for="options" class="form-label">Специалност</label>
                <select class="form-select" name="options" id="options" required>
                    <option selected disabled>Изберете специалност</option>
                    <?php foreach ($specialties as $specialty): ?>
                    <option value="<?= $specialty['id'] ?>"
                        <?= $specialty['id'] == $user['speciality_id'] ? 'selected' : '' ?>>
                        <?= $specialty['name'] ?>
                    </option>
                    <?php endforeach; ?>
                </select>
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
            <br>
            <br>

            <button type="submit" class="btn bg-primary text-white">Запази</button>
        </form>

    </div>
</main>

<script src='/js/admin/patients.js'></script>
<?php
    view('partials/admin/footer');
?>