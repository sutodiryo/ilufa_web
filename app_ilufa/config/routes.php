<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']    = 'guest';

$route['login']                 = 'auth/index';
$route['logout']                = 'auth/logout';
$route['karir']                 = 'lowongan/index';
// $route['karir']                 = 'lowongan/index';

$route['nextilufa2021']         = 'guest/nextilufa2021';
$route['NextiLuFA2021']         = 'guest/nextilufa2021';
$route['formsupplierilufa']     = 'guest/supplier';

$route['admin']                 = 'admin/dashboard';
$route['store']                 = 'store/dashboard';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;