<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['404_override'] = 'eror';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'admin';

$route['admin/edit_data'] = 'admin/edit_data';
$route['admin/data_petugas'] = 'admin/data_petugas';
