<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu d-flex-column">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Dashboard</div>
                    <a class="nav-link  <?php echo current_uri() === '/calendar.php' ? 'active' : ''; ?>"" href="
                        calendar.php">
                        <div class="sb-nav-link-icon"><i class="fa-regular fa-calendar"></i></div>
                        Calendar
                    </a>
                    <a class="nav-link <?php echo current_uri() === '/patients.php' ? 'active' : ''; ?>"
                        href="patients.php">

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