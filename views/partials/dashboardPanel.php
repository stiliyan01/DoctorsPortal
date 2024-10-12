<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu d-flex-column">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Dashboard</div>

                    <!-- Calendar link -->
                    <a class="nav-link <?=  urlIs('/admin') ? 'active' : ''; ?>" href="/admin">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-user-doctor"></i></i></div>
                        Home
                    </a>

                    <!-- Calendar link -->
                    <a class="nav-link <?=  urlIs('/admin/calendar') ? 'active' : ''; ?>" href="/admin/calendar">
                        <div class="sb-nav-link-icon"><i class="fa-regular fa-calendar"></i></div>
                        Calendar
                    </a>

                    <!-- Patients link -->
                    <a class="nav-link <?=  urlIs('/admin/patients') ? 'active' : ''; ?>" href="/admin/patients">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-hospital-user"></i></div>
                        Patients
                    </a>
                </div>
                <div class="sb-sidenav-footer align-items-end">
                    <div class="small">Logged in as:</div>
                    tuk moje da slojish username
                </div>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">