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
                                <a type="button" class="btn btn-secondary btn-sm mr-3" href="/transaksi"><i class="fas fa-reply"></i> Back</a>
                                Tambah <strong>Karyawan</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="/transaksi/create" method="post" class="form-horizontal">
                                    <?= csrf_field(); ?>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="id_trans" class=" form-control-label">ID Transaksi</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="text" id="id_trans" name="id_trans" class="form-control" readonly="">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="t_trans" class=" form-control-label">Tanggal transaksi</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="date" id="t_trans" name="t_trans" class="form-control" autofocus>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="id_barang" class=" form-control-label">Barang</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <select name="id_barang" class="form-control selectpicker" data-live-search="true">
                                                <option value="" hidden>- Pilih -</option>
                                                <?php foreach ($barang as $key => $value) : ?>
                                                    <option value="<?= $value->id_barang ?>"><?= $value->id_barang; ?> | <?= $value->barang ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="id_karyawan" class=" form-control-label">Karyawan</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <select name="id_karyawan" class="form-control">
                                                <option value="" hidden>- Pilih -</option>
                                                <?php foreach ($karyawan as $key => $value) : ?>
                                                    <option value="<?= $value->id_karyawan ?>"><?= $value->id_karyawan; ?> | <?= $value->karyawan ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="ket" class=" form-control-label">Keterangan</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <textarea class="form-control" rows="3" name="ket" id="ket" placeholder="Berikan keterangan.."></textarea>
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