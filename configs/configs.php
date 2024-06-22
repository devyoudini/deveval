<?php declare(strict_types=1);

error_reporting(E_ALL);

define("DS", DIRECTORY_SEPARATOR);
define("ROOT", dirname(__DIR__) . DS);
define("AUTOLOAD", ROOT . "vendor" . DS . "autoload.php");
define("APP_PATH", ROOT . "app" . DS);
define("CONTROLLERS_PATH", APP_PATH . "controllers" . DS);
define("UTILS_PATH", APP_PATH . "utils" . DS);
define("HELPER", UTILS_PATH . 'helper.php');
define("PUBLIC_PATH", ROOT . "public" . DS);
define('ROUTES', APP_PATH . 'routes/routes.php');

define("DEV", "development");
