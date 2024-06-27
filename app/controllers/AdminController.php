<?php declare(strict_types=1);
namespace App\Controllers;

use Http\Request;
use Http\Response;

class AdminController extends BaseController {
    private Request $request;
    private Response $response;
    public function __contruct(Request $request, Response $response): void {
        $this->request = $request;
        $this->response = $response;
    }
    public function index(): void {
        echo "<h1>Admin Page</h1>";
        dd($this->response->getContent());
    }
}
