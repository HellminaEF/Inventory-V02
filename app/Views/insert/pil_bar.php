<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<!-- PAGE CONTAINER-->
<div class="page-container">

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35"><a type="button" class="btn btn-secondary btn-sm mr-3" href="/transaksi"><i class="fas fa-reply"></i> Back</a>Pilih Data Barang Inventaris</h3>
                        <hr>
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <div class="rs-select2--light rs-select2--md">
                                    <input type="date" class="form-control" placeholder="Start" name="date1" />
                                    <div class="dropDownSelect2"></div>
                                </div>
                                <div class="rs-select2--light rs-select2--md">
                                    <select class="js-select2" name="property">
                                        <option value="selected">Semua Jenis</option>
                                        <?php foreach ($jenis as $key => $value) : ?>
                                            <option value="<?= $value->id_jenis ?>"><?= $value->jenis ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                                <!-- <button class="au-btn-filter">
                                    <i class="zmdi zmdi-filter-list"></i>filters</button> -->
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2 table-condensed" style="border-collapse:collapse;">
                                <thead>
                                    <tr align="center">
                                        <th>ID Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Merk</th>
                                        <th>Jenis Barang</th>
                                        <th>Tanggal Peroleh</th>
                                        <th>Masa Guna</th>
                                        <th>Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($barang as $key => $value) : ?>
                                        <tr class="tr-shadow accordion-toggle" align="center" data-toggle="collapse" data-target="#demo1">
                                            <td scope="row"><?= $i++; ?></td>
                                            <td><?= $value->barang; ?></td>
                                            <td><?= $value->merk; ?></td>
                                            <td><?= $value->jenis; ?></td>
                                            <td><?= $value->tperoleh; ?></td>
                                            <td><?= $value->masa_guna; ?> Bulan</td>
                                            <td>RP <?= $value->harga; ?></td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="copyright">
                <span>Copyright &copy; PKL13 2022. All rights reserved</span>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>