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
				<h4 class="text-themecolor">User > Add</h4>
			</div>
		</div>
		
		<!-- .row -->
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<form class="form" id="addAo">
							<div class="form-group row">
								<label for="example-text-input" class="col-2 col-form-label">Associate Id</label>
								<div class="col-10">
									<input type="text" name="associateId" class="form-control" autocomplete="off">
								</div>
							</div>
							<div class="form-group row">
								<label for="example-text-input" class="col-2 col-form-label">Name</label>
								<div class="col-10">
									<input type="text" name="name" class="form-control" autocomplete="off">
								</div>
							</div>
							<div class="form-group row">
								<label for="example-text-input" class="col-2 col-form-label">User Name</label>
								<div class="col-10">
									<input type="text" name="userName" class="form-control" autocomplete="off">
								</div>
							</div>
							<div class="form-group row">
								<label for="example-text-input" class="col-2 col-form-label">Password</label>
								<div class="col-10">
									<input type="text" name="password" class="form-control" autocomplete="off">
								</div>
							</div>
							<div class="form-group row">
								<label for="example-text-input" class="col-2 col-form-label">Email</label>
								<div class="col-10">
									<input type="text" name="email" class="form-control" autocomplete="off">
								</div>
							</div>
							<div class="form-group row">
								<label for="example-text-input" class="col-2 col-form-label">Mobile</label>
								<div class="col-10">
									<input type="text" name="mobile" class="form-control" autocomplete="off">
								</div>
							</div>
							<div class="form-group row">
								<label for="example-text-input" class="col-2 col-form-label">URL</label>
								<div class="col-10">
									<input type="text" name="url" class="form-control" autocomplete="off">
								</div>
							</div>
							<div class="form-group row">
								<label for="example-text-input" class="col-2 col-form-label">Login Link</label>
								<div class="col-10">
									<input type="text" name="loginLink" class="form-control" autocomplete="off">
								</div>
							</div>
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-2 col-form-label">Status</label>
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
	<!-- ============================================================== -->
	<!-- End Container fluid  -->
	<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
<?php include 'include/footer.php'; ?>
<?php include 'include/js-controller.php'; ?>