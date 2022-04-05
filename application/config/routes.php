<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Auth/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// auth
$route['login'] = 'Auth/login';
$route['forget_password'] = 'Auth/forget_password';

//dashbaord
$route['dashboard'] = 'Dashboard';

//Manage
//admin
$route['admins'] = 'Admin';
$route['add_admin'] = 'Admin/create';
$route['edit_admin/(:num)'] = 'Admin/edit/$1';

//driver
$route['drivers'] = 'Driver';
$route['add_driver'] = 'Driver/create';

//production
$route['productions'] = 'Production';
$route['add_production'] = 'Production/create';

//other users
$route['other_users'] = 'OtherUsers';
$route['add_other_user'] = 'OtherUsers/create';

//rights
$route['rights'] = 'Rights';
$route['edit_rights'] = 'Rights/edit';


//categories
$route['categories'] = 'Category';
$route['add_category'] = 'Category/create';

//products
$route['products'] = 'Product';
$route['add_product'] = 'Product/create';


//customers
$route['customers'] = 'Customer';
$route['add_customer'] = 'Customer/create';
