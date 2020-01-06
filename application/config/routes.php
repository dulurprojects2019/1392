<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['accounts/levels/levels-list'] 	= 'acc_levels/index';
$route['accounts/levels/add'] 			= 'acc_levels/add';
$route['accounts/levels/edit/(:any)']	= 'acc_levels/edit/$1';
$route['accounts/levels/delete/(:any)']	= 'acc_levels/delete/$1';

$route['accounts/users/users-list'] 	= 'acc_users/index';
$route['accounts/users/add'] 			= 'acc_users/add';

$route['default_controller'] 			= 'dashboard';
$route['404_override'] 					= '';
$route['translate_uri_dashes'] 			= FALSE;
