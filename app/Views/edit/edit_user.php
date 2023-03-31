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
                            <a type="button" class="btn btn-secondary btn-sm mr-3" href="<?= base_url('users') ?>"><i class="fas fa-reply"></i> Back</a>
                            Edit <strong>Data User</strong>
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Role 1 = Admin,Role 2 = User" data-content="jika">
                                <i class="zmdi zmdi-info"></i>
                            </button>
                        </div>
                        <div class="card-body card-block">
                            <form action="<?= base_url('Admin/update/' . $user->id_user); ?>" method="post" class="form-horizontal">
                                <?= csrf_field(); ?>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="username" class="form-control-label">Username</label>
                                    </div>
                                    <div class="form-group col-md-7">
                                        <input type="text" id="username" name="username" class="form-control" value="<?= $user->username; ?>" readonly>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="role" class="form-control-label">Role</label>
                                    </div>
                                    <div class="form-group col-md-7">
                                        <input type="text" id="role" name="role" class="form-control" value="<?= $user->role; ?>" autocomplete="off" autofocus>
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