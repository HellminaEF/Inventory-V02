<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="images/icon/c4.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a class="js-arrow" href="<?= base_url('admin') ?>">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li>
                    <a class="js-arrow" href="<?= base_url('barang') ?>">
                        <i class="fas fa-dot-circle-o"></i>Barang Inventaris</a>
                </li>
                <li>
                    <a class="js-arrow" href="<?= base_url('transaksi') ?>">
                        <i class="fas fa-dot-circle-o"></i>Transaksi Inventaris</a>
                </li>
                <li>
                    <a href="<?= base_url('karyawan') ?>"><i class="fas fa-dot-circle-o"></i>Karyawan</a>
                </li>
                <hr>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-table"></i>Table Referensi</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="<?= base_url('jenis') ?>"><i class="fas fa-angle-right"></i>Jenis Barang</a>
                        </li>
                        <li>
                            <a href="<?= base_url('divisi') ?>"><i class="fas fa-angle-right"></i>Divisi</a>
                        </li>
                        <li>
                            <a href="<?= base_url('jabatan') ?>"><i class="fas fa-angle-right"></i>Jabatan</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->