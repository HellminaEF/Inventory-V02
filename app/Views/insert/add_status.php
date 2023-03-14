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
                            <a type="button" class="btn btn-secondary btn-sm mr-3" href="<?= base_url('status') ?>"><i class="fas fa-reply"></i> Back</a>
                            Tambah <strong>Status</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="/status/save" method="post" class="form-horizontal">
                                <?= csrf_field(); ?>
                                <!-- <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="id_divisi" class="form-control-label">ID Divisi</label>
                                    </div>
                                    <div class="form-group col-md-7">
                                        <input type="text" id="id_divisi" name="id_divisi" class="form-control" readonly="">
                                    </div>
                                </div> -->
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="status" class="form-control-label">Status</label>
                                    </div>
                                    <div class="form-group col-md-7">
                                        <input type="text" class="form-control" id="status" name="status" autocomplete="off" autofocus value="<?= old('status'); ?>">
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer">
                            <div class="col-sm-10">
                                <button type="Submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
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