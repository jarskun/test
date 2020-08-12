<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:<?= base_url('assets/'); ?>partials/_navbar.html -->
    <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="<?= base_url('assets/'); ?>index.html"><img src="<?= base_url('assets/'); ?>assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>

            <ul class="navbar-nav navbar-nav-right">


                <li class="nav-item dropdown">
                    <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                        <div class="navbar-profile">
                            <img class="img-xs rounded-circle" src="<?= base_url('assets/'); ?>assets/images/faces/propil.png">
                            <p class="mb-0 d-none d-sm-block navbar-profile-name text text-warning"><?= $user['nama']; ?></p>

                        </div>
                    </a>

    </nav>