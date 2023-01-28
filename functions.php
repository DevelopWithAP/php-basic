<?php
function urlIs(string $value): bool
{
    return $_SERVER["REQUEST_URI"] === $value;
} 

function dd(string $value): void
{
    echo '<pre>' . var_dump($value) . '</pre>';
    die();
}