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
                        <h3 class="title-5 m-b-35">Data Barang Inventaris</h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <!-- <div class="rs-select2--light rs-select2--md">
                                    <select class="js-select2" name="property">
                                        <option selected="selected">Jenis Barang</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div> -->
                                <div class="rs-select2--light rs-select2--md">
                                    <input type="date" class="form-control" placeholder="Start" name="date1" />
                                    <div class="dropDownSelect2"></div>
                                </div>
                                <!-- <button class="au-btn-filter">
                                    <i class="zmdi zmdi-filter-list"></i>filters</button> -->
                            </div>
                            <div class="table-data__tool">
                                <div class="dropdown m-r-5">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small dropdown-toggle" type="button" data-toggle="dropdown">
                                        Add Item</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="/barang/add_barang">Input Data Satuan</a>
                                        <a class="dropdown-item" href="#">Import Dari Excel</a>
                                    </div>
                                </div>

                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    Export</button>
                            </div>
                        </div>
                        <?php if (session()->getFlashdata('berhasil')) : ?>
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <?= session()->getFlashdata('berhasil'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2 table-condensed" style="border-collapse:collapse;">
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
                                    <?php foreach ($barang as $B) : ?>
                                        <tr class="tr-shadow accordion-toggle" data-toggle="collapse" data-target="#demo1">
                                            <td scope="row"><?= $i++; ?></td>
                                            <td><?= $B['barang']; ?></td>
                                            <td><?= $B['merk']; ?></td>
                                            <td><?= $B['id_jenis']; ?></td>
                                            <td><?= $B['tperoleh']; ?></td>
                                            <td><?= $B['masa_guna']; ?></td>
                                            <td>RP <?= $B['harga']; ?></td>
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
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Detail">
                                                        <i class="zmdi zmdi-info"></i>
                                                    </button>
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