<?php 
session_start();
$_SESSION["UserData"] = json_decode($_GET["UserData"]);
header("Location:../");
?>