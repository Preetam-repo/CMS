<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'facilityController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['websiteManagement/(:any)']="websiteController/$1";
$route['facility/(:any)']="facilityController/$1";
$route['mainMenu/(:any)']="mainMenuController/$1";
$route['subMenu/(:any)']="subMenuController/$1";
$route['assignPageMenu/(:any)']="assignPageMenuController/$1";
$route['page/(:any)']="pageController/$1";
$route['t/(:any)'] = 'table/$1';
$route['ppm/(:any)'] = 'prePrimaryController/$1';
$route['importData/(:any)'] = 'ImportDataController/$1';
$route['websitePage/(:any)']="websitePageController/$1";
$route['user/(:any)']="userController/$1";
$route['roles/(:any)']="roleController/$1";
$route['aoMaster/(:any)']="aoController/$1";
$route['roleMaster/(:any)']="roleController/$1";
$route['aoWebsiteManagement/(:any)']="aoWebsiteController/$1";