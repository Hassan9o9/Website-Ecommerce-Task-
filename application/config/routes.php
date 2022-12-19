<?php
defined('BASEPATH') or exit('No direct script access allowed');

//Front End Route
$route['default_controller']   = 'web';
$route['404_override']         = 'web/error';
$route['translate_uri_dashes'] = false;

//Web Route
$route['product']             = 'web/product';
$route['single/(:num)']       = 'web/single/$1';
$route['contact']             = 'web/contact';
$route['cart']                = 'web/cart';
$route['save/cart']           = 'web/save_cart';
$route['update/cart']         = 'web/update_cart';
$route['remove/cart']         = 'web/remove_cart';
$route['user_form']           = 'web/user_form';
$route['get/category/(:num)'] = 'web/category_post/$1';

$route['search']              = 'web/search';
$route['customer/register']   = 'web/customer_register';
$route['customer/login']      = 'web/customer_login';
$route['customer/logout']     = 'web/logout';
$route['customer/logincheck'] = 'web/customer_logincheck';
$route['customer/save']       = 'web/customer_save';
$route['register/success']    = 'web/register_success';

//Admin Panel Route
$route['dashboard']            = 'admin/index';
$route['manage/order']         = 'manageorder/manage_order';
$route['order/details/(:num)'] = 'manageorder/order_details/$1';

//Category  Route List
$route['add/category']                = 'category/add_category';
$route['manage/category']             = 'category/manage_category';
$route['save/category']               = 'category/save_category';
$route['delete/category/(:num)']      = 'category/delete_category/$1';
$route['edit/category/(:num)']        = 'category/edit_category/$1';
$route['update/category/(:num)']      = 'category/update_category/$1';
$route['published/category/(:num)']   = 'category/published_category/$1';
$route['unpublished/category/(:num)'] = 'category/unpublished_category/$1';

//Customer  Route List
$route['add/customer']                = 'customer/add_customer';
$route['manage/customer']             = 'customer/manage_customer';
$route['save/customer']               = 'customer/save_customer';
$route['delete/customer/(:num)']      = 'customer/delete_customer/$1';
$route['edit/customer/(:num)']        = 'customer/edit_customer/$1';
$route['update/customer/(:num)']      = 'customer/update_customer/$1';


//Brand  Route List
$route['add/brand']                = 'brand/add_brand';
$route['manage/brand']             = 'brand/manage_brand';
$route['save/brand']               = 'brand/save_brand';
$route['delete/brand/(:num)']      = 'brand/delete_brand/$1';
$route['edit/brand/(:num)']        = 'brand/edit_brand/$1';
$route['update/brand/(:num)']      = 'brand/update_brand/$1';
$route['published/brand/(:num)']   = 'brand/published_brand/$1';
$route['unpublished/brand/(:num)'] = 'brand/unpublished_brand/$1';

//Post Route List
$route['add/product']                = 'product/add_product';
$route['manage/product']             = 'product/manage_product';
$route['save/product']               = 'product/save_product';
$route['delete/product/(:num)']      = 'product/delete_product/$1';
$route['edit/product/(:num)']        = 'product/edit_product/$1';
$route['update/product/(:num)']      = 'product/update_product/$1';
$route['published/product/(:num)']   = 'product/published_product/$1';
$route['unpublished/product/(:num)'] = 'product/unpublished_product/$1';

//Admin login
$route['admin']             = 'adminlogin';
$route['admin_login_check'] = 'adminlogin/admin_login_check';
$route['logout']            = 'admin/logout';
