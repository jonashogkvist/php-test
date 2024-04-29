<?php

$router->get('/', 'controllers/index.php');
$router->get('/contact', 'controllers/contact.php');
$router->get('/about', 'controllers/about.php');

$router->get('/notes', 'controllers/notes/index.php');
$router->get('/note', 'controllers/notes/show.php');
$router->get('/notes/create', 'controllers/notes/create.php');

// $router->delete('/', 'controllers/notes/destroy.php');