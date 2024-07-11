<?php declare(strict_types=1);
namespace App\Controllers;

use App\Template\FrontendRenderer;
use Http\Request;
use Http\Response;

class HomeController extends BaseController {
    private Response $response;
    private Request $request;
    private FrontendRenderer $renderer;
    public function __construct(Response $response, Request $request, FrontendRenderer $renderer) {
        $this->response = $response;
        $this->request = $request;
        $this->renderer = $renderer;
    }
    public function index(): void {
        $this->show();
    }
    public function show(): void {
        $html = $this->renderer->render('home');
        $this->response->setContent($html);
    }
}
