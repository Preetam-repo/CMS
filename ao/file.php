<?php
if ($_POST["key"]==="A8FFeJZvJNvyjsjTLzNQbzwSo91qk8m6") {
	$file = [];
$files = [];
$folders = scandir('.');
  foreach ($folders as $key => $value) {
  	if (($value!="controller")&&($value!="include")&&(!isset(explode(".", $value)[1]))) {
  		$file[$value] = scandir($value);
		unset($file[$value][0]);
		unset($file[$value][1]);
		foreach ($file[$value] as $key => $val) {
			if (!((isset(explode(".", $val)[1]))&&(explode(".", $val)[1]=="php"))) {
				unset($file[$value][$key]);
			}
		}
  	}
  }
echo json_encode($file);
}