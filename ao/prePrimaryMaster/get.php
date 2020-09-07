<?php $page = ["prefix"=>"Prefix", "relationship"=>"Relationship", "nationality"=>"Nationality", "gender"=>"Gender", "maritalstatus"=>"Marital Status", "castcategory"=>"Cast Category ", "occupation"=>"Occupation", "authenticationstatusmaster"=>"Authentication status Master", "globalisationstatusmaster"=>"Globalisation status Master", "ownerdesignation"=>"Owner Designation", "entitytype"=>"Entity Type", "contacttype"=>"Contact Type", "nameofbank"=>"Name of Bank", "bankbranch"=>"Bank Branch", "supplyproductcategory"=>"Supply Product Category", "unitofmeasurement"=>"Unit of Measurement", "unitmeasurementconverter"=>"Unit Measurement Converter", "relationship"=>"Relationship", "departmentgroup"=>"Department Group", "department"=>"Department", "employeedesignation"=>"Employee Designation", "inspectiontype"=>"Inspection Type", "distributioncollectioncenter"=>"Distribution & Collection Center", "financialyear"=>"Financial year", "businessgroup"=>"Business Group", "country"=>"Country", "state"=>"State", "district"=>"District", "tehsil"=>"Tehsil / Sub-district", "localitytype"=>"Locality Type ", "citytype"=>"City Type ", "city"=>"City", "cityward"=>"City Ward", "cityareacolonystreet"=>"City Area Colony / Street", "currency"=>"Currency", "panchayat"=>"Panchayat", "village"=>"Village", "villageward"=>"Village Ward", "villageareacolonystreet"=>"Village Area Colony / Street", "stdcode"=>"STD Code", "isd"=>"ISD", "url"=>"URL", "email"=>"Email", "mobile"=>"Mobile", "postpin"=>"Post PIN"]; ?>
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
                <h4 class="text-themecolor"> <?php echo $page[$_GET['page']]; ?> > <?php echo ($_GET['type']=="add")?"Add":"Table"; ?></h4>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <?php if ($_GET['type']=="add"){ ?>
                        <form class="form" id="addForm">
                            <input type="hidden" name="action" value="<?php echo $_GET['page']; ?>">
                            <div class="form-group m-t-10 row">
                                <label for="example-text-input" class="col-2 col-form-label">Master Type</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio5" name="type" checked="checked" value="Ordinary" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio5">Ordinary</label>
                                </div>&nbsp;&nbsp;
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio6" name="type" value="Specified" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio6">Specified</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Name</label>
                                <div class="col-10">
                                    <input type="text" name="name" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group m-t-10 row">
                                <label for="example-text-input" class="col-2 col-form-label">Short Name</label>
                                <div class="col-10">
                                    <input type="text" name="shortName" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <?php if ($_GET['page']=="bankbranch") {
                            ?>
                            <script type="text/javascript">
                            $(document).ready(function() {
                            var selects = ["nameofbankid", "countryid", "stateid", "cityid", "postpinid"]
                            getSelects(selects);
                            });
                            </script>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Address</label>
                                <div class="col-10">
                                    <input placeholder="" name="address" class="form-control" type="text" class="validate">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Name of Bank</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='nameofbankid' class='nameofbankid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Country</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='countryid' class='countryid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">State</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='stateid' class='stateid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">City</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='cityid' class='cityid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Post PIN</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='postpinid' class='postpinid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">MICR</label>
                                <div class="col-10">
                                    <input placeholder="" name="micr" class="form-control" type="text" class="validate">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">IFSC</label>
                                <div class="col-10">
                                    <input placeholder="" name="ifsc" class="form-control" type="text" class="validate">
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ($_GET['page']=="unitofmeasurement") { ?>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">UQC</label>
                                <div class="col-10">
                                    <input placeholder="" name="uqc" class="form-control" type="text" class="validate">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Decimal</label>
                                <div class="col-10">
                                    <input type="number" name="decimal" class="form-control">
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ($_GET['page']=="unitmeasurementconverter") { ?>
                            <script type="text/javascript">
                            $(document).ready(function() {
                            var selects = ["unitofmeasurementid"];
                            getSelects(selects);
                            });
                            </script>
                            
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Primary Unit</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='primaryUnit' class='unitofmeasurementid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Equal To</label>
                                <div class="col-10">
                                    <input type="number" name="equalto" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Secondary Unit</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='secondaryUnit' class='unitofmeasurementid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ($_GET['page']=="department") { ?>
                            <script type="text/javascript">
                            $(document).ready(function() {
                            var selects = ["departmentgroupid"]
                            getSelects(selects);
                            });
                            </script>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Department Group</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='departmentgroupid' class='departmentgroupid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ($_GET['page']=="employeedesignation") { ?>
                            <script type="text/javascript">
                            $(document).ready(function() {
                            var selects = ["departmentgroupid","departmentid"]
                            var connector = ["departmentgroupid"];
                            getSelects(selects,connector);
                            });
                            </script>
                            
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Department Group</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='departmentgroupid' class='departmentgroupid select2 form-control custom-select' onchange='filterSelect("departmentgroupid","departmentid","departmentgroupid",this.value);' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Department</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='departmentId' class='departmentid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ($_GET['page']=="inspectiontype") { ?>
                            </script>
                            
                            <div class="form-group m-t-10 row">
                                <label for="example-text-input" class="col-2 col-form-label">Internal Inspection</label>
                                <div class="col-10">
                                    <input type="text" name="internalInspection" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group m-t-10 row">
                                <label for="example-text-input" class="col-2 col-form-label">External Inspection</label>
                                <div class="col-10">
                                    <input type="text" name="externalInspection" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group m-t-10 row">
                                <label for="example-text-input" class="col-2 col-form-label">Government Inspection</label>
                                <div class="col-10">
                                    <input type="text" name="governmentInspection" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group m-t-10 row">
                                <label for="example-text-input" class="col-2 col-form-label">Nodal Agency Inspection</label>
                                <div class="col-10">
                                    <input type="text" name="nodalAgencyInspection" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ($_GET['page']=="distributioncollectioncenter") { ?>
                            </script>
                            
                            <div class="form-group m-t-10 row">
                                <label for="example-text-input" class="col-2 col-form-label">Address</label>
                                <div class="col-10">
                                    <input type="text" name="address" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ($_GET['page']=="financialyear") { ?>
                            </script>
                            <div class="form-group m-t-10 row">
                                <label for="example-text-input" class="col-2 col-form-label">Year</label>
                                <div class="col-10">
                                    <input type="text" name="year" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group m-t-10 row">
                                <label for="example-text-input" class="col-2 col-form-label">Date From</label>
                                <div class="col-10">
                                    <input type="text" name="dateFrom" class="mydatepicker form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group m-t-10 row">
                                <label for="example-text-input" class="col-2 col-form-label">Date To</label>
                                <div class="col-10">
                                    <input type="text" name="dateTo" class="mydatepicker form-control" autocomplete="off">
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ($_GET['page']=="country") { ?>
                            <script type="text/javascript">
                            $(document).ready(function() {
                            var selects = ["isdid"];
                            getSelects(selects);
                            });
                            </script>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">ISD</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='isdid' class='isdid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ($_GET['page']=="state") { ?>
                            <script type="text/javascript">
                            $(document).ready(function() {
                            var selects = ["countryid"]
                            getSelects(selects);
                            });
                            </script>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Country</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='countryId' class='countryid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ($_GET['page']=="district") { ?>
                            <script type="text/javascript">
                            $(document).ready(function() {
                            var selects = ["countryid","stateid"]
                            var connector = ["countryid"];
                            getSelects(selects,connector);
                            });
                            </script>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Country</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='countryId' class='countryid select2 form-control custom-select' onchange='filterSelect("countryid","stateid","countryId",this.value);' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">State</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='stateId' class='stateid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ($_GET['page']=="tehsil") { ?>
                            <script type="text/javascript">
                            $(document).ready(function() {
                            var selects = ["countryid","stateid","districtid"]
                            var connector = ["countryid"];
                            getSelects(selects,connector);
                            });
                            </script>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Country</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='countryId' class='countryid select2 form-control custom-select' onchange='filterSelect("countryid","stateid","countryId",this.value);' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">State</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='stateId' class='stateid select2 form-control custom-select' onchange='filterSelect("stateid","districtid","stateId",this.value);' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">District</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='districtId' class='districtid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ($_GET['page']=="city") { ?>
                            <script type="text/javascript">
                            $(document).ready(function() {
                            var selects = ["countryid","stateid","districtid","tehsilid","localitytypeid","postpinid","citytypeid"];
                            var connector = ["countryid","localitytypeid","postpinid","citytypeid"];
                            getSelects(selects,connector);
                            });
                            </script>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Country</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='countryId' class='countryid select2 form-control custom-select' onchange='filterSelect("countryid","stateid","countryId",this.value);' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">State</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='stateId' class='stateid select2 form-control custom-select' onchange='filterSelect("stateid","districtid","stateId",this.value);' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">District</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='districtId' class='districtid select2 form-control custom-select' onchange='filterSelect("districtid","tehsilid","districtId",this.value);' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Tehsil</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='tehsilId' class='tehsilid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Locality Type</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='localityTypeId' class='localitytypeid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">City Type</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='cityTypeId' class='citytypeid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">POST PIN</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='postPinId' class='postpinid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ($_GET['page']=="cityward") { ?>
                            <script type="text/javascript">
                            $(document).ready(function() {
                            var selects = ["cityid","postpinid","citytypeid"];
                            var connector = ["cityid","citytypeid"];
                            getSelects(selects,connector);
                            });
                            </script>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">City Type</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='cityTypeId' class='citytypeid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">City</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='cityId' class='cityid select2 form-control custom-select' onchange='filterSelect1("cityid","postpinid","postPinId",this.value);' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Effective Date</label>
                                <div class="col-md-8 col-sm-12">
                                    <input type="text" name="effectiveDate" class="mydatepicker form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">POST PIN</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='postPinId' class='postpinid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ($_GET['page']=="cityareacolonystreet") { ?>
                            <script type="text/javascript">
                            $(document).ready(function() {
                            var selects = ["cityid","postpinid","citytypeid","citywardid"];
                            var connector = ["cityid","citytypeid","postpinid"];
                            getSelects(selects,connector);
                            });
                            </script>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">City Type</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='cityTypeId' class='citytypeid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">City</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='cityId' class='cityid select2 form-control custom-select' onchange='filterSelect("cityid","citywardid","cityId",this.value);filterSelect1("cityid","postpinid","postPinId",this.value);' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Ward</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='cityWardId' class='citywardid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">POST PIN</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='postPinId' class='postpinid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ($_GET['page']=="currency") { ?>
                            <script type="text/javascript">
                            $(document).ready(function() {
                            var selects = ["countryid"];
                            getSelects(selects);
                            });
                            </script>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Country</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='countryId' class='countryid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group m-t-10 row">
                                <label for="example-text-input" class="col-2 col-form-label">ISO4217 Code</label>
                                <div class="col-10">
                                    <input type="text" name="isoCode" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group m-t-10 row">
                                <label for="example-text-input" class="col-2 col-form-label">Currency Icon</label>
                                <div class="col-10">
                                    <input type="text" name="icon" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group m-t-10 row">
                                <label for="example-text-input" class="col-2 col-form-label">Decimal Places</label>
                                <div class="col-10">
                                    <input type="number" name="decimalPlaces" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ($_GET['page']=="panchayat") { ?>
                            <script type="text/javascript">
                            $(document).ready(function() {
                            var selects = ["countryid","stateid","districtid","tehsilid","localitytypeid","postpinid"];
                            var connector = ["countryid","localitytypeid","postpinid"];
                            getSelects(selects,connector);
                            });
                            </script>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Country</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='countryId' class='countryid select2 form-control custom-select' onchange='filterSelect("countryid","stateid","countryId",this.value);' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">State</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='stateId' class='stateid select2 form-control custom-select' onchange='filterSelect("stateid","districtid","stateId",this.value);' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">District</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='districtId' class='districtid select2 form-control custom-select' onchange='filterSelect("districtid","tehsilid","districtId",this.value);' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Tehsil</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='tehsilId' class='tehsilid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Locality Type</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='localityTypeId' class='localitytypeid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">POST PIN</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='postPinId' class='postpinid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ($_GET['page']=="village") { ?>
                            <script type="text/javascript">
                            $(document).ready(function() {
                            var selects = ["countryid","stateid","districtid","tehsilid","localitytypeid","postpinid","panchayatid"];
                            var connector = ["countryid","localitytypeid","postpinid","panchayatid"];
                            getSelects(selects,connector);
                            });
                            </script>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Country</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='countryId' class='countryid select2 form-control custom-select' onchange='filterSelect("countryid","stateid","countryId",this.value);' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">State</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='stateId' class='stateid select2 form-control custom-select' onchange='filterSelect("stateid","districtid","stateId",this.value);' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">District</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='districtId' class='districtid select2 form-control custom-select' onchange='filterSelect("districtid","tehsilid","districtId",this.value);' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Tehsil</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='tehsilId' class='tehsilid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Locality Type</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='localityTypeId' class='localitytypeid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Panchayat</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='panchayatId' class='panchayatid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">POST PIN</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='postPinId' class='postpinid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ($_GET['page']=="villageward") { ?>
                            <script type="text/javascript">
                            $(document).ready(function() {
                            var selects = ["panchayatid","postpinid","citytypeid"];
                            var connector = ["panchayatid"];
                            getSelects(selects,connector);
                            });
                            </script>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Panchayat</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='panchayatId' class='panchayatid select2 form-control custom-select' onchange='filterSelect1("panchayatid","postpinid","postPinId",this.value);' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Effective Date</label>
                                <div class="col-md-8 col-sm-12">
                                    <input type="text" name="effectiveDate" class="mydatepicker form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">POST PIN</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='postPinId' class='postpinid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ($_GET['page']=="villageareacolonystreet") { ?>
                            <script type="text/javascript">
                            $(document).ready(function() {
                            var selects = ["panchayatid","villageid","villagewardid","postpinid"];
                            var connector = ["panchayatid"];
                            getSelects(selects,connector);
                            });
                            </script>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Panchayat</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='panchayatId' class='panchayatid select2 form-control custom-select' onchange='filterSelect("panchayatid","villageid","panchayatId",this.value);filterSelect("panchayatid","villagewardid","panchayatId",this.value);' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Village</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='villageId' class='villageid select2 form-control custom-select' onchange='filterSelect1("villageid","postpinid","postPinId",this.value);' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Village Ward</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='villageWardId' class='villagewardid select2 form-control custom-select'  style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">POST PIN</label>
                                <div class="col-md-8 col-sm-12">
                                    <select name='postPinId' class='postpinid select2 form-control custom-select' style='width: 100%;height:36px;'>
                                    </select>
                                </div>
                            </div>
                            <?php } ?>
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
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                        </form>
                        <?php }else{ ?>
                        <div id="toolbar">
                            <a class="btn btn-success" style="color:#fff" href="add<?php echo $_GET['page']; ?>">
                                <i class="ti-plus"></i> Add
                            </a>
                            <a class="btn btn-success" data-toggle="modal" data-target="#verticalcenter" style="color:#fff" href="javascript:void(0);" >Import</a>
                        </div>
                        <div id="verticalcenter" class="modal" tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" style="max-width: 700px">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="vcenter">Import Data</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <ul class="nav nav-tabs customtab" role="tablist">
                                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#info1" role="tab" aria-selected="true"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Import Data</span></a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#info2" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Sample Template</span></a> </li>
                                    </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="info1" role="tabpanel">
                                <form id="importDataForm">
                                            <div class="form-group m-t-10 row">
                                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Format Type</label>
                                                <div class="col-md-8 col-sm-12 select">
                                                    <select name='fileFormat' class='fileFormat select2 form-control custom-select' style='width: 100%;height:36px;'>
                                                    <option value="">Please Select</option>
                                                        <option value="1">CSV</option>
                                                        <option value="2">JSON</option>
                                                        <option value="3">EXCEL</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Format Name</label>
                                                <div class="col-md-8 col-sm-12 select">
                                                    <select name='formatName' class='formatName select2 form-control custom-select' style='width: 100%;height:36px;'>
                                                    <option value="">Please Select</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">File</label>
                                                <div class="col-md-8 col-sm-12">
                                                    <input type="file" name="importFile" id="fileUpload" required="required">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-info waves-effect">Submit</button>
                                            <button type="button" class="btn btn-info waves-effect closeModal" data-dismiss="modal">Close</button>
                                        </form>
                            </div>
                            <div class="tab-pane" id="info2" role="tabpanel">
                                <form id="downloadSample">
                                            <div class="form-group m-t-10 row">
                                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Format Type</label>
                                                <div class="col-md-8 col-sm-12 select">
                                                    <select name='fileFormat' class='fileFormat select2 form-control custom-select' style='width: 100%;height:36px;' required="required">
                                                    <option value="">Please Select</option>
                                                        <option value="1">CSV</option>
                                                        <option value="2">JSON</option>
                                                        <option value="3">EXCEL</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-4 col-md-2 col-form-label">Format Name</label>
                                                <div class="col-md-8 col-sm-12 select">
                                                    <select name='formatName' class='formatName select2 form-control custom-select' style='width: 100%;height:36px;' required="required">
                                                    <option value="">Please Select</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-info waves-effect">Download</button>
                                            <button type="button" class="btn btn-info waves-effect closeModal" data-dismiss="modal">Close</button>
                                </form>
                            </div>
                            </div>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <div id="sampleTypeModal" class="modal" tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" style="max-width: 700px">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="vcenter">Import Data</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="sampleTypeForm">
                                            <button type="submit" class="btn btn-info waves-effect">Submit</button>
                                            <button type="button" class="btn btn-info waves-effect closeModal" data-dismiss="modal">Close</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <table id="table"data-toolbar="#toolbar"data-search="true"data-show-columns="true"data-show-export="true"data-minimum-count-columns="1"data-show-pagination-switch="true"data-pagination="true"data-page-list="[10, 25, 50, 100, ALL]"data-show-columns="true"data-show-toogle="true"data-show-export="true"data-filter-control="true"data-filter-show-clear="true">
                        <thead><tr id="thead"></tr></thead>
                    <tbody id="tbody"></tbody>
                </table>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Page Content -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
<?php include '../include/footer.php'; ?>
<script type="text/javascript">
    var bodyOrder = {};
    bodyOrder['Type'] = "type";
    bodyOrder['Name'] = "name";
    bodyOrder['Short Name'] = "shortName";
        //START
            <?php if ($_GET['page']=="unitofmeasurement") {
            ?>
            bodyOrder['UQC'] = "uqc";
            bodyOrder['Decimal'] = "decimal";
            <?php } ?>
            <?php if ($_GET['page']=="unitmeasurementconverter") {
            $table = "getunitmeasurementconverter_view"; ?>
            bodyOrder['Primary Unit'] = "primaryUnit";
            bodyOrder['Equal To'] = "equalto";
            bodyOrder['Secondary Unit'] = "secondaryUnit";
            <?php } ?>
            <?php if ($_GET['page']=="department") {
            $table = "getdepartment_view"; ?>
            bodyOrder['Department Group'] = "departmentgroup";
            <?php } ?>
            <?php if ($_GET['page']=="employeedesignation") {
            $table = "getemployeedesignation_view"; ?>
            bodyOrder['Department Group'] = "departmentGroup";
            bodyOrder['Department'] = "department";
            <?php } ?>
            <?php if ($_GET['page']=="inspectiontype") {
            ?>
            bodyOrder['Internal Inspection'] = "internalInspection";
            bodyOrder['External Inspection'] = "externalInspection";
            bodyOrder['Government Inspection'] = "governmentInspection";
            bodyOrder['Nodal Agency Inspection'] = "nodalAgencyInspection";
            <?php } ?>
            <?php if ($_GET['page']=="distributioncollectioncenter") {
            ?>
            bodyOrder['Address'] = "address";
            <?php } ?>
            <?php if ($_GET['page']=="financialyear") {
            ?>
            bodyOrder['Year'] = "year";
            bodyOrder['Date From'] = "dateFrom";
            bodyOrder['Date To'] = "dateTo";
            <?php } ?>
            <?php if ($_GET['page']=="country") {
            $table = "getcountry_view"; ?>
            bodyOrder['ISD'] = "isd";
            <?php } ?>
            <?php if ($_GET['page']=="state") {
            $table = "getstate_view"; ?>
            bodyOrder['Country'] = "country";
            <?php } ?>
            <?php if ($_GET['page']=="district") {
            $table = "getdistrict_view"; ?>
            bodyOrder['Country'] = "country";
            bodyOrder['State'] = "state";
            <?php } ?>
            <?php if ($_GET['page']=="tehsil") {
            $table = "gettehsil_view"; ?>
            bodyOrder['Country'] = "country";
            bodyOrder['State'] = "state";
            bodyOrder['District'] = "district";
            bodyOrder['Tehsil'] = "tehsil";
            <?php } ?>
            <?php if ($_GET['page']=="city") {
            $table = "getcity_view"; ?>
            bodyOrder['Country'] = "country";
            bodyOrder['State'] = "state";
            bodyOrder['District'] = "district";
            bodyOrder['Tehsil'] = "tehsil";
            bodyOrder['Locality Type'] = "localitytype";
            bodyOrder['City Type'] = "cityType";
            bodyOrder['Post PIN'] = "postPin";
            <?php } ?>
            <?php if ($_GET['page']=="cityward") {
            $table = "getcityward_view"; ?>
            bodyOrder['City Type'] = "cityType";
            bodyOrder['City'] = "city";
            bodyOrder['Effective Date'] = "effectiveDate";
            bodyOrder['Post PIN'] = "postPin";
            <?php } ?>
            <?php if ($_GET['page']=="cityareacolonystreet") {
            $table = "getcityareacolonystreet_view"; ?>
            bodyOrder['City Type'] = "cityType";
            bodyOrder['City'] = "city";
            bodyOrder['City Ward'] = "cityWard";
            bodyOrder['Post PIN'] = "postPin";
            <?php } ?>
            <?php if ($_GET['page']=="currency") {
            $table = "getcurrency_view"; ?>
            bodyOrder['Country'] = "country";
            bodyOrder['ISO4217 Code'] = "isoCode";
            bodyOrder['Currency Icon'] = "icon";
            bodyOrder['Decimal Places'] = "decimalPlaces";
            <?php } ?>
            <?php if ($_GET['page']=="panchayat") {
            $table = "getpanchayat_view"; ?>
            bodyOrder['Country'] = "country";
            bodyOrder['State'] = "state";
            bodyOrder['District'] = "district";
            bodyOrder['Tehsil'] = "tehsil";
            bodyOrder['Locality Type'] = "localitytype";
            bodyOrder['Post PIN'] = "postPin";
            <?php } ?>
            <?php if ($_GET['page']=="village") {
            $table = "getvillage_view"; ?>
            bodyOrder['Country'] = "country";
            bodyOrder['State'] = "state";
            bodyOrder['District'] = "district";
            bodyOrder['Tehsil'] = "tehsil";
            bodyOrder['Locality Type'] = "localityType";
            bodyOrder['Panchayat'] = "panchayat";
            bodyOrder['Post PIN'] = "postPin";
            <?php } ?>
            <?php if ($_GET['page']=="villageward") {
            $table = "getvillageward_view"; ?>
            bodyOrder['Panchayat'] = "panchayat";
            bodyOrder['Effective Date'] = "effectiveDate";
            bodyOrder['Post PIN'] = "postPin";
            <?php } ?>
            <?php if ($_GET['page']=="villageareacolonystreet") {
            $table = "getvillageareacolonystreet_view"; ?>
            bodyOrder['Panchayat'] = "panchayat";
            bodyOrder['Village'] = "village";
            bodyOrder['Village Ward'] = "villageWard";
            bodyOrder['Post PIN'] = "postPin";
            <?php } ?>
        //END
    bodyOrder['Status'] = "status";
    bodyOrder['Action'] = "action";
var page = <?php echo (isset($table))? '"'.$table.'"' :"document.location.pathname.match(/[^\/]+$/)[0]"; ?>;
var selectData = [];

function getSelects(selects = "", connector = "") {
    $.ajax({
            url: '../../api/ppm/getSelects',
            type: 'POST',
            data: { selects: selects },
        })
        .done(function(response) {
            var data = JSON.parse(response);
            $.each(data, function(key, value) {
                selectData[key] = value;
            });
            if (connector != "") {
                $.each(connector, function(key, value) {
                    var newState = new Option("Please Select", "", false, true);
                    $('.' + value).append(newState);
                    $.each(data[value], function(index, val) {
                        var newState = new Option(val['name'], val['id'], false, false);
                        $('.' + value).append(newState);
                    });
                    $('.' + value).trigger('change');
                });
            } else {
                $.each(data, function(key, value) {
                    var newState = new Option("Please Select", "", false, true);
                    $('.' + key).append(newState);
                    $.each(data[key], function(index, val) {
                        var newState = new Option(val['name'], val['id'], false, false);
                        $('.' + key).append(newState);
                    });
                    $('.' + key).trigger('change');
                });
            }
        });
}

function filterSelect1(from = "", to = "", id = "", vale = "") {
    $('.' + to).empty();
    var newState = new Option("Please Select", "", false, true);
    $('.' + to).append(newState);
    $('.' + to).trigger('change');
    if (_.isEmpty(vale)) { return; }
    $.each(selectData[from], function(index, val) {
        if (vale == val['id']) {
            $.each(selectData[to], function(index, value) {
                if (val[id] == value['id']) {
                    var newState = new Option(value["name"], value['id'], false, false);
                    $('.' + to).append(newState);
                }
            });
        }
    });
    $('.' + to).trigger('change');
}

function filterSelect(from = "", to = "", id = "", vale = "") {
    $('.' + to).empty();
    var newState = new Option("Please Select", "", false, true);
    $('.' + to).append(newState);
    $('.' + to).trigger('change');
    if (_.isEmpty(vale)) { return; }
    $.each(selectData[from], function(index, val) {
        $.each(selectData[to], function(index, value) {
            if (val['id'] == value[id]) {
                if (vale == value[id]) {
                    var newState = new Option(value["name"], value['id'], false, false);
                    $('.' + to).append(newState);
                }
            }
        });
    });
    $('.' + to).trigger('change');
}
jQuery('.mydatepicker').datepicker({
    format: "dd-mm-yyyy",
    autoclose: true,
    todayHighlight: true
});
</script>
<?php include '../include/js-controller.php'; ?>
<script type="text/javascript">
    var excelRows;
    $("body").on("change", "#fileUpload", function () {
        //Reference the FileUpload element.
        var fileUpload = $("#fileUpload")[0];
        if (_.isEmpty(fileUpload.value.toLowerCase())) {return;}
        //Validate whether File is valid Excel file.
        var regex = /([a-zA-Z0-9\s_\\.\-\(\):])+(.xlsx|.xls|.csv)$/;
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
            alert("Please choose a valid file.");
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
    };
</script>
<script type="text/javascript">
    $("#downloadSample").submit(function(event) {
        event.preventDefault();
        var formdata = new FormData(this);        
    $.ajax({
        url: '../../api/importData/downloadSampleFormat',
        type: 'POST',
        data: formdata,
        processData: false,
        contentType: false,
    })
    .done(function(response) {
    
var data = JSON.parse(response);
var sampleFormat = JSON.parse(data["sampleFormat"]);
var object = [];
var key = (data.sampleType==1)?1:2;
$.each(sampleFormat, function(index, val) {
        object[index] = val[key];
    });
/* this line is only needed if you are not adding a script tag reference */
if(typeof XLSX == 'undefined') XLSX = require('xlsx');
var array = [] 
array[0] = object;
/* make the worksheet */
var ws = XLSX.utils.aoa_to_sheet(array);

/* add to workbook */
var wb = XLSX.utils.book_new();
XLSX.utils.book_append_sheet(wb, ws, "Template");

/* generate an XLSX file */
XLSX.writeFile(wb, "template.xlsx");
});
});
</script>