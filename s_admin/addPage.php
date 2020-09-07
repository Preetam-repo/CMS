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
				<h4 class="text-themecolor">Page > Add</h4>
			</div>
		</div>
		
		<!-- .row -->
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<!-- <div class="d-flex no-block align-items-center">
							<div>
								<h4 class="card-title"></h4>
							</div>
						</div> -->
						<form class="form" id="<?php echo (isset($_GET['id']))?'editPage':'addPage'; ?>">
										<?php if (isset($_GET['id'])): ?>
										<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
										<?php endif ?>

									 <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Title</label>
                                        <div class="col-10">
                                            <input type="text" class="form-control" id="title" name="title">
                                        </div>
                                    </div>
                                    <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Header</label>
                                        <div class="col-10">
                                            <input type="text" class="form-control" id="header" name="header">
                                        </div>
                                    </div>
                                    <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Link</label>
                                        <div class="col-10">
                                            <input type="text" class="form-control" id="link" name="link">
                                        </div>
                                    </div>
                                    <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Content</label>
                                        <div class="col-10">
                                            <textarea id="content" class="textarea_editor form-control" rows="40" placeholder="Enter text ..."  name="content"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Private</label>
                                        <div class="col-4 bt-switch">
                                                <div class="m-b-30 col-lg-6">
                                                    <input name="private" value="0" type="hidden" >
                                                    <input id="private" name="private" value="1"  type="checkbox" data-on-color="info" data-off-color="danger">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="form-group m-t-10 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Status</label>
                                        <div class="col-4 bt-switch">
                                                <div class="m-b-30 col-lg-6">
                                                    <input name="status" value="0" type="hidden" >
                                                    <input id="status" name="status" value="1"  type="checkbox" data-on-color="info" data-off-color="danger">
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
<?php include 'include/footer.php'; ?>
<?php include 'include/js-controller.php'; ?>
<script type="text/javascript">
	$(document).ready(function() {
  		$('.textarea_editor').summernote({height:150,});
	});
</script>
<textarea id="content" class="textarea_editor form-control" rows="40" placeholder="Enter text ..."  name="content"></textarea>
<?php if (isset($_GET['id'])): ?>
<script type="text/javascript">
    $.ajax({
            url: '../api/websitePage/getSavedPage',
            type: 'POST',
            data: {id:<?php echo $_GET['id']; ?>},
        })
        .done(function(response) {
            var data = JSON.parse(response);
            $('#title').val(data.title).trigger('change');
            $('#header').val(data.header).trigger('change');
            $('#link').val(data.link).trigger('change');
            if (data.status==true) {
            $('#status').attr("checked", "checked").trigger("change");
            }
            $('#content').summernote("code",data.content);
        });
        $("#editPage").submit(function(event) {
    event.preventDefault();
    var formdata = new FormData(this);
    $.ajax({
            url: '../api/websitePage/updatePage',
            type: 'POST',
            data: formdata,
            processData: false,
            contentType: false,
        })
        .done(function(data) {
            if (JSON.parse(data) == true) {
                Swal.fire("Data Updated", "", "success")
                    .then((result) => { window.location.href = "pageMaster" });
                setTimeout(function() { window.location.href = "pageMaster" }, 1000);
            } else {
                Swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: _.startCase(data) + " is missing"
                })
            }
        });
});
</script>
<?php endif ?>