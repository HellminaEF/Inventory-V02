<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="/images/icon/c4.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a class="js-arrow" href="<?= base_url('user') ?>">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li>
                    <a class="js-arrow" href="<?= base_url('u_barang') ?>">
                        <i class="fas fa-dot-circle-o"></i>Barang Inventaris</a>
                </li>
                <li>
                    <a class="js-arrow" href="<?= base_url('comment') ?>">
                        <i class="fas fa-dot-circle-o"></i>Form Keluhan</a>
                </li>
                <!-- <button class="openbtn rounded-circle" href="javascript:void(0)" onclick="closeNav()">&#9776;</button> -->
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->