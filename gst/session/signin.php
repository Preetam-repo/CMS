<?php 
session_start();
$_SESSION["UserData"] = json_decode($_GET["UserData"]);
// print_r($_SESSION["UserData"]);die;
header("Location:../");
?>