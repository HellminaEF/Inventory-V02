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
                                Buat <strong>Keluhan</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="/komplain/valid_komplain" method="post" class="form-horizontal">
                                    <?= csrf_field(); ?>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="t_komplain" class=" form-control-label">Tanggal</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="date" id="t_komplain" name="t_komplain" class="form-control" required="required" autocomplete="off" autofocus>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="id_transaksi" class=" form-control-label">Barang</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <select name="id_transaksi" class="form-control selectpicker" required="required" data-live-search="true" autocomplete="off">
                                                <option value="" hidden>- Pilih -</option>
                                                <?php foreach ($trans as $key => $value) : ?>
                                                    <option value="<?= $value->id_trans ?>"><?= $value->barang; ?> <?= $value->merk; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="keterangan" class=" form-control-label">Keterangan</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <textarea class="form-control" rows="3" name="keterangan" id="keterangan" placeholder="sebutkan keluhan.." autocomplete="off"></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group" hidden>
                                        <div class="form-group col-md-7">
                                            <select name="approval" class="form-control selectpicker" required="required" data-live-search="true" autocomplete="off">
                                                <option value="Diproses" hidden>Diproses</option>
                                            </select>
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