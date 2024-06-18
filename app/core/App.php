<?php declare(strict_types=1);
namespace App\Core;

use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

class App {
    public function run(): void {
        $this->__beforeRun();
        dd(getenv(local_only: true));
    }
    private function __beforeRun(): void {
        $this->__registerErrorHandlers();
    }

    private function __registerErrorHandlers(): void {
        $whoops = new Run();
        $whoops->pushHandler(new PrettyPageHandler());
        $whoops->register();
    }
}
