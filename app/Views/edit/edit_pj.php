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
                            <a type="button" class="btn btn-secondary btn-sm mr-3" href="/pj/penanggung_jawab"><i class="fas fa-reply"></i> Back</a>
                            Edit Data<strong>Penanggung Jawab</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="/pj/edit_pj" method="post" class="form-horizontal">
                                <?= csrf_field(); ?>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="id_pj" class="form-control-label">ID Penanggung Jawab</label>
                                    </div>
                                    <div class="form-group col-md-7">
                                        <input type="text" id="id_pj" name="id_pj" class="form-control" value="<?= $pj->id_pj; ?>" readonly="">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="kode_pj" class="form-control-label">Kode Penanggung Jawab</label>
                                    </div>
                                    <div class="form-group col-md-7">
                                        <input type="text" id="kode_pj" name="kode_pj" class="form-control" value="<?= $pj->kode_pj; ?>" autofocus>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="penanggung_jawab" class="form-control-label">Penanggung Jawab</label>
                                    </div>
                                    <div class="form-group col-md-7">
                                        <input type="text" id="penanggung_jawab" name="penanggung_jawab" class="form-control" value="<?= $pj->penanggung_jawab; ?>">
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary btn-sm">
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