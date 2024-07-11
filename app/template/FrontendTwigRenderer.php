<?php declare(strict_types=1);

namespace App\Template;

class FrontendTwigRenderer implements FrontendRenderer {
    private $renderer;
    private $menuReader;

    public function __construct(Renderer $renderer) {
        $this->renderer = $renderer;
    }

    public function render($template, $data = []): string {
        return $this->renderer->render($template, $data);
    }
}
