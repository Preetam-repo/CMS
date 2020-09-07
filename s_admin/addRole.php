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
				<h4 class="text-themecolor">Roles > Add</h4>
			</div>
		</div>
		
		<!-- .row -->
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<form>
						<!-- Nav tabs -->
						<ul class="nav nav-tabs customtab" role="tablist" id="tablist">

						</ul>
						<!-- Tab panes -->
						<div class="tab-content" id="tabcontent">
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
<script type="text/javascript">
$(document).ready(function() {
    $.ajax({
            url: '../api/roles/get',
            type: 'POST',
            data: { id: '<?php echo $_GET["id"]; ?>' },
        })
        .done(function(response) {
            var data = JSON.parse(response);
            var tablist = "";
            var tabcontent = "";
            $.each(data["facility"], function(index, val) {
                var i = index;
                var facilityId = val["id"];
                tablist += '<li class="nav-item">';
                tablist += '<a class="nav-link '+((index==0)?"active":"")+'" data-toggle="tab" href="#facility' + val["lable"] + index + '" role="tab">';
                tablist += '<span class="hidden-sm-up">';
                tablist += '<i class="ti-home"></i>';
                tablist += '</span>';
                tablist += '<span class="hidden-xs-down">' + val["lable"] + '</span>';
                tablist += '</a>';
                tablist += '</li>';
                tabcontent += '<div class="tab-pane '+((index==0)?"active":"")+'" id="facility' + val["lable"] + index + '" role="tabpanel">';
                tabcontent += '<div class="m-t-20 col-12">'+val["lable"]+' <div class="col-2 bt-switch"style="display: inline-flex;"> <input type="hidden" name="status[facebook]" value="0"> <input name="status[facebook]" id="statusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger"> </div> ';
                tabcontent += '<div class="col-1" style="float:right;">Status <input type="hidden" name="status[facebook]" value="0"> <input name="status[facebook]" id="statusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger"> </div>';
                tabcontent += '<div class="col-1" style="float:right;">Delete <input type="hidden" name="status[facebook]" value="0"> <input name="status[facebook]" id="statusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger"> </div>';
                tabcontent += '<div class="col-1" style="float:right;">Edit <input type="hidden" name="status[facebook]" value="0"> <input name="status[facebook]" id="statusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger"> </div>';
                tabcontent += '<div class="col-1" style="float:right;">Add <input type="hidden" name="status[facebook]" value="0"> <input name="status[facebook]" id="statusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger"> </div>';
                tabcontent += '<div class="col-1" style="float:right;">View <input type="hidden" name="status[facebook]" value="0"> <input name="status[facebook]" id="statusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger"> </div></div>';
                $.each(data["mainMenu"], function(index, value) {
                	if (value["facility_id"]==facilityId) {
                	var mainMenuId = value["id"];
                    tabcontent += '<div class="p-t-10">';
                    tabcontent += '<div id="accordion' + i + index + '" role="tablist" class="minimal-faq" aria-multiselectable="true">';
                    tabcontent += '<div class="card m-b-0">';
                    tabcontent += '<div class="card-header" role="tab" id="headingOne11">';
                    tabcontent += '<h5 class="mb-0">';
                    tabcontent += '<a class="link" data-toggle="collapse" data-parent="#accordion' + i + index + '" href="#collapseOne' + i + index + '" aria-expanded="false" aria-controls="collapseOne' + i + index + '">' + value["menu"] + '</a>';
                    tabcontent += '</h5>';
                    tabcontent += '</div>';
                    tabcontent += '<div id="collapseOne' + i + index + '" class="collapse" role="tabpanel" aria-labelledby="headingOne11">';
                    tabcontent += '<div class="card-body">';
                    tabcontent += '<div class="m-t-20 col-12">'+value["menu"]+' <div class="col-2 bt-switch"style="display: inline-flex;"> <input type="hidden" name="status[facebook]" value="0"> <input name="status[facebook]" id="statusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger"> </div> ';
                	tabcontent += '<div class="col-1" style="float:right;">Status <input type="hidden" name="status[facebook]" value="0"> <input name="status[facebook]" id="statusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger"> </div>';
                	tabcontent += '<div class="col-1" style="float:right;">Delete <input type="hidden" name="status[facebook]" value="0"> <input name="status[facebook]" id="statusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger"> </div>';
                	tabcontent += '<div class="col-1" style="float:right;">Edit <input type="hidden" name="status[facebook]" value="0"> <input name="status[facebook]" id="statusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger"> </div>';
                	tabcontent += '<div class="col-1" style="float:right;">Add <input type="hidden" name="status[facebook]" value="0"> <input name="status[facebook]" id="statusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger"> </div>';
                	tabcontent += '<div class="col-1" style="float:right;">View <input type="hidden" name="status[facebook]" value="0"> <input name="status[facebook]" id="statusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger"> </div></div>';
	                var j = index;
		            $.each(data["assignMenu"], function(index, value) {
                	if (value["facility_id"]==facilityId&&value["main_menu_id"]==mainMenuId&&value["sub_menu_id"]=="0") {
	                	tabcontent += '<div class="m-t-20 col-12">'+value["menu"]+' <div class="col-2 bt-switch"style="display: inline-flex;"> <input type="hidden" name="status[facebook]" value="0"> <input name="status[facebook]" id="statusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger"> </div> ';
	                	tabcontent += '<div class="col-1" style="float:right;">Status <input type="hidden" name="status[facebook]" value="0"> <input name="status[facebook]" id="statusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger"> </div>';
	                	tabcontent += '<div class="col-1" style="float:right;">Delete <input type="hidden" name="status[facebook]" value="0"> <input name="status[facebook]" id="statusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger"> </div>';
	                	tabcontent += '<div class="col-1" style="float:right;">Edit <input type="hidden" name="status[facebook]" value="0"> <input name="status[facebook]" id="statusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger"> </div>';
	                	tabcontent += '<div class="col-1" style="float:right;">Add <input type="hidden" name="status[facebook]" value="0"> <input name="status[facebook]" id="statusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger"> </div>';
	                	tabcontent += '<div class="col-1" style="float:right;">View <input type="hidden" name="status[facebook]" value="0"> <input name="status[facebook]" id="statusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger"> </div></div>';
	                }
	                });
	            	$.each(data["subMenu"], function(index, value) {
                	if (value["main_menu_id"]==mainMenuId) {
                	var subMenuId = val["id"];
                    tabcontent += '<div class="p-t-10 col-12">';
                    tabcontent += '<div id="accordion' + i + j + index + '" role="tablist" class="minimal-faq" aria-multiselectable="true">';
                    tabcontent += '<div class="card m-b-0">';
                    tabcontent += '<div class="card-header" role="tab" id="headingOne11">';
                    tabcontent += '<h5 class="mb-0">';
                    tabcontent += '<a class="link" data-toggle="collapse" data-parent="#accordion' + i + j + index + '" href="#collapseOne' + i + j + index + '" aria-expanded="false" aria-controls="collapseOne' + i + index + '">' + value["menu"] + '</a>';
                    tabcontent += '</h5>';
                    tabcontent += '</div>';
                    tabcontent += '<div id="collapseOne' + i + j + index + '" class="collapse" role="tabpanel" aria-labelledby="headingOne11">';
                    tabcontent += '<div class="card-body">';
                	tabcontent += '<div class="m-t-20 col-12">'+value["menu"]+' <div class="col-2 bt-switch"style="display: inline-flex;"> <input type="hidden" name="status[facebook]" value="0"> <input name="status[facebook]" id="statusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger"> </div> ';
                	tabcontent += '<div class="col-1" style="float:right;">Status <input type="hidden" name="status[facebook]" value="0"> <input name="status[facebook]" id="statusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger"> </div>';
                	tabcontent += '<div class="col-1" style="float:right;">Delete <input type="hidden" name="status[facebook]" value="0"> <input name="status[facebook]" id="statusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger"> </div>';
                	tabcontent += '<div class="col-1" style="float:right;">Edit <input type="hidden" name="status[facebook]" value="0"> <input name="status[facebook]" id="statusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger"> </div>';
                	tabcontent += '<div class="col-1" style="float:right;">Add <input type="hidden" name="status[facebook]" value="0"> <input name="status[facebook]" id="statusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger"> </div>';
                	tabcontent += '<div class="col-1" style="float:right;">View <input type="hidden" name="status[facebook]" value="0"> <input name="status[facebook]" id="statusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger"> </div></div>';
		            $.each(data["assignMenu"], function(index, value) {
                	if (value["facility_id"]==facilityId&&value["main_menu_id"]==mainMenuId&&value["sub_menu_id"]==subMenuId) {
	                	tabcontent += '<div class="m-t-20 col-12">'+value["menu"]+' <div class="col-2 bt-switch"style="display: inline-flex;"> <input type="hidden" name="status[facebook]" value="0"> <input name="status[facebook]" id="statusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger"> </div> ';
	                	tabcontent += '<div class="col-1" style="float:right;">Status <input type="hidden" name="status[facebook]" value="0"> <input name="status[facebook]" id="statusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger"> </div>';
	                	tabcontent += '<div class="col-1" style="float:right;">Delete <input type="hidden" name="status[facebook]" value="0"> <input name="status[facebook]" id="statusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger"> </div>';
	                	tabcontent += '<div class="col-1" style="float:right;">Edit <input type="hidden" name="status[facebook]" value="0"> <input name="status[facebook]" id="statusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger"> </div>';
	                	tabcontent += '<div class="col-1" style="float:right;">Add <input type="hidden" name="status[facebook]" value="0"> <input name="status[facebook]" id="statusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger"> </div>';
	                	tabcontent += '<div class="col-1" style="float:right;">View <input type="hidden" name="status[facebook]" value="0"> <input name="status[facebook]" id="statusfacebook" value="1"  type="checkbox" data-on-color="info" data-off-color="danger"> </div></div>';
	                }
	                });
                    tabcontent += '</div>';
                    tabcontent += '</div>';
                    tabcontent += '</div>';
                    tabcontent += '</div>';
                    tabcontent += '</div>';
                	}
                	});
                    tabcontent += '</div>';
                    tabcontent += '</div>';
                    tabcontent += '</div>';
                    tabcontent += '</div>';
                    tabcontent += '</div>';
                
                	}
                });
                tabcontent += '</div>';
                tabcontent += '</div>';
                tabcontent += '</div>';
                tabcontent += '</div>';
                tabcontent += '</div>';
            });
            $("#tablist").html(tablist);
            $("#tabcontent").html(tabcontent);
            $(".bt-switch input[type='checkbox'], .bt-switch input[type='radio']").bootstrapSwitch();
        });
});

</script>