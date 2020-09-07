<?php 
session_start();
$_SESSION["UserData"] = json_decode($_COOKIE["UserData"]);
// print_r($_SESSION["UserData"]->type==false);die;
if ($_SESSION["UserData"]->type==false) {
	// echo "Yes";
header("Location: ../dashboard.php");
}else{
	// echo "No";
header("Location: ../../super_user/dashboard.php");
	}
 ?>