<?php
view('partials/admin/head');
view('partials/admin/nav');
view('partials/admin/dashboardPanel');

?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Пациенти</h1>

        <div class="card mb-4">
            <div class="card-header">
                <!-- <i class="fas fa-table me-1"></i>
                    Patients -->
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Име</th>
                            <th>Фамилия</th>
                            <th>Емайл</th>
                            <th>Детайли</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Име</th>
                            <th>Фамилия</th>
                            <th>Емайл</th>
                            <th>Детайли</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach($patients as $patient): ?>
                        <tr>
                            <td><?= $patient['first_name'] ?></td>
                            <td><?= $patient['last_name'] ?></td>
                            <td><?= $patient['email'] ?></td>
                            <td>
                                <a href="/admin/patient-details?id=<?= $patient['id'] ?>"
                                    class='btn bg-primary details'>Детайли</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<script src='/js/admin/patients.js'></script>
<?php
    view('partials/admin/footer');
?>