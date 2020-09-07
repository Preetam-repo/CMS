<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$active_group = 'admin_master';
$active_record = TRUE;

$serverUsername="root";
$serverPassword="";
$serverPrefix="taxanaly_";
if ($_SERVER["HTTP_HOST"]=="taxanalysis.in") {
	$serverUsername="taxanaly_cms_admin";
	$serverPassword="taxanaly_cms_admin";
	$serverPrefix="taxanaly_";
}




$db['admin_master']['hostname'] = 'localhost';
$db['admin_master']['username'] = $serverUsername;
$db['admin_master']['password'] = $serverPassword;
$db['admin_master']['database'] = $serverPrefix.'admin_master';
$db['admin_master']['dbdriver'] = 'mysqli';
$db['admin_master']['dbprefix'] = 'am_';
$db['admin_master']['pconnect'] = TRUE;
$db['admin_master']['db_debug'] = FALSE;
$db['admin_master']['cache_on'] = FALSE;
$db['admin_master']['cachedir'] = '';
$db['admin_master']['char_set'] = 'utf8';
$db['admin_master']['dbcollat'] = 'utf8_general_ci';
$db['admin_master']['swap_pre'] = '';
$db['admin_master']['autoinit'] = TRUE;
$db['admin_master']['stricton'] = FALSE;


$db['website_master']['hostname'] = 'localhost';
$db['website_master']['username'] = $serverUsername;
$db['website_master']['password'] = $serverPassword;
$db['website_master']['database'] = $serverPrefix.'website_master';
$db['website_master']['dbdriver'] = 'mysqli';
$db['website_master']['dbprefix'] = 'wm_';
$db['website_master']['pconnect'] = TRUE;
$db['website_master']['db_debug'] = FALSE;
$db['website_master']['cache_on'] = FALSE;
$db['website_master']['cachedir'] = '';
$db['website_master']['char_set'] = 'utf8';
$db['website_master']['dbcollat'] = 'utf8_general_ci';
$db['website_master']['swap_pre'] = '';
$db['website_master']['autoinit'] = TRUE;
$db['website_master']['stricton'] = FALSE;

$db['pre_primary_master']['hostname'] = 'localhost';
$db['pre_primary_master']['username'] = $serverUsername;
$db['pre_primary_master']['password'] = $serverPassword;
$db['pre_primary_master']['database'] = $serverPrefix.'pre_primary_master';
$db['pre_primary_master']['dbdriver'] = 'mysqli';
$db['pre_primary_master']['dbprefix'] = 'ppm_';
$db['pre_primary_master']['pconnect'] = TRUE;
$db['pre_primary_master']['db_debug'] = FALSE;
$db['pre_primary_master']['cache_on'] = FALSE;
$db['pre_primary_master']['cachedir'] = '';
$db['pre_primary_master']['char_set'] = 'utf8';
$db['pre_primary_master']['dbcollat'] = 'utf8_general_ci';
$db['pre_primary_master']['swap_pre'] = '';
$db['pre_primary_master']['autoinit'] = TRUE;
$db['pre_primary_master']['stricton'] = FALSE;

$db['user_roles']['hostname'] = 'localhost';
$db['user_roles']['username'] = $serverUsername;
$db['user_roles']['password'] = $serverPassword;
$db['user_roles']['database'] = $serverPrefix.'userroles';
$db['user_roles']['dbdriver'] = 'mysqli';
$db['user_roles']['dbprefix'] = 'ur_';
$db['user_roles']['pconnect'] = TRUE;
$db['user_roles']['db_debug'] = FALSE;
$db['user_roles']['cache_on'] = FALSE;
$db['user_roles']['cachedir'] = '';
$db['user_roles']['char_set'] = 'utf8';
$db['user_roles']['dbcollat'] = 'utf8_general_ci';
$db['user_roles']['swap_pre'] = '';
$db['user_roles']['autoinit'] = TRUE;
$db['user_roles']['stricton'] = FALSE;

$db['ao_master']['hostname'] = 'localhost';
$db['ao_master']['username'] = $serverUsername;
$db['ao_master']['password'] = $serverPassword;
$db['ao_master']['database'] = $serverPrefix.'ao_master';
$db['ao_master']['dbdriver'] = 'mysqli';
$db['ao_master']['dbprefix'] = 'ao_';
$db['ao_master']['pconnect'] = TRUE;
$db['ao_master']['db_debug'] = FALSE;
$db['ao_master']['cache_on'] = FALSE;
$db['ao_master']['cachedir'] = '';
$db['ao_master']['char_set'] = 'utf8';
$db['ao_master']['dbcollat'] = 'utf8_general_ci';
$db['ao_master']['swap_pre'] = '';
$db['ao_master']['autoinit'] = TRUE;
$db['ao_master']['stricton'] = FALSE;

$db['ao_website_master']['hostname'] = 'localhost';
$db['ao_website_master']['username'] = $serverUsername;
$db['ao_website_master']['password'] = $serverPassword;
$db['ao_website_master']['database'] = $serverPrefix.'ao_website_master';
$db['ao_website_master']['dbdriver'] = 'mysqli';
$db['ao_website_master']['dbprefix'] = 'aowm_';
$db['ao_website_master']['pconnect'] = TRUE;
$db['ao_website_master']['db_debug'] = FALSE;
$db['ao_website_master']['cache_on'] = FALSE;
$db['ao_website_master']['cachedir'] = '';
$db['ao_website_master']['char_set'] = 'utf8';
$db['ao_website_master']['dbcollat'] = 'utf8_general_ci';
$db['ao_website_master']['swap_pre'] = '';
$db['ao_website_master']['autoinit'] = TRUE;
$db['ao_website_master']['stricton'] = FALSE;


/* End of file database.php */
/* Location: ./application/config/database.php */
