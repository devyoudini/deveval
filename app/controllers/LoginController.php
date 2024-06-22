<?php declare(strict_types=1);
namespace App\Controllers;

use Http\Request;
use Http\Response;

class LoginController {
    private $request;
    private $response;
    public function __construct(Request $request, Response $response) {
        $this->request = $request;
        $this->response = $response;
    }
    public function index(): void {
        echo "Login Page";
    }
}
