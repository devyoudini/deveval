<?php declare(strict_types=1);

$injector = new \Auryn\Injector;

$injector->alias('Http\Request', 'Http\HttpRequest');
$injector->share('Http\HttpRequest');
$injector->define('Http\HttpRequest', [
    ':get'     => $_GET,
    ':post'    => $_POST,
    ':cookies' => $_COOKIE,
    ':files'   => $_FILES,
    ':server'  => $_SERVER,
]);

$injector->alias('Http\Response', 'Http\HttpResponse');
$injector->share('Http\HttpResponse');

$injector->define('Mustache_Engine', [
    'loader' => new Mustache_Loader_FilesystemLoader(VIEWS_PATH, [
        'options' => [
            'extension' => '.html'
        ]
    ])
]);

$injector->delegate('Twig\Environment', function () use ($injector) {
    $loader = new Twig\Loader\FilesystemLoader(VIEWS_PATH);
    $twig = new Twig\Environment($loader);
    return $twig;
});

return $injector;
