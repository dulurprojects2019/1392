<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['accounts/levels/levels-list'] 	= 'acc_levels/index';

$route['accounts/users/users-list'] 	= 'acc_users/index';
$route['accounts/users/add'] 			= 'acc_users/add';

$route['default_controller'] 			= 'dashboard';
$route['404_override'] 					= '';
$route['translate_uri_dashes'] 			= FALSE;
