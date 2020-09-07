    <?php include '../include/header.php'; ?>
    <?php include '../include/sidebar.php'; ?>
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
                    <h4 class="text-themecolor">Articles > Table</h4>
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
                                <a class="btn btn-success" style="color:#fff" href="addArticles">
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
                            <tfoot style="display: none" id="tfoot"><tr><td></td><td></td><td></td></tr></tfoot>
                            </table>
                            <input type="text" id="footer" onkeyup="$('#tfoot').eq(0).html('<tr><td>'+$(this).val()+'</td><td></td><td></td></tr>')" >
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
    <?php include '../include/footer.php'; ?>
    <script type="text/javascript">
            var bodyOrder = {};
            bodyOrder['Btn 1'] = "btn_name1";
            bodyOrder['Category'] = "category";
            bodyOrder['Img Link'] = "img_link";
            bodyOrder['Img Upload'] = "img_upload";
            bodyOrder['Link'] = "link_name";
            bodyOrder['Link 1'] = "link_name1";
            bodyOrder['Media Shouts'] = "media_shouts";
            bodyOrder['SRN'] = "srn";
            bodyOrder['Post Date'] = "post_date_display";
            bodyOrder['Share'] = "share_system";
            bodyOrder['Title'] = "title";
            bodyOrder['Type'] = "type";
            bodyOrder['Status'] = "status";
            bodyOrder['Summarised Info'] = "summarised_info";
    </script>
    <?php include '../include/js-controller.php'; ?>
