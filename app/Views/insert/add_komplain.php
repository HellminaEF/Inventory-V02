<?= $this->extend('templates2/index'); ?>

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
                                <a type="button" class="btn btn-secondary btn-sm mr-3" href="/u_komplain"><i class="fas fa-reply"></i> Back</a>
                                <!-- Buat <strong>Keluhan</strong> -->
                            </div>
                            <div class="card-body card-block">
                                <form action="/comment/create" method="post" class="form-horizontal">
                                    <?= csrf_field(); ?>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="id_comment" class=" form-control-label">No</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="text" id="id_comment" name="id_comment" class="form-control" autocomplete="off" readonly="">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="id_trans" class=" form-control-label">Barang</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <select name="id_trans" class="form-control selectpicker" required="required" data-live-search="true" autocomplete="off" autofocus>
                                                <option value="" hidden>- Pilih -</option>
                                                <?php foreach ($transaksi as $key => $value) : ?>
                                                    <option value="<?= $value->id_trans ?>"><?= $value->barang; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="id_trans" class=" form-control-label">Karyawan</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <select name="id_trans" class="form-control selectpicker" required="required" data-live-search="true" autocomplete="off">
                                                <option value="" hidden>- Pilih -</option>
                                                <?php foreach ($transaksi as $key => $value) : ?>
                                                    <option value="<?= $value->id_trans ?>"><?= $value->karyawan; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="comment" class=" form-control-label">Comment</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <textarea class="form-control" rows="3" name="comment" id="comment" placeholder="Comment.." autocomplete="off"></textarea>
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