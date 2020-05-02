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
$route['default_controller'] = 'home_c/home_v';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


/*
 * [API]
 */
$route['api/auth/signin']['post'] = 'auth_c/signin';
$route['api/auth/signup']['post'] = 'auth_c/signup';

$route['api/blind_test']['get'] = 'blindTest_c/getTest';
$route['api/blind_test/submit']['post'] = 'blindTest_c/submit';
$route['api/blind_test/results']['get'] = 'blindTest_c/getBlindTestResults';
$route['api/blind_test/result/(:any)']['get'] = 'blindTest_c/getBlindTestResultById/$1';

$route['api/checkup/submit']['post'] = 'checkup_c/submit';
$route['api/checkup/results']['get'] = 'checkup_c/getCheckups';
$route['api/checkup/result/(:any)']['delete'] = 'checkup_c/deleteById/$1';
/*
 * [END - API]
 */

/*
 * [VIEW]
 */
$route['signin']['get'] = 'auth_c/signin_v';
$route['signup']['get'] = 'auth_c/signup_v';

$route['blind_test']['get'] = 'blindTest_c/blindTest_v';
$route['blind_test/result/(:any)']['get'] = 'blindTest_c/result_v/$1';
$route['blind_test/results']['get'] = 'blindTest_c/results_v';

$route['checkup/results']['get'] = 'checkup_c/results_v';
$route['checkup']['get'] = 'checkup_c/checkup_v';
/*
 * [END - VIEW]
 */