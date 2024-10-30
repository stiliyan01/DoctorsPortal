<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register - SB Admin</title>
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Създай акунт</h3>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="/register">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputFirstName" type="text"
                                                        name="first_name" />
                                                    <label for="inputFirstName">Име</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputLastName" type="text"
                                                        name="last_name" />
                                                    <label for="inputLastName">Фамилия</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="email" name="email" />
                                            <label for="inputEmail">Емайл</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputPassword" type="password"
                                                        name="password" />
                                                    <label for="inputPassword">Парола</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputPasswordConfirm"
                                                        type="password" />
                                                    <label for="inputPasswordConfirm">Потвърди парола</label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1"
                                                value="мъж">
                                            <label class="form-check-label" for="inlineRadio1">Мъж</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2"
                                                value="жена">
                                            <label class="form-check-label" for="inlineRadio2">Жена</label>
                                        </div>


                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="showFieldsCheckbox"
                                                name="is_doctor">
                                            <label class="form-check-label" for="showFieldsCheckbox">
                                                Избери ако си лекар!
                                            </label>
                                        </div>

                                        <div id="extraFields" style="display: none;">
                                            <div class="mb-3">
                                                <select class="form-select" id='doctorSpecialties'
                                                    aria-label="Default select example" name="specialty" required>
                                                    <option selected disabled>Избери специалност!</option>
                                                    <!-- <option value='edno'>Избери специалност!</option> -->
                                                    <?php  foreach($doctoralSpecialties as $specialty): ?>
                                                    <option value="<?= htmlspecialchars($specialty['id']) ?>">
                                                        <?= htmlspecialchars($specialty['name']) ?>
                                                    </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <select class="form-select" id='city'
                                                    aria-label="Default select example" name="city" required>
                                                    <option selected disabled>Избери град!</option>
                                                    <?php  foreach($cities as $city): ?>
                                                    <option value="<?= htmlspecialchars($city['id']) ?>">
                                                        <?= htmlspecialchars($city['name']) ?>
                                                    </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid">
                                                <button type="submit"
                                                    class="btn btn-primary btn-block bg-primary border-primary">Създай
                                                    акаунт</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="/login" class='text-primary'>Имаш акаунт? Влез!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="../js/scripts.js"></script>
    <script src="../js/register.js"></script>
</body>

</html>