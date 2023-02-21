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
                        <div class="card">
                            <div class="card-header bg-secondary text-white">
                                <a type="button" class="btn btn-secondary btn-sm mr-3" href="<?= base_url('karyawan') ?>"><i class="fas fa-reply"></i> Back</a>
                                        Tambah <strong>Karyawan</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="<?= base_url('save_karyawan') ?>" method="post" class="form-horizontal">
                                    <?= csrf_field(); ?>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="id" class=" form-control-label">ID Karyawan</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="text" id="id" name="id" class="form-control" readonly="">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="karyawan" class=" form-control-label">Nama Karyawan</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="text" id="karyawan" name="karyawan" class="form-control" autofocus>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="id_divisi" class=" form-control-label">Divisi</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <select name="divisi" class="form-control">
                                                <option value="">- Pilih -</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="id_jabatan" class=" form-control-label">Jabatan</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <select name="jabatan" class="form-control">
                                                <option value="">- Pilih -</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="status" class=" form-control-label">Status</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="text" id="status" name="status" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="ket" class=" form-control-label">Keterangan</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="text" id="ket" name="ket" class="form-control">
                                        </div>
                                    </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <!-- <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button> -->
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