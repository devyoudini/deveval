<?php declare(strict_types=1);
namespace App\Controllers;

use Http\Request;
use Http\Response;

class HomeController {
    private $response;
    private $request;
    public function __construct(Response $response, Request $request) {
        $this->response = $response;
        $this->request = $request;
    }
    public function index(): void {
        echo "Home Page";
    }
}
