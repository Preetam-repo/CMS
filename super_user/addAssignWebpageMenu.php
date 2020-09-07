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
                <h4 class="text-themecolor">Assign Webpage Menu > Add</h4>
            </div>
        </div>
        
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body" style="display: flex; ">
                        <!-- <div class="d-flex no-block align-items-center">
                                <div>
                                        <h4 class="card-title"></h4>
                                </div>
                        </div> -->
                        <div class="col-12">
                            <form class="form" id="addAssignWebpage" method="post">
                              
                                
                                <div class="form-group m-t-10 row">
                                    <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Main Menu Category</label>
                                    <div class="col-md-8 col-sm-12">
                                        <select id="main_menu_id" name="main_menu_id" class="select2 form-control custom-select" style=" height:36px;" required="required">
                                            <option value="0">Please Select</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group m-t-10 row">
                                    <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Sub Menu Category</label>
                                    <div class="col-md-8 col-sm-12">
                                        <select id="sub_menu_id" name="sub_menu_id" class="select2 form-control custom-select" style="height:36px;">
                                            <option value="0">Please Select</option>
                                        </select>
                                    </div>
                                </div>

                                  <div class="form-group m-t-10 row">
                                    <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Page Cateory</label>
                                    <div class="col-md-8 col-sm-12">
                                        <select id="webpage" name="webpage" class="select2 form-control custom-select" style=" height:36px;">
                                            <option value="">Please Select</option>
                                        </select>
                                    </div>
                                </div>
                                
                              
                                <div class="form-group m-t-10 row">
                                    <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label" >Link </label>
                                    <div class="col-md-8 col-sm-12">
                                        <input type="text" name="link" class="form-control" autocomplete="off"  required="required">
                                    </div>
                                </div>
                                <div class="form-group m-t-10 row">
                                    <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">SRN</label>
                                    <div class="col-md-8 col-sm-12">
                                        <input type="text" name="srn" class="form-control" autocomplete="off"  required="required">
                                    </div>
                                </div>
                                
                              
                                
                                <div class="form-group m-t-10 row">
                                    <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Status</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="status" checked="checked" value="1" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">Active</label>
                                    </div>&nbsp;&nbsp;
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="status" value="0" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Deactive</label>
                                    </div>
                                </div>
                                
                             
                                
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                            </form>
                        </div>
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