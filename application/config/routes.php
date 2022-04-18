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

// inventory //request_stock

$route['request_stock'] = 'Inventory/request_stock';
$route['save_driver_request'] = 'Inventory/save_driver_stock_request';


$route['pending_request'] = 'Inventory/pending_request';
$route['logs'] = 'Inventory/logs';
$route['view_logs'] = 'Inventory/view_logs';

//sales
$route['sales'] = 'Sales';
$route['add_sale'] = 'Sales/create';
$route['edit_sale/(:num)'] = 'Sales/edit/$1';
$route['view_sale'] = 'Sales/view_sale';

//call order
$route['call_order'] = 'Order';
$route['add_call_order'] = 'Order/create';
// $route['edit_sale/(:num)'] = 'Sales/edit/$1';
// $route['view_sale'] = 'Sales/view_sale';


// invoices
$route['invoices'] = 'Invoice';


//evidence
$route['evidence'] = 'Evidence';
$route['add_evidence'] = 'Evidence/create';
$route['edit_evidence/(:num)'] = 'Evidence/edit/$1';

//salesperson
$route['salesperson'] = 'Salesperson';
$route['add_salesperson'] = 'Salesperson/create';
$route['edit_salesperson/(:num)'] = 'Salesperson/edit/$1';


//payments
$route['payments'] = 'Payments';

//db_export
$route['db_export'] = 'DB_export';


//settings
$route['company_setting'] = 'Settings/company';
$route['email_setting'] = 'Settings/email';
