<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark bg-primary" id="sidenavAccordion">
            <div class="sb-sidenav-menu d-flex-column">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading text-white">Контролен панел</div>

                    <!-- Calendar link -->
                    <a class="nav-link <?=  urlIs('/admin') ? 'active' : ''; ?>" href="/admin">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-user-doctor"></i></i></div>
                        Профил
                    </a>

                    <!-- Calendar link -->
                    <a class="nav-link <?=  urlIs('/admin/calendar') ? 'active' : ''; ?>" href="/admin/calendar">
                        <div class="sb-nav-link-icon"><i class="fa-regular fa-calendar"></i></div>
                        Календар
                    </a>

                    <!-- Patients link -->
                    <a class="nav-link <?=  urlIs('/admin/patients') ? 'active' : ''; ?>" href="/admin/patients">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-hospital-user"></i></div>
                        Пациенти
                    </a>
                </div>
                <div class="sb-sidenav-footer align-items-end justify-content-end bg-primary">
                    <form method="POST" action="/logout">
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn text-danger">Излез</button>
                    </form>

                </div>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">