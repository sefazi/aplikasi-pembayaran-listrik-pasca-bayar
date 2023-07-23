<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= baseurl('/home') ?>" class="nav-link">Home</a>

        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= baseurl('/penggunaan') ?>" class="nav-link">Penggunaan </a>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= baseurl('/pelanggan') ?>" class="nav-link">Pelanggan </a>
        </li>



        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= baseurl('/tarif') ?>" class="nav-link">Tarif Daya </a>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= baseurl('/tagihan') ?>" class="nav-link">Tagihan </a>
        </li>
        </div>
        </li>
        <!-- <li class="nav-item dropdown d-none d-sm-inline-block">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li> -->
    </ul>
    <!-- Left navbar links -->
    <!-- <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul> -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-user"></i>
                <!-- <span class="badge badge-warning navbar-badge">15</span> -->
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- <span class="dropdown-item dropdown-header">15 Notifications</span> -->
                <!-- <div class="dropdown-divider"></div> -->
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="<?= baseurl('/logout') ?>" class="dropdown-item dropdown-footer">Logout</a>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->