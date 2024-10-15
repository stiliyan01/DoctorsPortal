<?php
require('views/partials/admin/head.php');
require('views/partials/admin/nav.php');
require('views/partials/admin/dashboardPanel.php');
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
                            <th>Емайл</th>
                            <th>Телефонен номер</th>
                            <th>Дата на раждане</th>
                            <th>Адрес</th>
                            <th>Детайли</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Име</th>
                            <th>Емайл</th>
                            <th>Телефонен номер</th>
                            <th>Дата на раждане</th>
                            <th>Адрес</th>
                            <th>Детайли</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Гошо</td>
                            <td>Емайл 123 </td>
                            <td>80572</td>
                            <td>19.08.2022</td>
                            <td>варна</td>
                            <td><button class='btn bg-primary details' data-toggle="modal"
                                    data-target="#details">Детайли</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<script src='/js/admin/patients.js'></script>
<?php
    require('views/partials/admin/footer.php');
?>