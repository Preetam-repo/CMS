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
                <h4 class="text-themecolor">Sub Menu > Add</h4>
            </div>
        </div>
        
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <!-- <div class="d-flex no-block align-items-center">
                            <div>
                                <h4 class="card-title">Add</h4>
                            </div>
                        </div> -->
                        <form class="form" method="post" id="addWebsiteChildMenu">
                                    <?php if (isset($_GET["id"])) { ?>
                                        <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
                                    <?php } ?>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Main Menu</label>
                                        <div class="col-md-4 col-sm-6">
                                           <select name="main_menu_id" id="main_menu_id" class="select2 form-control custom-select" style="width: 100%; height:36px;" required="required">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Sub Menu</label>
                                        <div class="col-md-4 col-sm-6">
                                           <select name="sub_menu_id" id="sub_menu_id" class="select2 form-control custom-select" style="width: 100%; height:36px;" required="required">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Child Menu</label>
                                        <div class="col-md-4 col-sm-6">
                                            <input  type="text" name="child_menu" id="child_menu" class="form-control" autocomplete="off" required="required">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">SRN</label>
                                        <div class="col-md-4 col-sm-6">
                                            <input  type="text" name="srn" id="srn" class="form-control" autocomplete="off" >
                                        </div>
                                    </div>
                            <div class="form-group m-t-10 row">
                                <label for="example-text-input" class="col-2 col-form-label">Link</label>
                                <div class="col-10">
                                    <input type="text" name="linkc" id="linkc" class="form-control" autocomplete="off" >
                                </div>
                            </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                </form>
                    </div>
                </div>
            </div>
        </div>
        
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