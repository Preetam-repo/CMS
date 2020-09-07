<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $base_url; ?>assets/images/favicon.png">
    <title>VOS Admin</title>
    <!-- page css -->
    <link href="<?php echo $base_url; ?>assets/dist/css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo $base_url; ?>assets/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-blue card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">VOS admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-image:url(<?php echo $base_url; ?>assets/images/background/login-register.jpg);">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" id="associateId" action="" method="post">
                        <h3 class="box-title m-b-20">Associate ID</h3>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" name="associateId" type="text" required="required" placeholder="Enter Associate ID"> 
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="col-xs-12 p-b-20">
                                <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                    <form class="form-horizontal form-material" id="loginform" action="" method="post" style="display: none">
                        <h3 class="box-title m-b-20">Welcome <span id="aoName"></span></h3>
                        
                        <div class="form-group text-center">
                            <div class="col-xs-12">
                                <input class="form-control" name="userName" type="text" required="required" placeholder="Username"> 
                            </div>
                            </div>
                        <div class="form-group text-center">
                            <div class="col-xs-12">
                                <input class="form-control" name="password" type="password" required="required" placeholder="Password"> 
                            </div>
                            </div>
                        <div class="form-group text-center">
                            <div class="col-xs-12 p-b-20">
                                <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo $base_url; ?>assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo $base_url; ?>assets/node_modules/popper/popper.min.js"></script>
    <script src="<?php echo $base_url; ?>assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
    <!--Custom JavaScript -->
    <script type="text/javascript">
    $(function() {
        $(".preloader").fadeOut();
    });
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });
    // ============================================================== 
    // Login and Recover Password 
    // ============================================================== 
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    $("#associateId").submit(function(event) {
        event.preventDefault();
        var formdata = new FormData(this);
        // formdata.set("loginLink","<?php echo $_GET["page"]; ?>");
        // formdata.set("url","<?php echo $_SERVER["HTTP_HOST"]; ?>");
        $.ajax({
        	url: '<?php echo $base_url; ?>api/aoMaster/checkId',
        	type: 'POST',
        	data: formdata,
        	contentType:false,
        	processData:false
        })
        .done(function(response) {
        	var data = JSON.parse(response);
        	$("#aoName").html(data.name);
            $("#associateId").slideUp();
            $("#loginform").fadeIn();
        	
        });
        
    });
    $("#loginform").submit(function(event) {
        event.preventDefault();
        var formdata = new FormData(this);
        $.ajax({
        	url: '<?php echo $base_url; ?>api/aoMaster/checkLogin',
        	type: 'POST',
        	data: formdata,
        	contentType:false,
        	processData:false
        })
        .done(function(response) {
            var data = JSON.parse(response);
        	if (data.status==true) {
        		window.location.href = "<?php echo $base_url; ?>"+data.url+data.aoUserData+"&location="+window.location.href;
        	}	
        });
        
    });
    </script>
</body>
</html>