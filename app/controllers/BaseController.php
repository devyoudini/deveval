<?php declare(strict_types=1);
namespace App\Controllers;

use Http\Request;
use Http\Response;

interface IController {
    public function run(): void;
    public function render();
}

class BaseController implements IController {
    public function run(): void {}
    private function __beforeRun(): void {}
    private function __afterRun(): void {}
    public function render() {}
}
