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
                                <a type="button" class="btn btn-secondary btn-sm mr-3" href="/karyawan/karyawan"><i class="fas fa-reply"></i> Back</a>
                                Tambah <strong>Karyawan</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="/karyawan/create" method="post" class="form-horizontal">
                                    <?= csrf_field(); ?>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="kode_karyawan" class=" form-control-label">ID Karyawan</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="text" id="kode_karyawan" name="kode_karyawan" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="karyawan" class=" form-control-label">Nama Karyawan</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="text" id="karyawan" name="karyawan" class="form-control" required="required" autocomplete="off" autofocus>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="id_divisi" class=" form-control-label">Divisi</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <select name="id_divisi" class="form-control selectpicker" required="required" autocomplete="off" data-live-search="true">
                                                <option value="" hidden>- Pilih -</option>
                                                <?php foreach ($divisi as $key => $value) : ?>
                                                    <option value="<?= $value->id_divisi ?>"><?= $value->divisi ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="id_jabatan" class=" form-control-label">Jabatan</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <select name="id_jabatan" class="form-control" required="required" autocomplete="off">
                                                <option value="" hidden>- Pilih -</option>
                                                <?php foreach ($jabatan as $key => $value) : ?>
                                                    <option value="<?= $value->id_jabatan ?>"><?= $value->jabatan ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="id_status" class=" form-control-label">Status</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <select type="text" id="id_status" name="id_status" class="form-control" autocomplete="off">
                                                <option value="" hidden>- Pilih -</option>
                                                <?php foreach ($status as $key => $value) : ?>
                                                    <option value="<?= $value->id_status ?>"><?= $value->status ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="ket" class=" form-control-label">Keterangan</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="text" id="ket" name="ket" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
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