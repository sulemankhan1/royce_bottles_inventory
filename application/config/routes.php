<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Auth/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// auth
$route['login'] = 'Auth/login';
$route['forget_password'] = 'Auth/forget_password';
$route['logout'] = 'Auth/logout';

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
$route['edit_driver/(:num)'] = 'Driver/edit/$1';

//production
$route['productions'] = 'Production';
$route['add_production'] = 'Production/create';
$route['edit_production/(:num)'] = 'Production/edit/$1';

//other users
$route['other_users'] = 'OtherUsers';
$route['add_other_user'] = 'OtherUsers/create';
$route['edit_other_user/(:num)'] = 'OtherUsers/edit/$1';

//rights
$route['rights'] = 'Rights';
$route['edit_rights'] = 'Rights/edit';


//categories
$route['categories'] = 'Category';
$route['add_category'] = 'Category/create';
$route['edit_category/(:num)'] = 'Category/edit/$1';

//products
$route['products'] = 'Product';
$route['add_product'] = 'Product/create';
$route['edit_product/(:num)'] = 'Product/edit/$1';


//customers
$route['customers'] = 'Customer';
$route['add_customer'] = 'Customer/create';
$route['edit_customer/(:num)'] = 'Customer/edit/$1';

//profile
$route['edit_profile/(:num)'] = 'Profile/edit_profile/$1';
$route['view_profile/(:num)'] = 'Profile/view_profile/$1';


//inventory
$route['view_inventory'] = 'Inventory';
$route['add_stock'] = 'Inventory/add_stock';
$route['view_stock'] = 'Inventory/view_stock';
$route['stock_history'] = 'Inventory/stock_history';
$route['assign_to_driver'] = 'Inventory/assign_to_driver';
$route['return_stock'] = 'Inventory/return_stock';
$route['live_stock'] = 'Inventory/live_stock';
$route['logs'] = 'Inventory/logs';
$route['view_logs'] = 'Inventory/view_logs';

//sales
$route['sales'] = 'Sales';
$route['add_sale'] = 'Sales/create';
$route['view_sale'] = 'Sales/view_sale';
