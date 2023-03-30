<?php

define('BASE_PATH', __DIR__ . '/../');
require BASE_PATH . 'utils/functions.php';
define('CONTROLLERS_PATH', base_path('controllers/'));
define('STYLES_CONFIG', require base_path("config/styles.php"));
define('ENV_FILE', base_path('env.local.ini'));

require base_path('Response.php');
require base_path('Validator.php');
require base_path('database/Database.php');
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
require base_path('router.php');

routeToController($path);
