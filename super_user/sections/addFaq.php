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
				<h4 class="text-themecolor">Frequently Asked Questions > Add</h4>
			</div>
		</div>
		
		<!-- .row -->
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<form class="form" id="addFaq">
							
							<div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">SRN</label>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="srn">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Questions</label>
                                        <div class="col-10">
                                           <textarea class="form-control" name="question" rows="7"></textarea>
                                            
                                        </div>
                                    </div><div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Answers</label>
                                        <div class="col-10">
                                           <textarea class="form-control" name="answer" rows="7"></textarea>
                                            
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