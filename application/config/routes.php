<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

/* AUTHENTICATION ROUTES */
$route['auth/login'] = 'auth/login';
$route['auth/logout'] = 'auth/logout';
$route['auth/register'] = 'auth/register';

//home.
$route['admin'] = 'dashboard/home';

//users.
$route['admin/users'] = 'users/index';
$route['admin/users/edit/(:any)'] = 'users/update/$1';
$route['admin/users/delete/(:any)'] = 'users/delete/$1';

//categories.
$route['admin/categories'] = 'categories/index';
$route['admin/categories/new'] = 'categories/create';
$route['admin/categories/edit/(:any)'] = 'categories/update/$1';
$route['admin/categories/delete/(:any)'] = 'categories/delete/$1';

//products.
$route['admin/products'] = 'products/index';
$route['admin/products/new'] = 'products/create';
$route['admin/products/edit/(:any)'] = 'products/edit/$1';
$route['admin/products/delete/(:any)'] = 'products/delete/$1';

$route['admin/messages'] = 'messages/index';
$route['admin/messages/(:any)'] = 'messages/view/$1';
$route['admin/messages/delete/(:any)'] = 'messages/delete/$1';

///productos/category/(:any)
$route['productos/categoria/(:any)/(:any)'] = 'pages/view_category/$1/$2';

$route['productos/categoria/(:any)'] = 'pages/view_category/$1';

//producto/(:any)
$route['producto/(:any)'] = 'pages/view_product/$1';

$route['productos'] = 'pages/view_products';

/* PAGES ROUTES */
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

