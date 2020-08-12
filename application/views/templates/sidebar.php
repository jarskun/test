<div class="container-scroller">
    <!-- partial:<?= base_url('assets/'); ?>partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo">
                <i class="fab fa-cc-discover"></i>
                <h3>steam kendaraan</h3>
            </a>
            <a class="sidebar-brand brand-logo-mini" href="<?= base_url('assets/'); ?>index.html"><img src="<?= base_url('assets/'); ?>assets/images/logo-mini.svg" alt="logo" /></a>
        </div>

        <ul class="nav" active>
            <?php if ($this->session->userdata('role') == 'admin') : ?>
                <li class="nav-item nav-category">
                    <span class="nav-link">Admin</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="<?= base_url('user/index'); ?>">
                        <span class="menu-icon">
                            <i class="mdi mdi-view-dashboard"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <br>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="<?= base_url('Data'); ?>">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">kelola data user</span>
                    </a>
                </li>
                <br>
            <?php endif; ?>

            <li class="nav-item menu-items">
                <a class="nav-link" href="<?= base_url('user/propil'); ?>">
                    <span class="menu-icon">
                        <i class="mdi mdi-account-circle"></i>
                    </span>
                    <span class="menu-title">propile</span>
                </a>
            </li>
            <br>


            <li class="nav-item menu-items">
                <a class="nav-link" href="<?= base_url('dataKen') ?>">
                    <span class="menu-icon">
                        <i class="mdi mdi-book-open-page-variant"></i>
                    </span>
                    <span class="menu-title">booking</span>
                </a>
            </li>
            <br>

            <li class="nav-item menu-items">
                <a class="nav-link" href="<?= base_url('Booking'); ?>">
                    <span class="menu-icon">
                        <i class="mdi mdi-book-open"></i>
                    </span>
                    <span class="menu-title">antrian</span>
                </a>
            </li>
            <br>

            <li class="nav-item menu-items">
                <a class="nav-link" href="<?= base_url('user/transaksi'); ?>">
                    <span class="menu-icon">
                        <i class="mdi mdi-cash-usd"></i>
                    </span>
                    <span class="menu-title">transaksi</span>
                </a>
            </li>
            <br>

            <li class="nav-item menu-items">
                <a class="nav-link" href="<?= base_url('user/logout'); ?>" onclick="return confirm('yakin?');">
                    <span class="menu-icon">
                        <i class="mdi mdi-logout text-danger"></i>
                    </span>
                    <span class="menu-title">logout</span>
                </a>
            </li>
            <br>


            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('assets/'); ?>pages/ui-features/buttons.html">Buttons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('assets/'); ?>pages/ui-features/dropdowns.html">Dropdowns</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('assets/'); ?>pages/ui-features/typography.html">Typography</a></li>
                </ul>
            </div>

        </ul>
    </nav>