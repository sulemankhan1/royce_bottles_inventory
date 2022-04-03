<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// auth
$route['login'] = 'Auth/login';
$route['forget_password'] = 'Auth/forget_password';

//dashbaord
$route['dashboard'] = 'Dashboard';

//Manage
$route['admins'] = 'Admin';
$route['add_admin'] = 'Admin/create';
