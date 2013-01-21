<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "default/home";
$route['404_override'] = '';
/*******************Country**********************/
$route['admin/country'] = 'country/admin/manager';
$route['admin/country/add'] = 'country/admin/manager/add';

/******************Visa***********************/
$route['admin/visa'] = 'visa/admin/manager';
$route['admin/visa/manager/search'] = 'visa/admin/manager/search';
$route['admin/visa/manager/default'] = 'visa/admin/manager/load_default';
$route['admin/visa/manager/updatedispatch'] = 'visa/admin/manager/updatedispatch';
$route['admin/visa/manager/updatestatus'] = 'visa/admin/manager/updatestatus';
$route['admin/visa/edit/(:any)'] =  'visa/admin/manager/edit/$1';
$route['admin/visa/del/(:any)'] =  'visa/admin/manager/del_visa/$1';
$route['admin/visa/update'] = 'visa/admin/manager/update_visa';
$route['visa/visaform'] = "visa/visa_form";
/****************Type Of Visa********************/
$route['admin/typeofvisa'] = 'typeofvisa/admin/manager';
$route['admin/typeofvisa/add'] = 'typeofvisa/admin/manager/add';

/***********Block Static*************/
$route["block"] = "blockstatic";
$route['admin/block'] = "blockstatic/admin/manager";
$route['admin/block/add'] = "blockstatic/admin/manager/add";
$route['admin/block/edit/(:num)'] = "blockstatic/admin/manager/edit/$1";
$route['admin/block/save'] = "blockstatic/admin/manager/save";
$route['admin/block/del/(:num)'] = "blockstatic/admin/manager/del/$1";



/* End of file routes.php */
/* Location: ./application/config/routes.php */