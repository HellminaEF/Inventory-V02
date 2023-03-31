<?= $this->extend('templates/index'); ?>

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
                            </div>
                            <div class="au-inbox-wrap js-inbox-wrap">
                                <div class="au-message js-list-load">
                                    <!-- <div class="au-message__noti">
                                        <div class="rs-select2--light rs-select2--md">
                                            <h6>Mulai tanggal :</h6>
                                            <input type="date" class="form-control" placeholder="Start" name="date1" />
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--md">
                                            <h6>Sampai tanggal :</h6>
                                            <input type="date" class="form-control" placeholder="Start" name="date2" />
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button type="submit" onClick="document.location.reload(true)" class="au-btn-filter au-btn--grey au-btn--small">
                                            <i class="zmdi zmdi-filter-list"></i>
                                        </button>
                                    </div> -->
                                    <div class="au-message-list">
                                        <div class="table-responsive table-responsive-data2">
                                            <table class="table table-data2 table-condensed" style="border-collapse:collapse;">
                                                <thead>
                                                    <tr align="center">
                                                        <th>ID</th>
                                                        <th>Tanggal</th>
                                                        <th>Nama Barang</th>
                                                        <th>Keluhan</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1; ?>
                                                    <?php foreach ($komplain as $key => $value) : ?>
                                                        <tr class="tr-shadow accordion-toggle" align="center" data-toggle="collapse" data-target="#demo1">
                                                            <td scope="row"><?= $i++; ?></td>
                                                            <td><?= $value->t_komplain; ?></td>
                                                            <td><?= $value->barang; ?> <?= $value->merk; ?></td>
                                                            <td><?= $value->keterangan; ?></td>
                                                            <td><?= $value->approve; ?></td>
                                                            <td>
                                                                <div class="float-right">
                                                                    <a class="item" data-toggle="tooltip" data-placement="top" title="Edit" href="<?= base_url("komplain/edit_komplain/$value->id_komplain") ?>">
                                                                        <i class="zmdi zmdi-edit"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
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