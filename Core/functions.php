<?php

use Core\Response;
use JetBrains\PhpStorm\NoReturn;

function urlIs($value): bool
{
    return $_SERVER['REQUEST_URI'] === $value;
}

#[NoReturn] function dd($value): void
{
    echo "<pre>";
    var_dump($value);
    echo "<pre>";
    die();
}

function authorize($condition, $status = Response::FORBIDDEN): void
{
    if (!$condition) {
        abort($status);
    }
}

function base_path($path): string
{
    return BASE_PATH . $path;
}

function view($path, $attributes = []): void
{
    extract($attributes);
    require base_path('views/' . $path);
}

function abort($status = 404): void
{
    http_response_code($status);
    require base_path("views/{$status}.php");
    die();
}