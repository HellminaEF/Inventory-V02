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
                        <div class="overview-wrap">
                            <h2 class="title-1">Dashboard</h2>
                        </div>
                    </div>
                </div>
                <div class="row m-t-25">
                    <div class="col-sm-6 col-lg-4">
                        <div class="overview-item overview-item--c1">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <!-- <i class="zmdi zmdi-account-o"></i> -->
                                    </div>
                                    <div class="text">
                                        <h5>Total Data Inventaris</h5>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                    <canvas></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c2">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon"> -->
                    <!-- <i class="zmdi zmdi-shopping-cart"></i> -->
                    <!-- </div>
                                    <div class="text">
                                        <h5></h5>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                    <canvas></canvas>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="overview-item overview-item--c3">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <!-- <i class="zmdi zmdi-calendar-note"></i> -->
                                    </div>
                                    <div class="text">
                                        <h5>Total Barang Rusak</h5>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                    <canvas></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="overview-item overview-item--c4">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <!-- <i class="zmdi zmdi-money"></i> -->
                                    </div>
                                    <div class="text">
                                        <h5>Total Harga</h5>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                    <canvas></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->

    <div class="row">
        <div class="col-md-12">
            <div class="copyright">
                <span>Copyright &copy; PKL13 <?= date('Y'); ?>. All rights reserved</span>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>