<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']    = 'guest';
$route['login']                 = 'auth/login';
$route['logout']                = 'auth/logout';
$route['karir']                 = 'karir/index';
$route['2']                     = 'guest/homepage2';
$route['admin']                 = 'admin/dashboard';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;
