<?php
   view('partials/admin/head');
   view('partials/admin/nav');
   view('partials/admin/dashboardPanel');
?>

<main>
    <div class="container-fluid px-4">
        <div class=''>
            <h1 class="mt-4">Home</h1>

        </div>

        <form method="POST" action="/admin/update-doctor">

            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="id" value="<?= $doctor['id'] ?>">

            <div class="mb-3">
                <label for="title" class="form-label">Титла</label>
                <input type="text" name="title" class="form-control" id="title" value='<?= $doctor['title'] ?>'
                    required>
            </div>

            <div class="mb-3">
                <label for="first_name" class="form-label">Име</label>
                <input type="text" name="first_name" class="form-control" id="first_name"
                    value='<?= $doctor['first_name'] ?>' required>
            </div>

            <div class="mb-3">
                <label for="last_name" class="form-label">Фамилия</label>
                <input type="text" name="last_name" class="form-control" id="last_name"
                    value='<?= $doctor['last_name'] ?>' required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Имейл</label>
                <input type="email" name="email" class="form-control" id="email" value='<?= $doctor['email'] ?>'
                    required>
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
                        <?= $specialty['id'] == $doctor['speciality_id'] ? 'selected' : '' ?>>
                        <?= $specialty['name'] ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="мъж"
                    <?= $doctor['gender'] == 'мъж' ? 'checked' : '' ?>>
                <label class="form-check-label" for="inlineRadio1">Мъж</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="жена"
                    <?= $doctor['gender'] == 'жена' ? 'checked' : '' ?>>
                <label class="form-check-label" for="inlineRadio2">Жена</label>
            </div>
            <br>
            <br>

            <button type="submit" class="btn bg-primary text-white">Запази</button>
        </formform   </div>
</main>



<?php
   view('partials/admin/footer');
?>