<?php
namespace blog\controllers;

class Register implements Controller{
    function bonjour(): void {
        echo 'Hello world';
    }
    function control(): void {
        echo 'Hello World!';
    }

    static function resolve(string $path): bool
    {
        return $path === 'user/register';
    }
}