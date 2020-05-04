<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['chars/create'] = 'chars/create'; 
$route['chars/update'] = 'chars/update'; 
$route['chars/(:any)'] = 'chars/view/$1';
$route['chars'] = 'chars/index';

$route['default_controller'] = 'pages/view';

$route['races'] = 'races/index';
$route['races/create'] = 'races/create';
$route['races/chars/(:any)'] = 'races/chars/$1';

$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['download/(:any)'] = "/filecontroller/download/$1";