<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top">DOC PORT</a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
            aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#saveATime">ЗАПАЗИ
                        ЧАС</a></li>
                <?php if (!isset($_SESSION['user'])) : ?>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href='/login'>Влез</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                        href='/register'>Регистрирай се</a></li>
                <?php else : ?>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                        href='user-profile'>Профил</a></li>
                <?php endif;  ?>
                <?php if (isset($_SESSION['user'])) : ?>
                <li class="nav-item mx-0 mx-lg-1">
                    <form action="/logout" method="POST" style="display: inline;">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="nav-link py-3 px-0 px-lg-3 rounded text-danger"
                            style="border: none; background: none;">
                            ИЗЛЕЗ
                        </button>
                    </form>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>