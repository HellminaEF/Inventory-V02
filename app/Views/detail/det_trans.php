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
                                <a type="button" class="btn btn-secondary btn-sm mr-3" href="<?= base_url('transaksi') ?>"><i class="fas fa-reply"></i> Back</a>
                                Detail <strong>Transaksi</strong>
                            </div>
                            <div class="card-body">
                                <div class="card-text text-sm">
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="barang" class=" form-control-label">
                                                <h5>Kode Transaksi</h5>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <h4> <small>: <?= $transaksi->id_ktrans; ?></small></h4>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="barang" class=" form-control-label">
                                                <h5>Tanggal Transaksi</h5>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <h4> <small>: <?= $transaksi->t_trans; ?></small></h4>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="barang" class=" form-control-label">
                                                <h5>Kode Barang</h5>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <h4> <small>: <?= $transaksi->id_barang; ?></small></h4>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="barang" class=" form-control-label">
                                                <h5>Nama Barang</h5>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <h4> <small>: <?= $transaksi->id_barang; ?></small></h4>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="barang" class=" form-control-label">
                                                <h5>Nama Merk</h5>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <h4> <small>: <?= $transaksi->id_barang; ?></small></h4>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="barang" class=" form-control-label">
                                                <h5>Nama Karyawan</h5>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <h4> <small>: <?= $transaksi->id_barang; ?></small></h4>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="barang" class=" form-control-label">
                                                <h5>Keterangan</h5>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <h4> <small>: <?= $transaksi->ket; ?></h4>
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