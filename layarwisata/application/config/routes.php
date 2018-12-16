<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['destinations/create'] = 'destinations/create';
$route['destinations/update'] = 'destinations/update';
$route['destinations/index'] = 'destinations/index';
$route['destinations/(:any)'] = 'destinations/view/$1';
$route['destinations'] = 'destinations/index';
$route['request'] = 'request/create';
$route['default_controller'] = 'pages/view';

$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
