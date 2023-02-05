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
                                <a type="button" class="btn btn-secondary btn-sm" href="<?= base_url('karyawan') ?>"><- Back</a>
                                        Tambah <strong>Karyawan</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="" method="post" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="id" class=" form-control-label">ID Karyawan</label>
                                        </div>
                                        <div class="form-group col-md-9">
                                            <input type="text" id="id" name="id" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="nama" class=" form-control-label">Nama Karyawan</label>
                                        </div>
                                        <div class="form-group col-md-9">
                                            <input type="text" id="nama" name="nama" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="divisi" class=" form-control-label">Divisi</label>
                                        </div>
                                        <div class="form-group col-md-9">
                                            <input type="text" id="divisi" name="divisi" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="jabatan" class=" form-control-label">Jabatan</label>
                                        </div>
                                        <div class="form-group col-md-9">
                                            <input type="text" id="jabatan" name="jabatan" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="status" class=" form-control-label">Status</label>
                                        </div>
                                        <div class="form-group col-md-9">
                                            <input type="text" id="status" name="status" class="form-control" required="required">
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
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
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