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
                                <a type="button" class="btn btn-secondary btn-sm mr-3" href="/jabatan/jabatan"><i class="fas fa-reply"></i> Back</a>
                                        Tambah <strong>Jabatan</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="/jabatan/save" method="post" class="form-horizontal">
                                    <?= csrf_field(); ?>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="id_jabatan" class=" form-control-label">ID Jabatan</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="text" id="id_jabatan" name="id_jabatan" class="form-control" readonly="">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="jabatan" class=" form-control-label">Jabatan</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="text" id="jabatan" name="jabatan" class="form-control" required="required" autofocus>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="ket" class=" form-control-label">Keterangan</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="text" id="ket" name="ket" class="form-control">
                                        </div>
                                    </div>
                            </div>
                            <div class="card-footer">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary btn-sm">
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
</div>

<?= $this->endSection(); ?>