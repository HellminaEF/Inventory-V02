<?= $this->extend('templates/index'); ?>

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
                        <h3 class="title-5 m-b-35">Transaksi Inventaris</h3>
                        <hr>
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <div class="rs-select2--light rs-select2--md">
                                    <input type="date" class="form-control" placeholder="Start" name="date1" />
                                    <div class="dropDownSelect2"></div>
                                </div>
                                <!-- <button class="au-btn-filter">
                                    <i class="zmdi zmdi-filter-list"></i>filters</button> -->
                            </div>
                            <!-- Trigger the modal with a button -->
                            <div class="input-group mb-3 col-lg-4">
                                <input type="text" class="form-control" placeholder="Search...">
                                <div class="input-group-prepend">
                                    <a type="button" class="input-group-text btn-primary" data-toggle="modal" data-target="#bModal"><i class="fas fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>ID Trans</th>
                                        <th>Tanggal Trans</th>
                                        <th>ID Barang</th>
                                        <th>Nama Barang</th>
                                        <th>ID Karyawan</th>
                                        <th>Nama Karyawan</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <tr class="tr-shadow accordion-toggle" data-toggle="collapse" data-target="#demo1">
                                        <td scope="row"><?= $i++; ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="table-data-feature">
                                                <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                    <i class="zmdi zmdi-mail-send"></i>
                                                </button> -->
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </button>
                                                <button class="item" type="button" data-toggle="modal" data-target="#myModal" data-placement="top" title="Delete">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </button>
                                                <a class="item" data-toggle="tooltip" data-placement="top" title="Detail" href="/transaksi/det_trans">
                                                    <i class="zmdi zmdi-info"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="bModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                    <h4 class="modal-title">Pilih Barang yang ingin di transaksi</h4>
                </div>
                <div class="modal-body">
                    <div class="table-data__tool-left mt-4">
                        <div class="rs-select2--light rs-select2--md">
                            <input type="date" class="form-control" placeholder="Start" name="date1" />
                            <div class="dropDownSelect2"></div>
                        </div>
                    </div>
                    <table class="table table-hover table-sm table-condensed mt-5">
                        <thead>
                            <tr>
                                <th>ID Barang</th>
                                <th>Nama Barang</th>
                                <th>Merk</th>
                                <th>Jenis Barang</th>
                                <th>Tanggal Peroleh</th>
                                <th>Masa Guna</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <tr class="tr-shadow accordion-toggle" align="center" data-toggle="collapse" data-target="#demo1">
                                <td scope="row"><?= $i++; ?></td>
                                <td>---</td>
                                <td>---</td>
                                <td>---</td>
                                <td>---</td>
                                <td>---</td>
                                <td>---</td>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="pilih" class="btn btn-primary btn-default" data-dismiss="modal">Pilih</button>
                    <button type="button" name="close" class="btn btn-danger btn-default" data-dismiss="modal">Close</button>
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