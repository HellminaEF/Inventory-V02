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
                                <a type="button" class="btn btn-secondary btn-sm mr-3" href="/barang/barang"><i class="fas fa-reply"></i> Back</a>
                                        Tambah <strong>Barang</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="/barang/create" method="post" class="form-horizontal">
                                    <?= csrf_field(); ?>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="id_barang" class=" form-control-label">ID Barang</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="text" id="id_barang" name="id_barang" class="form-control" readonly="">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="barang" class=" form-control-label">Nama Barang</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="text" id="barang" name="barang" class="form-control" required="required" autofocus>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="merk" class=" form-control-label">Merk</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="text" id="merk" name="merk" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="id_jenis" class=" form-control-label">Jenis Barang</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <select name="id_jenis" class="form-control" required>
                                                <option value="" hidden>- Pilih -</option>
                                                    <?php foreach ($jenis as $key => $value) : ?>
                                                    <option value="<?= $value->id_jenis ?>"><?= $value->jenis ?></option>
                                                    <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="tperoleh" class="form-control-label">Tanggal Peroleh</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="date" id="tperoleh" name="tperoleh" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="masa_guna" class=" form-control-label">Masa Guna (bulan)</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="text" id="masa_guna" name="masa_guna" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="harga" class=" form-control-label">Harga</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="text" id="harga" name="harga" class="form-control" required="required">
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