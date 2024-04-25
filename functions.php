<?php

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
