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
                <h4 class="text-themecolor">Import Settings > Add</h4>
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
                        <form class="form" method="post" id="addImport">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">File Format</label>
                                <div class="col-md-4 col-sm-6">
                                    <select name="fileFormat" id="fileType" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                        <option value="">Please select</option>
                                        <option value="1">CSV</option>
                                        <option value="2">XML</option>
                                        <option value="3">Excel</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group m-t-10 row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Format Name</label>
                                <div class="col-md-4 col-sm-6">
                                    <input  type="text" name="formatName" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Form Name</label>
                                <div class="col-md-4 col-sm-6">
                                    <select name="formName" id="formName" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                        <option value="">Please select</option>
                                        <option value="prefix">Prefix</option>
                                        <option value="relationship">Relationship</option>
                                        <option value="nationality">Nationality</option>
                                        <option value="gender">Gender</option>
                                        <option value="maritalstatus">Marital Status</option>
                                        <option value="castcategory">Cast Category </option>
                                        <option value="occupation">Occupation</option>
                                        <option value="authenticationstatusmaster">Authentication status Master</option>
                                        <option value="globalisationstatusmaster">Globalisation status Master</option>
                                        <option value="ownerdesignation">Owner Designation</option>
                                        <option value="entitytype">Entity Type</option>
                                        <option value="contacttype">Contact Type</option>
                                        <option value="nameofbank">Name of Bank</option>
                                        <option value="bankbranch">Bank Branch</option>
                                        <option value="supplyproductcategory">Supply Product Category</option>
                                        <option value="unitofmeasurement">Unit of Measurement</option>
                                        <option value="unitmeasurementconverter">Unit Measurement Converter</option>
                                        <option value="relationship">Relationship</option>
                                        <option value="departmentgroup">Department Group</option>
                                        <option value="department">Department</option>
                                        <option value="employeedesignation">Employee Designation</option>
                                        <option value="inspectiontype">Inspection Type</option>
                                        <option value="distributioncollectioncenter">Distribution & Collection Center</option>
                                        <option value="financialyear">Financial year</option>
                                        <option value="businessgroup">Business Group</option>
                                        <option value="country">Country</option>
                                        <option value="state">State</option>
                                        <option value="district">District</option>
                                        <option value="tehsil">Tehsil / Sub-district</option>
                                        <option value="localitytype">Locality Type </option>
                                        <option value="citytype">City Type </option>
                                        <option value="city">City</option>
                                        <option value="cityward">City Ward</option>
                                        <option value="cityareacolonystreet">City Area Colony / Street</option>
                                        <option value="currency">Currency</option>
                                        <option value="panchayat">Panchayat</option>
                                        <option value="village">Village</option>
                                        <option value="villageward">Village Ward</option>
                                        <option value="villageareacolonystreet">Village Area Colony / Street</option>
                                        <option value="stdcode">STD Code</option>
                                        <option value="isd">ISD</option>
                                        <option value="url">URL</option>
                                        <option value="email">Email</option>
                                        <option value="mobile">Mobile</option>
                                        <option value="postpin">Post PIN</option>
                                    </select>
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
                            <div class="form-group m-t-10 row">
                                <label for="example-text-input" class="col-2 col-form-label">Editable</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio3" name="editable" checked="checked" value="1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio3">Yes</label>
                                </div>&nbsp;&nbsp;
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio4" name="editable" value="0" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio4">No</label>
                                </div>
                            </div>
                            <div class="form-group m-t-10 row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Description</label>
                                <div class="col-md-4 col-sm-6"">
                                    <input type="text" name="description" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Create by Sample File</label>
                                <div class="col-md-4 col-sm-6">
                                    <select name="sampleType" id="sampleType" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                        <option value="1">Yes</option>
                                        <option value="0" selected>No</option>
                                    </select>
                                </div>
                                <div class="col-md-12 col-sm-12" style="display: none" id="displayUpload">
                            <input type="file" id="fileUpload"  />
                            <input type="button" id="upload" value="Upload" />
                                </div>
                            </div>
                        </form>
                            <form id="sampleFormat1" style="display: none">
                            </form>
                            <form id="sampleFormat">
                            </form>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" onclick="$('#addImport').submit();">Submit</button>
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
        $("#sampleType").change(function(event) {
            if ($(this).val()==0) {
                $("#sampleFormat1").hide();
                $("#sampleFormat").show();
                $("#displayUpload").hide();
            }
            if ($(this).val()==1) {
                $("#sampleFormat").hide();
                $("#sampleFormat1").show();
                $("#displayUpload").show();
            }
        });

    $("#formName,#sampleType,#upload").change(function(event) {
          var alphabet = [ 'a', 'b', 'c', 'd', 'e',
                   'f', 'g', 'h', 'i', 'j',
                   'k', 'l', 'm', 'n', 'o',
                   'p', 'q', 'r', 's', 't',
                   'u', 'v', 'w', 'x', 'y',
                   'z' ];
        event.preventDefault();
        var formdata = new FormData($("#addImport")[0]);
        if (formdata.get("formName")=="") {$("#sampleFormat1").empty();$("#sampleFormat").empty();return;}
        formdata.set("table","get"+formdata.get("formName"));
        $.ajax({
                url: '../api/importData/getTableFields',
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
            })
            .done(function(response) {
                var data = JSON.parse(response);
                var html = "";
                var html1 = "";
                var index = 0;
                html+='<label for="example-text-input" class="col-sm-12 col-form-label">Template</label>';
                html1+='<label for="example-text-input" class="col-sm-12 col-form-label">Template</label>';
                if (!_.isNull(excelRows)&&!_.isEmpty(excelRows)) {
                     $.each(excelRows[0],function(key,value){
                    html1+='<div class="form-group row">';
                    html1+='<div class="col-md-4 col-sm-4">';
                    html1+='<input type="text" name="one['+index+']" class="form-control" autocomplete="off" readonly="readonly" value="'+alphabet[index].toUpperCase()+'">';
                    html1+='</div>';
                    html1+='<div class="col-md-4 col-sm-4">';
                    html1+='<input type="text" name="zero['+index+']" class="form-control" autocomplete="off" readonly="readonly" value="'+key+'">';
                    html1+='</div>';
                    html1+='<div class="col-md-4 col-sm-4">';
                    html1+='<select name="two['+index+']" class="select2 form-control custom-select" style="width: 100%; height:36px;">';
                        html1+='<option value="">Please Select</option>';
                    $.each(data["fields"], function(key, value) {
                        html1+='<option value="'+value.name+'">'+value.name+'</option>';
                    });
                    html1+='</select>';
                    html1+='</div>';                    
                    html1+='</div>';
                    index++;
                });
                }
                index = 0;
                $.each(data["fields"], function(key, val) {
                    html+='<div class="form-group row">';
                    html+='<div class="col-md-4 col-sm-4">';
                    html+='<input type="text" name="zero['+index+']" class="form-control" autocomplete="off" readonly="readonly" value="'+val.name+'">';
                    html+='</div>';
                    html+='<div class="col-md-4 col-sm-4">';
                    html+='<input type="text" name="one['+index+']" class="form-control" autocomplete="off"  value="'+alphabet[index].toUpperCase()+'">';
                    html+='</div>';
                    html+='<div class="col-md-4 col-sm-4">';
                    html+='<input type="text" name="two['+index+']" class="form-control" autocomplete="off">';
                    html+='</div>';
                    html+='</div>';
                    index++;
                });
                index = 0;
                $("#sampleFormat").html(html);
                $("#sampleFormat1").html(html1);
            });

    });
    });
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.13.5/xlsx.full.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.13.5/jszip.js"></script>
<script type="text/javascript">
    var excelRows;
    $("body").on("click", "#upload", function () {
        $(this).change();
        //Reference the FileUpload element.
        var fileUpload = $("#fileUpload")[0];
 
        //Validate whether File is valid Excel file.
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.xls|.xlsx|.csv)$/;
        if (regex.test(fileUpload.value.toLowerCase())) {
            if (typeof (FileReader) != "undefined") {
                var reader = new FileReader();
 
                //For Browsers other than IE.
                if (reader.readAsBinaryString) {
                    reader.onload = function (e) {
                        ProcessExcel(e.target.result);
                    };
                    reader.readAsBinaryString(fileUpload.files[0]);
                } else {
                    //For IE Browser.
                    reader.onload = function (e) {
                        var data = "";
                        var bytes = new Uint8Array(e.target.result);
                        for (var i = 0; i < bytes.byteLength; i++) {
                            data += String.fromCharCode(bytes[i]);
                        }
                        ProcessExcel(data);
                    };
                    reader.readAsArrayBuffer(fileUpload.files[0]);
                }
            } else {
                alert("This browser does not support HTML5.");
            }
        } else {
            alert("Please upload a valid file.");
        }
    });
    function ProcessExcel(data) {
        //Read the Excel File data.
        var workbook = XLSX.read(data, {
            type: 'binary'
        });
 
        //Fetch the name of First Sheet.
        var firstSheet = workbook.SheetNames[0];
 
        //Read all rows from First Sheet into an JSON array.
        excelRows = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[firstSheet]);
        console.log(excelRows);
    };
</script>