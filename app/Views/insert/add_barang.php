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
                                <a type="button" class="btn btn-secondary btn-sm mr-3" href="/barang/barang"><i class="fas fa-reply"></i> Back</a>
                                Tambah <strong>Barang</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="/barang/create" method="post" class="form-horizontal">
                                    <?= csrf_field(); ?>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="id_jenis" class=" form-control-label">Jenis Barang</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <select name="id_jenis" class="form-control" autocomplete="off" required>
                                                <option value="" hidden>- Pilih -</option>
                                                <?php foreach ($jenis as $key => $value) : ?>
                                                    <option value="<?= $value->id_jenis ?>"><?= $value->jenis ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="id_pj" class=" form-control-label">Penanggung Jawab</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <select name="id_pj" class="form-control" autocomplete="off" required>
                                                <option value="" hidden>- Pilih Penanggung Jawab -</option>
                                                <?php foreach ($pj as $key => $value) : ?>
                                                    <option value="<?= $value->id_pj ?>"><?= $value->penanggung_jawab ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="kode_barang" class=" form-control-label">Kode Barang</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="text" id="kode_barang" name="kode_barang" class="form-control" value="<?php echo $barang; ?>" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="barang" class=" form-control-label">Nama Barang</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="text" id="barang" name="barang" class="form-control" required="required" autocomplete="off" autofocus>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="merk" class=" form-control-label">Merk</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="text" id="merk" name="merk" class="form-control" autocomplete="off" required="required">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="id_kdibeli" class=" form-control-label">Kondisi Barang</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <select name="id_kdibeli" class="form-control" autocomplete="off" required>
                                                <option value="" hidden>- Pilih -</option>
                                                <?php foreach ($kd as $key => $value) : ?>
                                                    <option value="<?= $value->id_kdibeli ?>"><?= $value->kondisi_dibeli ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="tperoleh" class="form-control-label">Tanggal Peroleh</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="date" id="tperoleh" name="tperoleh" class="form-control" autocomplete="off" required="required">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="masa_guna" class=" form-control-label">Masa Guna (bulan)</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="number" id="masa_guna" name="masa_guna" class="form-control" autocomplete="off" required="required">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="harga" class=" form-control-label">Harga</label>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="text" id="dengan-rupiah" name="harga" class="form-control" autocomplete="off" required="required">
                                        </div>
                                    </div>
                                    <script>
                                        /* Dengan Rupiah */
                                        var dengan_rupiah = document.getElementById('dengan-rupiah');
                                        dengan_rupiah.addEventListener('keyup', function(e) {
                                            dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
                                        });

                                        /* Fungsi */
                                        function formatRupiah(angka, prefix) {
                                            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                                                split = number_string.split(','),
                                                sisa = split[0].length % 3,
                                                rupiah = split[0].substr(0, sisa),
                                                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

                                            if (ribuan) {
                                                separator = sisa ? '.' : '';
                                                rupiah += separator + ribuan.join('.');
                                            }

                                            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                                            return prefix == undefined ? rupiah : (rupiah ? ' ' + rupiah : '');
                                        }
                                    </script>
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