<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'auth';
$route['404_override'] = '';

$route['Dashboard'] = 'c_admin/admin/dashboard_vadmin';
$route['Login'] = 'Auth/login';

//guest
$route['Rekap_Admin'] = 'C_Guest/Admin';
$route['Rekap_Aplikasi'] = 'C_Guest/Aplikasi';
$route['Rekap_Email'] = 'C_Guest/Email';
$route['Rekap_Website'] = 'C_Guest/Website';

//admin
$route['Admin'] = 'c_admin/Admin';
$route['Aplikasi'] = 'c_admin/Aplikasi';
$route['Email'] = 'c_admin/Email';
$route['Website'] = 'c_admin/Website';

//input
$route['Tambah_Admin'] = 'C_Admin/Admin/tambah_admin';
$route['Tambah_Aplikasi'] = 'C_Admin/Aplikasi/tambah_aplikasi';
$route['Tambah_Email'] = 'C_Admin/Email/tambah_email';
$route['Tambah_Website'] = 'C_Admin/Website/tambah_website';

//edit
$route['Edit_Admin/(:any)'] = 'C_Admin/admin/ubah_admin/';
$route['Edit_Aplikasi/(:any)'] = 'C_Admin/aplikasi/ubah_aplikasi/';
$route['Edit_Email/(:any)'] = 'C_Admin/email/ubah_email/';
$route['Edit_Website/(:any)'] = 'C_Admin/website/ubah_website/';


$route['translate_uri_dashes'] = FALSE;
