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
				<h4 class="text-themecolor">Team > Add</h4>
			</div>
		</div>
		
		<!-- .row -->
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<form class="form" id="addTeam">
									<div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">SRN</label>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="srn">
                                        </div>
                                    </div>
                                    <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Name of Team member</label>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                    </div>
									<div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Photo</label>
                                        <div class="col-10">
                                            <input type="file" class="form-control" name="photo">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Profile Link Name</label>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="profile_link">
                                        </div>
                                    </div>
                                    <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Department</label>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="department">
                                        </div>
                                    </div>
									<div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Designation</label>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="designation">
                                        </div>
                                    </div>
                                   <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Mobile no.</label>
                                        <div class="col-10">
                                            <input type="number" class="form-control" name="mobile_no">
                                        </div>
                                    </div>
                                    <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Email Id</label>
                                        <div class="col-10">
                                            <input type="email" class="form-control" name="email_id">
                                            
                                        </div>
                                    </div>
                                   <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Summarised Info</label>
                                        <div class="col-10">
                                           <textarea class="textarea_editor form-control" rows="40" placeholder="Enter text ..."  name="summarised_info"></textarea>
                                            
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