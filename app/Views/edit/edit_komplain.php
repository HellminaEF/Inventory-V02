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
                                <a type="button" class="btn btn-secondary btn-sm mr-3" href="<?= base_url('komplain') ?>"><i class="fas fa-reply"></i> Back</a>
                                Edit <strong>Komplain</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="<?= base_url('komplain/update/' . $komplain->id_komplain); ?>" method="post" class="form-horizontal">
                                    <?= csrf_field(); ?>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="approve" class=" form-control-label">Approval</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <select name="approve" id="approve" class="form-control" autocomplete="off" required>
                                                <option value="Diproses" hidden selected><?= $komplain->approve; ?></option>
                                                <option value="Diperbaiki">Diperbaiki</option>
                                                <option value="Dibuang">Dibuang</option>
                                                <option value="Diganti">Diganti</option>
                                                <option value="Dijual">Dijual</option>
                                            </select>
                                        </div>
                                    </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Simpan
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
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