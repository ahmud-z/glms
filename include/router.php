<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/home.php',
    '/login' => 'controllers/login.php',
    '/logout' => 'controllers/logout.php',
    '/register' => 'controllers/register.php',
    '/logout' => 'controllers/logout.php',
    '/whiteboard' => 'controllers/whiteboard.php',
    '/class-details' => 'controllers/class-details.php',
    '/create-class' => 'controllers/create-class.php',
    '/join-class' => 'controllers/join-class.php',
    '/create-post' => 'controllers/create-post.php',
];

function routeToControllers($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);

    require "views/{$code}.view.php";

    die();
}

routeToControllers($uri, $routes);