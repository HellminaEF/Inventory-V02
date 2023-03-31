<?= $this->extend('templates2/index'); ?>

<?= $this->section('page-content'); ?>

<!-- PAGE CONTAINER-->
<div class="page-container">

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">Data Barang Inventaris</h3>
                        <hr>
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <div class="rs-select2--light rs-select2--md">
                                    <input type="date" class="form-control" placeholder="Start" name="date1" />
                                    <div class="dropDownSelect2"></div>
                                </div>
                                <div class="rs-select2--light rs-select2--md">
                                    <select class="js-select2" name="property">
                                        <option value="selected">Semua Jenis</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                                <!-- <button class="au-btn-filter">
                                    <i class="zmdi zmdi-filter-list"></i>filters</button> -->
                            </div>
                        </div>
                        <?php if (session()->getFlashdata('berhasil')) : ?>
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <?= session()->getFlashdata('berhasil'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if (session()->getFlashdata('delete')) : ?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <?= session()->getFlashdata('delete'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2 table-condensed" style="border-collapse:collapse;">
                                <thead>
                                    <tr align="center">
                                        <th>Kode Trans</th>
                                        <th>Tanggal Trans</th>
                                        <th>ID Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Merk</th>
                                        <th>Nama Karyawan</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    <?php foreach ($transaksi as $key => $value) : ?>
                                        <tr class="tr-shadow accordion-toggle" data-toggle="collapse" data-target="#demo1">
                                            <td><?= $value->kode_trans; ?></td>
                                            <td><?= $value->t_trans; ?></td>
                                            <td><?= $value->kode_barang; ?></td>
                                            <td><?= $value->barang; ?></td>
                                            <td><?= $value->merk; ?></td>
                                            <td><?= $value->karyawan; ?></td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <a class="item" data-toggle="tooltip" data-placement="top" title="Detail" href="#">
                                                        <i class="zmdi zmdi-info"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE -->
                    </div>
                </div>
            </div>
        </div>
        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal body -->
                    <div class="modal-body">
                        <h4 class="modal-title">Anda yakin akan menghapus data ini?</h4>
                        <hr>
                        <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Delete</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="copyright">
                <span>Copyright &copy; PKL13 <?= date('Y'); ?>. All rights reserved</span>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>