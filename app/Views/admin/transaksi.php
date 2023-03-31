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
                                <form action="" method="get" autocomplete="off">
                                    <div class="float-left">
                                        <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Search" autocomplete="off">
                                    </div>
                                    <div class="float-right ml-2">
                                        <button type="submit" class="btn btn-success"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <!-- Trigger the modal with a button -->
                            <!-- <div class="input-group mb-3 col-lg-4">
                                <input type="text" class="form-control" placeholder="Pilih Barang...">
                                <div class="input-group-prepend">
                                    <a type="button" class="input-group-text btn-danger" data-toggle="modal" data-target="#bModal"><i class="fas fa-search"></i></a>
                                </div>
                            </div> -->
                            <div class="table-data__tool">
                                <a class="au-btn au-btn-icon au-btn--green au-btn--small text-white" href="/transaksi/add_transaksi">Transaksi</a>
                                <!-- <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    Export</button> -->
                            </div>
                        </div>
                        <?php if (session()->getFlashdata('berhasil')) : ?>
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <?= session()->getFlashdata('berhasil'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>Kode Trans</th>
                                        <th>Tanggal Trans</th>
                                        <th>ID Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Merk</th>
                                        <th>Nama Karyawan</th>
                                        <th>Keterangan</th>
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
                                            <td><?= $value->ket; ?></td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <a class="item" data-toggle="tooltip" data-placement="top" title="Detail" href="<?= base_url("transaksi/det_trans/$value->id_trans") ?>">
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