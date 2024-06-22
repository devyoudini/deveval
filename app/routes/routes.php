<?php declare(strict_types=1);
// dont forget the forward slash at the beginning
const prefix = '/dev_eval_latest/public';
return [
    ['GET', '/', ['App\Controllers\HomeController', 'index']],
    ['GET', '/admin', ['App\Controllers\AdminController', 'index']],
    ['GET', '/login', ['App\Controllers\LoginController', 'index']],
];
