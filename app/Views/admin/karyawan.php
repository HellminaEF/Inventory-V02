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
                        <h3 class="title-5 m-b-35">Data Karyawan</h3>
                        <hr>
                        <div class="table-data__tool">
                            <div class="table-data__tool-right">
                                <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="/karyawan/add_karyawan">
                                    <i class="zmdi zmdi-plus"></i>Tambah Karyawan</a>
                            </div>
                        </div>
                        <!-- END DATA TABLE -->
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
                        <?php if (session()->getFlashdata('update')) : ?>
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <?= session()->getFlashdata('update'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row m-t-30">
                    <div class="col-md-12">
                        <!-- DATA TABLE-->
                        <!-- <div class="table-responsive m-b-40">
                            <table class="table table-borderless table-data3"> -->
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2 table-condensed display dataTable" style="border-collapse:collapse;">
                                <thead>
                                    <tr align="center">
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Divisi</th>
                                        <th>Jabatan</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    <?php $i = 1; ?>
                                    <?php foreach ($karyawan as $key => $value) : ?>
                                        <tr class="tr-shadow accordion-toggle" data-toggle="collapse" data-target="#demo1">
                                            <td><?= $value->kode_karyawan; ?></td>
                                            <td><?= $value->karyawan; ?></td>
                                            <td><?= $value->divisi; ?></td>
                                            <td><?= $value->jabatan; ?></td>
                                            <td><?= $value->status; ?></td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                    <i class="zmdi zmdi-mail-send"></i>
                                                </button> -->
                                                    <a class="item" data-toggle="tooltip" data-placement="top" title="Edit" href="<?= base_url("karyawan/edit_karyawan/$value->id_karyawan") ?>">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </a>
                                                    <a class="item" data-toggle="tooltip" href="<?= base_url("karyawan/delete/$value->id_karyawan") ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </a>
                                                    <a class="item" data-toggle="tooltip" data-placement="top" title="Detail" href="<?= base_url("karyawan/det_karyawan/$value->id_karyawan") ?>">
                                                        <i class="zmdi zmdi-info"></i>
                                                    </a>
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