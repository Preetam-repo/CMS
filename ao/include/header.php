<?php
error_reporting(0);
session_start();
include 'config.php';
include '../config.php';
include '../../config.php';
if (!((isset($_SESSION['UserData']))&&(!empty($_SESSION['UserData'])))) {
header("Location:".$base_url."s_admin");
}
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
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $base_url; ?>">
		<title><?php echo "BGMS : ".$_SESSION['UserData']->name; ?></title>
		<link rel="canonical" href="" />
		<link href="<?php echo $base_url; ?>assets/node_modules/bootstrap-table/dist/bootstrap-table.min.css" rel="stylesheet" type="text/css" />
		<!-- Custom CSS -->
		<link href="<?php echo $base_url; ?>s_admin/style.min.css" rel="stylesheet">
    	<link href="<?php echo $base_url; ?>assets/node_modules/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/node_modules/bootstrap-select/bootstrap-select.min.css">
		<link href="<?php echo $base_url; ?>assets/node_modules/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $base_url; ?>assets/dist/css/pages/icon-page.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js" integrity="sha256-HkXXtFRaflZ7gjmpjGQBENGnq8NIno4SDNq/3DbkMgo=" crossorigin="anonymous"></script>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="<?php echo $base_url; ?>assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
<!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" /> -->
<link href="https://cdn.jsdelivr.net/gh/akottr/dragtable@master/dragtable.css" rel="stylesheet">
<link href="<?php echo $base_url; ?>assets/node_modules/bootstrap-switch/bootstrap-switch.min.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>assets/dist/css/pages/bootstrap-switch.css" rel="stylesheet">
	</head>
	<body class="horizontal-nav skin-default fixed-layout">
		<!-- ============================================================== -->
		<!-- Preloader - style you can find in spinners.css -->
		<!-- ============================================================== -->
		<div class="preloader">
			<div class="loader">
				<div class="loader__figure"></div>
				<p class="loader__label"></p>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- Main wrapper - style you can find in pages.scss -->
		<!-- ============================================================== -->
		<div id="main-wrapper">