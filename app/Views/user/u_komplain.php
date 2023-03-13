<?= $this->extend('templates2/index'); ?>

<?= $this->section('page-content'); ?>

<!-- PAGE CONTAINER-->
<div class="page-container">

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                            <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                <div class="bg-overlay bg-overlay--black"></div>
                                <h3>
                                    <!-- <i class="fas fa-frown-o"></i> -->
                                    Form Komplain
                                </h3>
                                <a class="au-btn-plus" href="<?= base_url('add_komplain') ?>">
                                    <i class="zmdi zmdi-plus"></i>
                                </a>
                            </div>
                            <div class="au-inbox-wrap js-inbox-wrap">
                                <div class="au-message js-list-load">
                                    <div class="au-message__noti">
                                        <p>
                                            <span></span>
                                        </p>
                                    </div>
                                    <div class="au-message-list">
                                        <div class="table-responsive table-responsive-data2">
                                            <table class="table table-data2 table-condensed" style="border-collapse:collapse;">
                                                <thead>
                                                    <tr align="center">
                                                        <th>ID</th>
                                                        <th>Tanggal</th>
                                                        <th>Nama Karyawan</th>
                                                        <th>Nama Barang</th>
                                                        <th>Kondisi</th>
                                                        <th>Keluhan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1; ?>
                                                    <?php foreach ($komplain as $key => $value) : ?>
                                                        <tr class="tr-shadow accordion-toggle" align="center" data-toggle="collapse" data-target="#demo1">
                                                            <td scope="row"><?= $i++; ?></td>
                                                            <td><?= $value->tanggal; ?></td>
                                                            <td><?= $value->karyawan; ?></td>
                                                            <td><?= $value->barang; ?></td>
                                                            <td><?= $value->kondisi_sekarang; ?></td>
                                                            <td><?= $value->keterangan; ?></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="au-message__footer">
                                    </div>
                                </div>
                            </div>
                        </div>
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