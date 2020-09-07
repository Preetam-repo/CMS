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
				<h4 class="text-themecolor">User Menu Roles</h4>
			</div>
		</div>
		
		<!-- .row -->
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<form id="userMenuRole">
							<input type="hidden" name="userId" value="<?php echo $_GET['id']; ?>">
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-2 col-form-label">Website Master</label>
								<div class="col-4 bt-switch">
									<div class="m-b-30 col-lg-12">
										<input name="role[websiteMaster]"  value="0" type="hidden">
										<input name="role[websiteMaster]" id="websiteMasterstatus" value="1" type="checkbox" data-on-color="info" data-off-color="danger">
									</div>
								</div>
							</div>
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-2 col-form-label">Website Management</label>
								<div class="col-4 bt-switch">
									<div class="m-b-30 col-lg-12">
										<input name="role[websiteManagement]"  value="0" type="hidden">
										<input name="role[websiteManagement]" id="websiteManagementstatus" value="1" type="checkbox" data-on-color="info" data-off-color="danger">
									</div>
								</div>
							</div>
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-2 col-form-label">Section Management</label>
								<div class="col-4 bt-switch">
									<div class="m-b-30 col-lg-12">
										<input name="role[sectionManagement]"  value="0" type="hidden">
										<input name="role[sectionManagement]" id="sectionManagementstatus" value="1" type="checkbox" data-on-color="info" data-off-color="danger">
									</div>
								</div>
							</div>
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-2 col-form-label">Website Main Menu</label>
								<div class="col-4 bt-switch">
									<div class="m-b-30 col-lg-12">
										<input name="role[websiteMainMenu]"  value="0" type="hidden">
										<input name="role[websiteMainMenu]" id="websiteMainMenustatus" value="1" type="checkbox" data-on-color="info" data-off-color="danger">
									</div>
								</div>
							</div>
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-2 col-form-label">Website Sub Menu</label>
								<div class="col-4 bt-switch">
									<div class="m-b-30 col-lg-12">
										<input name="role[websiteSubMenu]"  value="0" type="hidden">
										<input name="role[websiteSubMenu]" id="websiteSubMenustatus" value="1" type="checkbox" data-on-color="info" data-off-color="danger">
									</div>
								</div>
							</div>
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-2 col-form-label">Website Child Menu</label>
								<div class="col-4 bt-switch">
									<div class="m-b-30 col-lg-12">
										<input name="role[websiteChildMenu]"  value="0" type="hidden">
										<input name="role[websiteChildMenu]" id="websiteChildMenustatus" value="1" type="checkbox" data-on-color="info" data-off-color="danger">
									</div>
								</div>
							</div>
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-2 col-form-label">Website Slider</label>
								<div class="col-4 bt-switch">
									<div class="m-b-30 col-lg-12">
										<input name="role[websiteSlider]"  value="0" type="hidden">
										<input name="role[websiteSlider]" id="websiteSliderstatus" value="1" type="checkbox" data-on-color="info" data-off-color="danger">
									</div>
								</div>
							</div>
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-2 col-form-label">Page Master</label>
								<div class="col-4 bt-switch">
									<div class="m-b-30 col-lg-12">
										<input name="role[pageMaster]"  value="0" type="hidden">
										<input name="role[pageMaster]" id="pageMasterstatus" value="1" type="checkbox" data-on-color="info" data-off-color="danger">
									</div>
								</div>
							</div>
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-2 col-form-label">Website Contact Us</label>
								<div class="col-4 bt-switch">
									<div class="m-b-30 col-lg-12">
										<input name="role[websiteContactUs]"  value="0" type="hidden">
										<input name="role[websiteContactUs]" id="websiteContactUsstatus" value="1" type="checkbox" data-on-color="info" data-off-color="danger">
									</div>
								</div>
							</div>
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-2 col-form-label">Website Newsletter Subscription</label>
								<div class="col-4 bt-switch">
									<div class="m-b-30 col-lg-12">
										<input name="role[websiteNewsletterSubscription]"  value="0" type="hidden">
										<input name="role[websiteNewsletterSubscription]" id="websiteNewsletterSubscriptionstatus" value="1" type="checkbox" data-on-color="info" data-off-color="danger">
									</div>
								</div>
							</div>
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-2 col-form-label">Sections</label>
								<div class="col-4 bt-switch">
									<div class="m-b-30 col-lg-12">
										<input name="role[sections]"  value="0" type="hidden">
										<input name="role[sections]" id="sectionsstatus" value="1" type="checkbox" data-on-color="info" data-off-color="danger">
									</div>
								</div>
							</div>
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-2 col-form-label">Sections Services</label>
								<div class="col-4 bt-switch">
									<div class="m-b-30 col-lg-12">
										<input name="role[sectionsServices]"  value="0" type="hidden">
										<input name="role[sectionsServices]" id="sectionsServicesstatus" value="1" type="checkbox" data-on-color="info" data-off-color="danger">
									</div>
								</div>
							</div>
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-2 col-form-label">Sections Features</label>
								<div class="col-4 bt-switch">
									<div class="m-b-30 col-lg-12">
										<input name="role[sectionsFeatures]"  value="0" type="hidden">
										<input name="role[sectionsFeatures]" id="sectionsFeaturesstatus" value="1" type="checkbox" data-on-color="info" data-off-color="danger">
									</div>
								</div>
							</div>
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-2 col-form-label">Sections Articles</label>
								<div class="col-4 bt-switch">
									<div class="m-b-30 col-lg-12">
										<input name="role[sectionsArticles]"  value="0" type="hidden">
										<input name="role[sectionsArticles]" id="sectionsArticlesstatus" value="1" type="checkbox" data-on-color="info" data-off-color="danger">
									</div>
								</div>
							</div>
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-2 col-form-label">Sections Team</label>
								<div class="col-4 bt-switch">
									<div class="m-b-30 col-lg-12">
										<input name="role[sectionsTeam]"  value="0" type="hidden">
										<input name="role[sectionsTeam]" id="sectionsTeamstatus" value="1" type="checkbox" data-on-color="info" data-off-color="danger">
									</div>
								</div>
							</div>
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-2 col-form-label">Sections Clienttestimonial</label>
								<div class="col-4 bt-switch">
									<div class="m-b-30 col-lg-12">
										<input name="role[sectionsClienttestimonial]"  value="0" type="hidden">
										<input name="role[sectionsClienttestimonial]" id="sectionsClienttestimonialstatus" value="1" type="checkbox" data-on-color="info" data-off-color="danger">
									</div>
								</div>
							</div>
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-2 col-form-label">Sections Client</label>
								<div class="col-4 bt-switch">
									<div class="m-b-30 col-lg-12">
										<input name="role[sectionsClient]"  value="0" type="hidden">
										<input name="role[sectionsClient]" id="sectionsClientstatus" value="1" type="checkbox" data-on-color="info" data-off-color="danger">
									</div>
								</div>
							</div>
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-2 col-form-label">Sections Counter</label>
								<div class="col-4 bt-switch">
									<div class="m-b-30 col-lg-12">
										<input name="role[sectionsCounter]"  value="0" type="hidden">
										<input name="role[sectionsCounter]" id="sectionsCounterstatus" value="1" type="checkbox" data-on-color="info" data-off-color="danger">
									</div>
								</div>
							</div>
							<div class="form-group m-t-10 row">
								<label for="example-text-input" class="col-2 col-form-label">Sections Faq</label>
								<div class="col-4 bt-switch">
									<div class="m-b-30 col-lg-12">
										<input name="role[sectionsFaq]"  value="0" type="hidden">
										<input name="role[sectionsFaq]" id="sectionsFaqstatus" value="1" type="checkbox" data-on-color="info" data-off-color="danger">
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-success waves-effect waves-light m-r-10 m-t-10">Save</button>
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