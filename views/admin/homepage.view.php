<?php
    require('views/partials/head.php');
    require('views/partials/nav.php');
    require('views/partials/dashboardPanel.php');
?>



<main>
    <div class="container-fluid px-4">
        <div class=''>
            <h1 class="mt-4">Home</h1>

        </div>

        <form method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Име</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Имейл</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Парола</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <div class="mb-3">
                <label for="options" class="form-label">Специалност</label>
                <select class="form-select" name="options" id="options" required>
                    <option selected disabled>Изберете специалност</option>
                    <option value="option1">Опция 1</option>
                    <option value="option2">Опция 2</option>
                    <option value="option3">Опция 3</option>
                    <!-- Можеш да добавиш още опции тук -->
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Запази</button>
        </form>

    </div>
</main>



<?php
    require('views/partials/footer.php');
?>