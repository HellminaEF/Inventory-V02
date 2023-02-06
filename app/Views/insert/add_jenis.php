<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<!-- PAGE CONTAINER-->
<div class="page-container">

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="form-control">
                        <div class="card">
                            <div class="card-header">
                                <a type="button" class="btn btn-secondary btn-sm" href="<?= base_url('jenis') ?>"><- Back</a>
                                        Tambah <strong>Data Jenis</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="" method="post" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="id" class=" form-control-label">ID Jenis Barang</label>
                                        </div>
                                        <div class="form-group col-md-9">
                                            <input type="text" id="id" name="id" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="jenis" class=" form-control-label">Jenis Barang</label>
                                        </div>
                                        <div class="form-group col-md-9">
                                            <input type="text" id="jenis" name="jenis" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="ket" class=" form-control-label">Keterangan</label>
                                        </div>
                                        <div class="form-group col-md-9">
                                            <input type="text" id="ket" name="ket" class="form-control" required="required">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
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
        </div>
    </div>
</div>

<?= $this->endSection(); ?>