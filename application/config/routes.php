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
$route['privacy-policy'] = 'main/policy';
$route['default_controller'] = 'main';
$route['knowledge-detail/([a-z0-9]+)/([a-z0-9]+)'] = 'knowledge/detail/$1/$2';
$route['knowledge-trend'] = 'knowledge/trend';
$route['knowledge-video'] = 'knowledge/video';

$route['find-designer'] = 'designer';
$route['designer/list/([a-z0-9]+)'] = 'designer/data_list/$1';
$route['find-designer-list'] = 'designer/data_list';

$route['profile/([a-z0-9]+)/([a-z0-9]+)'] = 'designer/profile/$1/$2';

$route['find-producer'] = 'producer';
$route['find-producer-list'] = 'producer/data_list';
$route['producer/list/([a-z0-9]+)'] = 'producer/data_list/$1';

$route['find-supplier'] = 'supplier';
$route['find-supplier-list'] = 'supplier/data_list';
$route['supplier/list/([a-z0-9]+)'] = 'supplier/data_list/$1';

$route['news-detail'] = 'news/detail';
$route['news-event'] = 'news/event';
$route['news-exhibition'] = 'news/exhibition';
$route['news/([a-z0-9]+)/([a-z0-9]+)'] = 'news/detail/$1/$2';

$route['profile-pageme'] = 'profile/pageme';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
