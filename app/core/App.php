<?php declare(strict_types=1);
namespace App\Core;

use Http\HttpRequest;
use Http\HttpResponse;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

class App {
    public function run(): void {
        $this->__beforeRun();
        $this->__requestResponse();
    }
    private function __beforeRun(): void {
        $this->__registerErrorHandlers();
    }
    private function __registerErrorHandlers(): void {
        $whoops = new Run();
        if (Env::get("ENVIRONMENT") === DEV) {
            $whoops->pushHandler(new PrettyPageHandler());
        } else {
            $whoops->pushHandler(function ($e) {
                echo 'Todo: Friendly error page and send an email to the developer';
            });
        }
        $whoops->register();
    }
    private function __requestResponse() {
        $request = new HttpRequest($_GET, $_POST, $_COOKIE, $_FILES, $_SERVER);
        $response = new HttpResponse;

        foreach ($response->getHeaders() as $header) {
            header($header, false);
        }

        $response->setContent("Hello, World");

        echo $response->getContent();
    }
    private function __routing() {}
}
