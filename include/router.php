<?php

$path = parse_url($_SERVER['REQUEST_URI'])['path'];

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
    '/edit-post' => 'controllers/edit-post.php',
    '/delete-post' => 'controllers/delete-post.php',
];

function routeToControllers($path, $routes)
{
    if (array_key_exists($path, $routes)) {
        require $routes[$path];
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

routeToControllers($path, $routes);