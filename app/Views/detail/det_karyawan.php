<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<!-- PAGE CONTAINER-->
<div class="page-container">

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-header bg-secondary text-white">
                                <a type="button" class="btn btn-secondary btn-sm mr-3" href="<?= base_url('karyawan') ?>"><i class="fas fa-reply"></i> Back</a>
                                Detail <strong>Karyawan</strong>
                            </div>
                            <div class="card-body">
                                <div class="card-text text-sm">
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="barang" class=" form-control-label">
                                                <h5>ID Karyawan</h5>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <h4> <small>: <?= $karyawan->kode_karyawan; ?></small></h4>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="barang" class=" form-control-label">
                                                <h5>Nama Karyawan</h5>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <h4> <small>: <?= $karyawan->karyawan; ?></small></h4>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="barang" class=" form-control-label">
                                                <h5>Divisi</h5>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <h4> <small>: <?= $karyawan->id_divisi; ?></small></h4>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="barang" class=" form-control-label">
                                                <h5>Jabatan</h5>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <h4> <small>: <?= $karyawan->id_jabatan; ?></small></h4>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="barang" class=" form-control-label">
                                                <h5>Status</h5>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <h4> <small>: <?= $karyawan->id_status; ?></small></h4>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="barang" class=" form-control-label">
                                                <h5>Keterangan</h5>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <h4> <small>: <?= $karyawan->ket; ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
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