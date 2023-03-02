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
                            <a type="button" class="btn btn-secondary btn-sm mr-3" href="/divisi/divisi"><i class="fas fa-reply"></i> Back</a>
                            Edit <strong>Divisi</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="/divisi/edit_divisi" method="post" class="form-horizontal">
                                <?= csrf_field(); ?>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="id_divisi" class="form-control-label">ID Divisi</label>
                                    </div>
                                    <div class="form-group col-md-7">
                                        <input type="text" id="id_divisi" name="id_divisi" class="form-control" value="<?= $divisi->id_divisi; ?>" readonly="">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="divisi" class="form-control-label">Nama Divisi</label>
                                    </div>
                                    <div class="form-group col-md-7">
                                        <input type="text" class="form-control" value="<?= $divisi->divisi; ?>" id="divisi" name="divisi" autofocus value="<?= old('divisi'); ?>">
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer">
                            <div class="col-sm-10">
                                <button type="Submit" class="btn btn-primary btn-sm">
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