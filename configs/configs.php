<?php declare(strict_types=1);
define("DS", DIRECTORY_SEPARATOR);
define("ROOT", dirname(__DIR__) . DS);
define("AUTOLOAD", ROOT . "vendor" . DS . "autoload.php");
define("APP_PATH", ROOT . "app" . DS);
define("CONTROLLERS_PATH", APP_PATH . "controllers" . DS);
define("UTILS_PATH", APP_PATH . "utils" . DS);
define("PUBLIC_PATH", ROOT . "public" . DS);

define("DEV", "development");
