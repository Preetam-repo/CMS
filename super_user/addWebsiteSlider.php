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
				<h4 class="text-themecolor">Slider > Add</h4>
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
						<form class="form" method="post" id="addWebsiteSlider">
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-sm-4 col-md-2 col-form-label"> Name</label>
								<div class="col-md-4 col-sm-6">
									<input  type="text" name="name" class="form-control" autocomplete="off">
								</div>
							</div>
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-sm-4 col-md-2 col-form-label"> Link Name</label>
								<div class="col-md-4 col-sm-6">
									<input  type="text" name="linkName" class="form-control" autocomplete="off">
								</div>
							</div>
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">SRN</label>
								<div class="col-md-4 col-sm-6">
									<input  type="text" name="srn" class="form-control" autocomplete="off">
								</div>
							</div>
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-sm-4 col-md-2 col-form-label"> Title</label>
								<div class="col-md-4 col-sm-6">
									<input  type="text" name="title" class="form-control" autocomplete="off">
								</div>
							</div>
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-sm-4 col-md-2 col-form-label"> Tag Line</label>
								<div class="col-md-4 col-sm-6">
									<input  type="text" name="tagLine" class="form-control" autocomplete="off">
								</div>
							</div>
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-sm-4 col-md-2 col-form-label"> Button Name</label>
								<div class="col-md-4 col-sm-6">
									<input  type="text" name="buttonName" class="form-control" autocomplete="off">
								</div>
							</div>
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-sm-4 col-md-2 col-form-label"> Image Upload</label>
								<div class="col-md-4 col-sm-6">
									<input  type="file" name="imageUpload" class="form-control" autocomplete="off">
								</div>
							</div>
							<div class="form-group row">
								<label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Location</label>
								<div class="col-md-4 col-sm-6">
									<select name="location" class="select2 form-control custom-select" style="width: 100%; height:36px;">
										<option value="">Please select</option>
										<option value="Banner">Banner</option>
									</select>
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