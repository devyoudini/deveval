<?php declare(strict_types=1);
namespace App\Controllers;

use Http\Request;
use Http\Response;

class AdminController extends BaseController {
    private Request $request;
    private Response $response;
    public function __construct(Request $request, Response $response) {
        $this->request = $request;
        $this->response = $response;
    }
    public function index(): void {
        echo "<h1>Admin Page</h1>";
        dd($this->response->getStatusCode());
    }
}
