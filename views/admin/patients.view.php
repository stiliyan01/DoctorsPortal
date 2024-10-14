<?php
require('views/partials/head.php');
require('views/partials/nav.php');
require('views/partials/dashboardPanel.php');
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Patients</h1>

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

<!-- Modal -->
<div class="modal fade" id="details" tabindex="-1" role="dialog" aria-labelledby="detailsLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailsLabel">Детайли</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script src='/js/admin/patients.js'></script>
<?php
    require('views/partials/footer.php');
?>