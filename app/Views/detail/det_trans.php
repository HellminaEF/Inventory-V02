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
                            <div class="card-body">
                                <div class="card-text text-sm-center">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-warning btn-sm float-right">
                                    <i class="fa fa-dot-circle-o"></i> Edit
                                </button>
                                <button type="button" class="btn btn-danger btn-sm float-right mr-3" href="#">
                                    <i class="fa fa-ban"></i> Delete
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