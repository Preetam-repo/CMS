<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar" style="z-index: 501;background: #F7CAAC!important;">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo $base_url; ?>ao/facilityMaster">
                <!-- Logo icon --><b>
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <!-- <img src="<?php echo $base_url; ?>assets/images/logo-icon.png" alt="homepage" class="dark-logo" /> -->
                <!-- Light Logo icon -->
                <!-- <img src="<?php echo $base_url; ?>assets/images/logo-light-icon.png" alt="homepage" class="light-logo" /> -->
                </b>
                <!--End Logo icon -->
                <!-- Logo text --><span>
                <!-- dark Logo text -->
                <img src="<?php echo $base_url; ?>assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                <!-- Light Logo text -->
            <img src="<?php echo $base_url; ?>assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto" style="
    width: 100%;
">
                <!-- This is  -->
                <li class="nav-item d-md-none">
                    <a class="nav-link nav-toggler waves-effect waves-light" href="javascript:void(0)"><i class="ti-menu"></i>
                    </a>
                </li>
    <li class="nav-item" style="
    width: 100%;
    height: 66px;
"><h4 style="
    margin: 0;
    color: white;
    font-weight: 400;
    text-align: center;
    width: 100%;
    height: 100%;
    top: 20px;
    position: relative;
">Office of the <?php echo $_SESSION["UserData"]->name; ?></h4></li>
                <!-- ============================================================== -->
                <!-- Comment -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End Comment -->
                <!-- ============================================================== -->
            </ul>
            <ul class="navbar-nav my-lg-0">
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <li class="nav-item right-side-toggle"> <a style="top:15px" class="btn btn-warning  waves-effect waves-light" href="<?php echo $_SERVER['PHP_SELF'] ?>/../logout">Logout</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo $base_url; ?>assets/images/users/1.jpg" alt="user" class="img-circle" width="30"></a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                        <span class="with-arrow"><span class="bg-primary"></span></span>
                        <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                            <div class=""><img src="<?php echo $base_url; ?>assets/images/users/1.jpg" alt="user" class="img-circle" width="60"></div>
                            <div class="m-l-10">
                                <h4 class="m-b-0">Steave Jobs</h4>
                                <p class=" m-b-0"><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="06706774736846616b676f6a2865696b">[email&#160;protected]</a></p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                        <div class="dropdown-divider"></div>
                        <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
            </ul>
        </div>
    </nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <div class="nav-text-box align-items-center d-md-none">
        <!--<span><img src="<?php echo $base_url; ?>assets/images/logo-icon.png" alt="elegant admin template"></span>-->
        <a class="nav-lock waves-effect waves-dark ml-auto hidden-md-down" href="javascript:void(0)"><i class="mdi mdi-toggle-switch"></i></a>
        <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i class="ti-close"></i></a>
    </div>
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
            </ul>
        </li>
    </ul>
</nav>
<!-- End Sidebar navigation -->
</div>
<!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<div class="custom-left-sidebar ">
<div class="rpanel-title"> Sidebar <span><i class="ti-close left-side-toggle"></i></span> </div>
<!-- Sidebar navigation-->
<nav class="r-panel-body r-panel-body1" style="padding: 7px;">
<ul id="sidebarnav1">
</ul>
<ul id="customMenu">
    <!--<li> <a class="has-arrow waves-effect waves-dark toogleMenu" href="user" aria-expanded="false" class="has-arrow waves-effect waves-dark">Users</a> </li>-->
    <li> <a class="has-arrow waves-effect waves-dark toogleMenu" href="javascript:void(0)" aria-expanded="false" value="websiteManagement" class="has-arrow waves-effect waves-dark">Website Master</a> 
<ul aria-expanded="false" class="collapse" id="websiteManagement">
    <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/websiteManagement">Website Management</a> </li>
    <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/sectionManagement">Section Management</a> </li>
    <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/websiteMainMenu">Main Menu</a> </li>
    <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/websiteSubMenu">Sub Menu</a> </li>
    <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/websiteChildMenu">Child Menu</a> </li>
    <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/websiteSlider">Slider</a> </li>
    <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/pageMaster">Page Builder</a> </li>
    <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/websiteContactUs">Contact Us Queries</a> </li>
    <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/websiteNewsletterSubscription">Newsletter Subscription</a> </li>
    <!-- <li> <a class="has-arrow waves-effect waves-dark" href="assignWebpageMenu">Assign Website Page</a> </li> -->
<li> <a class="has-arrow waves-effect waves-dark toogleMenu" href="javascript:void(0)" aria-expanded="false" value="sections"><span class="hide-menu">Sections</span> </a>
    <ul aria-expanded="false" class="collapse" id="sections">
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/sections/services">Services</a>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/sections/features">Features</a>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/sections/articles">Articles</a>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/sections/team">Team</a>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/sections/clienttestimonial">Client Testimonial</a>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/sections/client">Client</a>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/sections/counter">Counter</a>
        <!-- <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/sections/countdowntimer">Countdown Timer</a> -->
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/sections/faq">Faq</a>
    </ul>
</li>
</ul>
</li>
<!-- <li> <a class="has-arrow waves-effect waves-dark toogleMenu" href="javascript:void(0)" aria-expanded="false" value="prePrimary" class="has-arrow waves-effect waves-dark">Pre Primary Master</a>
    <ul aria-expanded="false" class="collapse" id="prePrimary">
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getprefix">Prefix</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getrelationship">Relationship</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getnationality">Nationality</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getgender">Gender</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getmaritalstatus">Marital Status</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getcastcategory">Cast Category </a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getoccupation">Occupation</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getauthenticationstatusmaster">Authentication status Master</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getglobalisationstatusmaster">Globalisation status Master</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getownerdesignation">Owner Designation</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getentitytype">Entity Type</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getcontacttype">Contact Type</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getnameofbank">Name of Bank</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getbankbranch">Bank Branch</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getsupplyproductcategory">Supply Product Category</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getunitofmeasurement">Unit of Measurement</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getunitmeasurementconverter">Unit Measurement Converter</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getdepartmentgroup">Department Group</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getdepartment">Department</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getemployeedesignation">Employee Designation</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getinspectiontype">Inspection Type</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getdistributioncollectioncenter">Distribution &amp; Collection Center</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getfinancialyear">Financial year</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getbusinessgroup">Business group</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getcountry">Country</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getstate">State</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getdistrict">District</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/gettehsil">Tehsil / Sub-district</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getlocalitytype">Locality Type </a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getcitytype">City Type </a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getcity">City</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getcityward">City Ward</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getcityareacolonystreet">City Area Colony / Street</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getcurrency">Currency</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getpanchayat">Panchayat</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getvillage">Village</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getvillageward">Village Ward</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getvillageareacolonystreet">Village Area Colony / Street</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getstdcode">STD Code</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getisd">ISD</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/geturl">URL</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getemail">Email</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getmobile">Mobile</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/prePrimaryMaster/getpostpin">Post PIN</a> </li>
    </ul>
</li>
<li> <a class="has-arrow waves-effect waves-dark toogleMenu" href="javascript:void(0)" aria-expanded="false" value="categoriesMenu"><span class="hide-menu">Admin Master</span> </a>
    <ul aria-expanded="false" class="collapse" id="categoriesMenu">
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/facilityMaster">Facility</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/mainMenu">Main Menu</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/subMenu">Sub Menu</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/assignPageMenu">Assign Page Menu</a> </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/pageBuilder">Page Builder</a> </li>
    </ul>
</li>
<li> <a class="has-arrow waves-effect waves-dark toogleMenu" href="javascript:void(0)" aria-expanded="false" value="masterMenu"><span class="hide-menu">Ao Master</span> </a>
    <ul aria-expanded="false" class="collapse" id="masterMenu">
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/aoMaster">AO User</a> </li>
    </ul>
</li>
</li>
<li> <a class="has-arrow waves-effect waves-dark toogleMenu" href="javascript:void(0)" aria-expanded="false" value="importExport"><span class="hide-menu">Import Export</span> </a>
    <ul aria-expanded="false" class="collapse" id="importExport">
        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo $base_url; ?>ao/importSettings">Import Settings</a> </li>
    </ul>
</li> -->
</ul>
</nav>
<!-- End Sidebar navigation -->
</div>