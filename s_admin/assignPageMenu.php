<?php include 'include/header.php'; ?>
    <?php include 'include/sidebar.php'; ?>
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Assign Page Menu > Table</h4>
                </div>
                <!-- <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Table Bootstrap</li>
                        </ol>
                        <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i
                                class="fa fa-plus-circle"></i> Create New</button>
                    </div>
                </div> -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- <h4 class="card-title">Table</h4> -->
                            <div id="toolbar">
                                <a class="btn btn-success" style="color:#fff" href="addAssignPageMenu">
                                    <i class="ti-plus"></i> Add
                                </a>
                            </div>
                            <table id="table" 
                                    data-toolbar="#toolbar" 
                                    data-search="true"
                                    data-show-columns="true"
                                    data-show-export="true"
                                    data-minimum-count-columns="1"
                                    data-show-pagination-switch="true"
                                    data-pagination="true"
                                    data-page-list="[10, 25, 50, 100, ALL]"
                                    data-reorderable-columns="true"
                                    data-show-columns="true"
                                    data-show-toogle="true"
                                    data-show-export="true"
                                    data-filter-control="true"
                                    data-filter-show-clear="true">
                                <thead><tr id="thead"></tr></thead>
                                <tbody id="tbody"></tbody>
                                <tfoot id="tfoot"></tfoot>
                            </table>
                            <input type="text" id="footer" onkeyup="$('#tfoot').html('<tr style=display:none;><td >'+$('#footer').val()+'</td></tr>')">
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Page Content -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    <?php include 'include/footer.php'; ?>
    <?php include 'include/js-controller.php'; ?>