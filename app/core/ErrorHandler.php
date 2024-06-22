<?php declare(strict_types=1);
namespace App\Core;

class ErrorHandler {
    private $handler;
    public function __construct() {
        $this->handler = new \Whoops\Run;
        if (Env::get('ENVIRONMENT') === DEV) {
            $this->handler->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        } else {
            $this->handler->pushHandler(function ($e) {
                echo 'Todo: Friendly error page and send an email to the developer';
            });
        }
    }
    public function register(): void {
        $this->handler->register();
    }
}
