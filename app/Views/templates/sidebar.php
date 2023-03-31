<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="/images/icon/uvy2.png" alt="USSI Admin" />
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
                    <a href="<?= base_url('karyawan') ?>">
                        <i class="fas fa-dot-circle-o"></i>Karyawan</a>
                </li>
                <li>
                    <a class="js-arrow" href="<?= base_url('transaksi') ?>">
                        <i class="fas fa-dot-circle-o"></i>Transaksi Inventaris</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-file-text"></i>Laporan</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="<?= base_url('komplain') ?>">
                                <i class="fas fa-dot-circle-o"></i>Form Komplain</a>
                        </li>
                        <!-- <li>
                            <a href="<?= base_url('history') ?>">
                                <i class="fas fa-dot-circle-o"></i>History Barang</a>
                        </li> -->
                    </ul>
                </li>
                <hr>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-table"></i>Table Referensi</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <!-- <div class="mess__title">
                            <p>Referensi Barang</p>
                        </div> -->
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Referensi Barang</a>
                            <ul class="list-unstyled js-sub-list">
                                <li>
                                    <a href="<?= base_url('jenis') ?>"><i class="fas fa-angle-right"></i>Jenis Barang</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('kondisi_dibeli') ?>"><i class="fas fa-angle-right"></i>Kondisi Saat Dibeli</a>
                                </li>
                                <!-- <li>
                                    <a href="<?= base_url('kondisi_sekarang') ?>"><i class="fas fa-angle-right"></i>Kondisi Sekarang</a>
                                </li> -->
                                <li>
                                    <a href="<?= base_url('penanggung_jawab') ?>"><i class="fas fa-angle-right"></i>Penanggung Jawab</a>
                                </li>
                            </ul>
                        </li>
                        <!-- <div class="mess__title">
                                <p>Referensi Karyawan</p>
                            </div> -->
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Referensi Karyawan</a>
                            <ul class="list-unstyled js-sub-list">
                                <li>
                                    <a href="<?= base_url('divisi') ?>"><i class="fas fa-angle-right"></i>Divisi</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('jabatan') ?>"><i class="fas fa-angle-right"></i>Jabatan</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('status') ?>"><i class="fas fa-angle-right"></i>Status</a>
                                </li>
                            </ul>
                        </li>
                        <!-- <div class="mess__title">
                            <p>Referensi Transaksi</p>
                        </div> -->
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Referensi Transaksi</a>
                            <ul class="list-unstyled js-sub-list">
                                <li>
                                    <a href="<?= base_url('kode_trans') ?>"><i class="fas fa-angle-right"></i>Kode Transaksi</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?= base_url('users') ?>">
                        <i class="fas fa-users"></i>Users</a>
                </li>
                <!-- <button class="openbtn rounded-circle" href="javascript:void(0)" onclick="closeNav()">&#9776;</button> -->
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->