<?php

use JetBrains\PhpStorm\NoReturn;



#[NoReturn] function abort($code = 404): void
{
    http_response_code($code);
    require base_path("views/{$code}.php");
    die();
}

function routeToController($uri, $routes): void
{
    if (array_key_exists($uri, $routes)) {
        require base_path($routes[$uri]);
    } else {
        abort();
    }
}

$routes = require base_path("routes.php");
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
routeToController($uri, $routes);
