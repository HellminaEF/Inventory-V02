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
                                <a type="button" class="btn btn-secondary btn-sm mr-3" href="/barang/barang"><i class="fas fa-reply"></i> Back</a>
                                Detail <strong>Barang</strong>
                            </div>
                            <div class="card-body">
                                <div class="card-text text-sm">
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="barang" class=" form-control-label">
                                                <h5>Kode Barang</h5>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <h4> <small>: <?= $barang->kode_barang; ?></small></h4>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="barang" class=" form-control-label">
                                                <h5>Nama Barang</h5>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <h4> <small>: <?= $barang->barang; ?></small></h4>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="barang" class=" form-control-label">
                                                <h5>Jenis Barang</h5>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <h4> <small>: <?= $barang->id_jenis; ?></small></h4>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="barang" class=" form-control-label">
                                                <h5>Penanggung Jawab</h5>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <h4> <small>: <?= $barang->id_pj; ?></small></h4>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="barang" class=" form-control-label">
                                                <h5>Merk</h5>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <h4> <small>: <?= $barang->merk; ?></small></h4>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="barang" class=" form-control-label">
                                                <h5>Kondisi Saat dibeli</h5>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <h4> <small>: <?= $barang->id_kdibeli; ?></small></h4>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="barang" class=" form-control-label">
                                                <h5>Tanggal Diperoleh</h5>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <h4> <small>: <?= $barang->tperoleh; ?></small></h4>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="barang" class=" form-control-label">
                                                <h5>Masa Guna</h5>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <h4> <small>: <?= $barang->masa_guna; ?></small></h4>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="barang" class=" form-control-label">
                                                <h5>Harga</h5>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <h4> <small>: <?= $barang->harga; ?></small></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card-footer">
                                <button type="button" class="btn btn-warning btn-sm float-right">
                                    <i class="fa fa-dot-circle-o"></i> Edit
                                </button>
                                <button type="button" class="btn btn-danger btn-sm float-right mr-3" href="#">
                                    <i class="fa fa-ban"></i> Delete
                                </button>
                            </div> -->
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