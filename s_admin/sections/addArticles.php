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
				<h4 class="text-themecolor">Articles > Add</h4>
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
						<form class="form" id="addArticles">
							
							<div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Type</label>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="type">
                                            
                                        </div>
                                    </div>
                            <div class="form-group m-t-10 row">
                                <label for="example-text-input" class="col-2 col-form-label">Category</label>
                                <div class="col-10">
                                    <select name="articlesCategory" id="articlesCategory" class="select2-tags form-control custom-select" style="width: 100%; height:36px;" required="required">
                                    </select>
                                </div>
                            </div>
                                    <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Link Name</label>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="link_name">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">SRN</label>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="srn">
                                            
                                        </div>
                                    </div>
                                     <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Activation From</label>
                                        <div class="col-10">
                                            <input type="Date" class="form-control" name="activation_from">
                                            
                                        </div>
                                    </div>
                                     <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Share System</label>
                                        <div class="col-4 bt-switch">
                                                <div class="m-b-30 col-lg-6">
                                                    <input name="share_system" value="0" type="hidden" >
                                                    <input name="share_system" value="1"  type="checkbox" checked data-on-color="info" data-off-color="danger">
                                                </div>
                                        </div>
                                    </div>
                                   <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Media Shouts</label>
                                        <div class="col-4 bt-switch">
                                                <div class="m-b-30 col-lg-6">
                                                    <input name="media_shouts" value="0" type="hidden" >
                                                    <input name="media_shouts" value="1"  type="checkbox" checked data-on-color="info" data-off-color="danger">
                                                </div>
                                        </div>
                                    </div>
									<div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Post Date Display</label>
                                        <div class="col-4 bt-switch">
                                                <div class="m-b-30 col-lg-6">
                                                    <input name="post_date_display" value="0" type="hidden" >
                                                    <input name="post_date_display" value="1"  type="checkbox" checked data-on-color="info" data-off-color="danger">
                                                </div>
                                        </div>
                                    </div>
									<div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Image/Video Link</label>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="img_link">
                                            
                                        </div>
                                    </div>
									<div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Image/Video Upload</label>
                                        <div class="col-10">
                                            <input type="file" class="form-control" name="img_upload">
                                            
                                        </div>
                                    </div>
									<div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Title</label>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="title">
                                            
                                        </div>
                                    </div>
									<div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Summarised Info</label>
                                        <div class="col-10">
                                            <textarea class="textarea_editor form-control" rows="40" placeholder="Enter text ..."  name="summarised_info"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Button Name 1</label>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="btn_name1">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Link Name</label>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="link_name1">
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Status</label>
                                        <div class="col-4 bt-switch">
                                                <div class="m-b-30 col-lg-6">
                                                    <input name="status" value="0" type="hidden" >
                                                    <input name="status" value="1"  type="checkbox" checked data-on-color="info" data-off-color="danger">
                                                </div>
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
<?php include '../include/footer.php'; ?>
<?php include '../include/js-controller.php'; ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('.textarea_editor').summernote({height:150,});
    });
</script>
