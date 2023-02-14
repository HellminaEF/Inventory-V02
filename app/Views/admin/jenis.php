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
                        <h3 class="title-5 m-b-35">Data Jenis Barang</h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-right">
                                <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="/jenis/add_jenis">
                                    <i class="zmdi zmdi-plus"></i>Tambah Jenis Barang</a>
                            </div>
                        </div>
                        <!-- END DATA TABLE -->
                    </div>
                </div>
                <?php if (session()->getFlashdata('berhasil')) : ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?= session()->getFlashdata('berhasil'); ?>
                    </div>
                <?php endif; ?>
                <div class="row m-t-30">
                    <div class="col-md-12">
                        <!-- DATA TABLE-->
                        <div class="table-responsive m-b-40">
                            <table class="table table-borderless table-data3">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Jenis Barang</th>
                                        <th>Keterangan</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($jenis as $Je) : ?>
                                        <tr>
                                            <td scope="row"><?= $i++; ?></td>
                                            <td><?= $Je['jenis']; ?></td>
                                            <td><?= $Je['ket']; ?></td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    <button class="item" type="button" data-toggle="modal" data-target="#myModal" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE-->
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