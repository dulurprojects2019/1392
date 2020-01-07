<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['settings/iconbar']					= 'iconbar/index';
$route['settings/iconbar/add']				= 'iconbar/add';
$route['settings/iconbar/edit/(:any)']		= 'iconbar/edit/$1';
$route['settings/iconbar/delete/(:any)']	= 'iconbar/delete/$1';

$route['login']								= 'auth_login/login';
$route['process']							= 'auth_login/process';
$route['logout']							= 'auth_login/logout';

$route['accounts/levels/levels-list'] 		= 'acc_levels/index';
$route['accounts/levels/add'] 				= 'acc_levels/add';
$route['accounts/levels/edit/(:any)']		= 'acc_levels/edit/$1';
$route['accounts/levels/delete/(:any)']		= 'acc_levels/delete/$1';

$route['accounts/users/users-list'] 		= 'acc_users/index';
$route['accounts/users/add'] 				= 'acc_users/add';
$route['accounts/users/edit/(:any)']		= 'acc_users/edit/$1';
$route['accounts/users/delete/(:any)']		= 'acc_users/delete/$1';

$route['default_controller'] 				= 'dashboard';
$route['404_override'] 						= '';
$route['translate_uri_dashes'] 				= FALSE;
