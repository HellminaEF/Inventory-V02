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
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <div class="rs-select2--light rs-select2--md">
                                    <select class="js-select2" name="property">
                                        <option selected="selected">Jenis Barang</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                                <div class="rs-select2--light rs-select2--md">
                                    <input type="date" class="form-control" placeholder="Start" name="date1" />
                                    <div class="dropDownSelect2"></div>
                                </div>
                                <!-- <button class="au-btn-filter">
                                    <i class="zmdi zmdi-filter-list"></i>filters</button> -->
                            </div>
                            <div class="table-data__tool-right">
                                <!-- <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                    <select class="js-select2" name="type">
                                        <option selected="selected"><i class="zmdi zmdi-plus"></i>add item</option>
                                        <option value="">Tambah Data Satuan</option>
                                        <option value="">Import Data Barang</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div> -->
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    add item</button>
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    Export</button>
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>
                                            <label class="au-checkbox">
                                                <input type="checkbox">
                                                <span class="au-checkmark"></span>
                                            </label>
                                        </th>
                                        <th>ID Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Tanggal Peroleh</th>
                                        <th>Tanggal Masa Guna</th>
                                        <th>Merk</th>
                                        <th>Jenis Barang</th>
                                        <!-- <th></th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="tr-shadow">
                                        <td>
                                            <label class="au-checkbox">
                                                <input type="checkbox">
                                                <span class="au-checkmark"></span>
                                            </label>
                                        </td>
                                        <td>-</td>
                                        <td>
                                            <span>-</span>
                                        </td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>
                                            <span>-</span>
                                        </td>
                                        <td>-</td>
                                        <td>
                                            <div class="table-data-feature">
                                                <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                    <i class="zmdi zmdi-mail-send"></i>
                                                </button> -->
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                    <i class="zmdi zmdi-more"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>
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
                <span>Copyright &copy; PKL13 <?= date('Y'); ?>. All rights reserved</span>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>