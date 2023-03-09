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
                                <a type="button" class="btn btn-secondary btn-sm mr-3" href="/barang/barang"><- Back</a>
                                        Edit <strong>Barang</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="/barang/edit_barang" method="post" class="form-horizontal">
                                    <?= csrf_field(); ?>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="id_barang" class=" form-control-label">ID Barang</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="text" id="id_barang" name="id_barang" class="form-control">
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
                                            <select name="jenis" class="form-control">
                                                <option value="" hidden>- Pilih -</option>
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
                                    <i class="fa fa-dot-circle-o"></i> Simpan
                                </button>
                                <!-- <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button> -->
                                <!-- <button type="button" class="btn btn-primary btn-sm float-right" href="#">
                                    Next <i class="fa fa-chevron-right"></i>
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