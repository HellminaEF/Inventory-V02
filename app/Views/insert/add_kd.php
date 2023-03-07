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
                            <a type="button" class="btn btn-secondary btn-sm mr-3" href="/kondisi_dibeli/kondisi_dibeli"><i class="fas fa-reply"></i> Back</a>
                            Tambah Data <strong>Kondisi Barang Saat Dibeli</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="/kondisi_dibeli/save" method="post" class="form-horizontal">
                                <?= csrf_field(); ?>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="id_kdibeli" class="form-control-label">ID Kondisi</label>
                                    </div>
                                    <div class="form-group col-md-7">
                                        <input type="text" id="id_kdibeli" name="id_kdibeli" class="form-control" readonly="">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="kondisi_dibeli" class="form-control-label">Kondisi Barang Saat Dibeli</label>
                                    </div>
                                    <div class="form-group col-md-7">
                                        <input type="text" id="kondisi_dibeli" name="kondisi_dibeli" class="form-control" required="required" autofocus>
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

<!-- <script>
    $(document).ready(function() {
        $.ajax({
            url: "",
            type: "GET",
            success: function(hasil) {
                var obj = $.parseJSON(hasil);
                $('#id_jenis').val(obj);
            }
        });
    });
</script> -->

<?= $this->endSection(); ?>