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
                        <h3 class="title-5 m-b-35">Data Barang Inventaris</h3>
                        <hr>
                        <?php
                        $mulai_tanggal  = (@$_POST['mulai_tanggal'] ? @$_POST['mulai_tanggal'] : date('Y-m-01'));
                        $sampai_tanggal = (@$_POST['sampai_tanggal'] ? @$_POST['sampai_tanggal'] : date('Y-m-t'));

                        $mulai_tanggal  = str_replace('/', '-', $mulai_tanggal);
                        $sampai_tanggal = str_replace('/', '-', $sampai_tanggal);
                        ?>
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <form action="" method="get" autocomplete="off">
                                    <div class="float-left">
                                        <input type="text" name="keyword" class="form-control" placeholder="Search" autocomplete="off">
                                    </div>
                                    <div class="float-right ml-2">
                                        <button type="submit" class="btn btn-success"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>

                            </div>
                            <div class="table-data__tool">
                                <a class="au-btn au-btn-icon au-btn--green au-btn--small text-white" href="/barang/add_barang">Input Data</a>
                                <!-- <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    Export</button> -->
                            </div>
                        </div>
                        <?php if (session()->getFlashdata('berhasil')) : ?>
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <?= session()->getFlashdata('berhasil'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if (session()->getFlashdata('delete')) : ?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <?= session()->getFlashdata('delete'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if (session()->getFlashdata('update')) : ?>
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <?= session()->getFlashdata('update'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="js-inbox-wrap">
                            <div class="js-list-load col-lg-6">
                                <div class="card-body card-block">
                                    <!-- <div class="table-responsive m-b-40"> -->
                                    <!-- <table class="table table-borderless table-data3" style="border-collapse:collapse;"> -->
                                    <div class="table-responsive table-responsive-data2">
                                        <table class="table table-data2 table-condensed display dataTable" style="border-collapse:collapse;">
                                            <thead>
                                                <tr align="center">
                                                    <th>#</th>
                                                    <th>ID Barang</th>
                                                    <th>Nama Barang</th>
                                                    <th>Merk</th>
                                                    <th>Jenis Barang</th>
                                                    <th>Kondisi Awal</th>
                                                    <th>Tanggal Peroleh</th>
                                                    <th>Masa Guna</th>
                                                    <th>Harga</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($barang as $key => $value) : ?>
                                                    <tr class="tr-shadow accordion-toggle" align="center" data-toggle="collapse" data-target="#demo1">
                                                        <td><?= $no++ ?></td>
                                                        <td scope="row"><?= $value->kode_barang; ?>/<?= $value->kode_pj; ?></td>
                                                        <td><?= $value->barang; ?></td>
                                                        <td><?= $value->merk; ?></td>
                                                        <td><?= $value->jenis; ?></td>
                                                        <td><?= $value->kondisi_dibeli; ?></td>
                                                        <td><?= $value->tperoleh; ?></td>
                                                        <td><?= $value->masa_guna; ?> Bulan</td>
                                                        <td>Rp.<?= $value->harga; ?></td>
                                                        <td>
                                                            <div class="table-data-feature">
                                                                <div class="header-button">
                                                                    <div class="account-wrap">
                                                                        <div class="account-item clearfix js-item-menu">
                                                                            <i class="fas fa-ellipsis-v"></i>
                                                                            <div class="pil-dropdown js-dropdown">
                                                                                <div class="pil-dropdown__body">
                                                                                    <div class="row ml-2">
                                                                                        <div class="pil-dropdown__item">
                                                                                            <a class="item" data-toggle="tooltip" data-placement="top" title="Edit" href="<?= base_url("barang/edit_barang/$value->id_barang") ?>">
                                                                                                <i class="zmdi zmdi-edit"></i>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="pil-dropdown__item ml-2">
                                                                                            <a class="item" data-toggle="tooltip" href="<?= base_url("barang/delete/$value->id_barang") ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" title="Delete">
                                                                                                <i class="zmdi zmdi-delete"></i>
                                                                                            </a>
                                                                                        </div>
                                                                                        <!-- <hr> -->
                                                                                        <div class="pil-dropdown__item ml-2">
                                                                                            <a class="item" data-toggle="tooltip" data-placement="top" title="Detail" href="<?= base_url("barang/det_barang/$value->id_barang") ?>">
                                                                                                <i class="zmdi zmdi-info"></i>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="spacer"></tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal body -->
                <div class="modal-body">
                    <h4 class="modal-title">Anda yakin akan menghapus data ini?</h4>
                    <hr>
                    <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Delete</button>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Script -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#userTable').DataTable({
            'processing': true,
            'serverSide': true,
            'serverMethod': 'post',
            'ajax': {
                'url': "<?= site_url('barang') ?>",
                'data': function(data) {
                    // CSRF Hash
                    var csrfName = $('.txt_csrfname').attr('name'); // CSRF Token name
                    var csrfHash = $('.txt_csrfname').val(); // CSRF hash

                    return {
                        data: data,
                        [csrfName]: csrfHash // CSRF Token
                    };
                },
                dataSrc: function(data) {

                    // Update token hash
                    $('.txt_csrfname').val(data.token);

                    // Datatable data
                    return data.aaData;
                }
            },
            'columns': [{
                    data: 'id_barang'
                },
                {
                    data: 'barang'
                },
                {
                    data: 'merk'
                },
                {
                    data: 'id_jenis'
                },
                {
                    data: 'id_kdibeli'
                },
                {
                    data: 'tperoleh'
                },
                {
                    data: 'masa_guna'
                },
                {
                    data: 'harga'
                },
            ]
        });
    });
</script>

<div class="row">
    <div class="col-md-12">
        <div class="copyright">
            <span>Copyright &copy; PKL13 <?= date('Y'); ?>. All rights reserved</span>
        </div>
    </div>
</div>
</div>

<?= $this->endSection(); ?>