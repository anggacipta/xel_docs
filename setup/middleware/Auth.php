<?php
namespace setup\middleware;
use setup\interface\appMiddleware;
use setup\system\http\MiddlewareHttp;

class Auth implements appMiddleware {
    public function before(): void
    {
        if (!isset($_SESSION['userid'])) {
            header('Location:/xel/admin/login');
            exit();
        }
    }
}