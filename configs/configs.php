<?php declare(strict_types=1);

error_reporting(E_ALL);

// paths
define("DS", DIRECTORY_SEPARATOR);
define("ROOT", dirname(__DIR__) . DS);

// app paths
define("APP_PATH", ROOT . "app" . DS);
define("CONTROLLERS_PATH", APP_PATH . "controllers" . DS);
define("CORE_PATH", APP_PATH . "core" . DS);
define("VIEWS_PATH", APP_PATH . "views" . DS);
define("UTILS_PATH", APP_PATH . "utils" . DS);
define("ASSETS_PATH", APP_PATH . "assets" . DS);

// app path files
define("HELPER", UTILS_PATH . 'helper.php');
define('ROUTES', APP_PATH . 'routes/routes.php');

// autoload
define("AUTOLOAD", ROOT . "vendor" . DS . "autoload.php");

// public
define("PUBLIC_PATH", ROOT . "public" . DS);

// constants variables
define("DEV", "development");
