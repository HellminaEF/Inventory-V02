<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<!-- PAGE CONTAINER-->
<div class="page-container">

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-secondary text-white">
                            <a type="button" class="btn btn-secondary btn-sm mr-3" href="/kondisi_sekarang"><i class="fas fa-reply"></i> Back</a>
                            Edit Data<strong>Kondisi Sekarang</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="<?= base_url('kondisi_sekarang/update/' . $ks->id_ksekarang); ?>" method="post" class="form-horizontal">
                                <?= csrf_field(); ?>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="kondisi_sekarang" class="form-control-label">Kondisi Barang Sekarang</label>
                                    </div>
                                    <div class="form-group col-md-7">
                                        <input type="text" id="kondisi_sekarang" name="kondisi_sekarang" class="form-control" value="<?= $ks->kondisi_sekarang; ?>" autocomplete="off" autofocus>
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer">
                            <div class="col-sm-10">
                                <button type="update" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Simpan
                                </button>
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

<?= $this->endSection(); ?>