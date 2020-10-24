<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = "home/home";
$route['scaffolding_trigger'] = "";

$route['^en/(.+)$'] = "$1";
$route['^am/(.+)$'] = "$1";
$route['^or/(.+)$'] = "$1";
$route['^tg/(.+)$'] = "$1";

// '/en' and '/fr' URIs -> use default controller

$route['^en$'] = $route['default_controller'];
$route['^am$'] = $route['default_controller'];
$route['^or$'] = $route['default_controller'];
$route['^tg$'] = $route['default_controller'];