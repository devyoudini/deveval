<?php declare(strict_types=1);
require '../configs/configs.php';
require UTILS_PATH . 'helper.php';
require AUTOLOAD;

$dotenv = Dotenv\Dotenv::createImmutable(ROOT);
$dotenv->load();
$dotenv->required(['DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASS']);

use App\Core\App;

const app = new App();
app->run();
