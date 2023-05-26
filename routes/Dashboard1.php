<?php

namespace app\routes;

use app\controllers\dashboard\AuthController;
use app\controllers\dashboard\DashboardController;
use kilyte\Application;

class Dashboard
{

    public function __construct(Application $application)
    {
        $this->register($application->router);
    }

    public function register($route)
    {
        $route->get(DashboardController::class, [
            '/' => 'index',
            '/uploader' => 'uploadTest'
        ], 'admin');

        $route->get(AuthController::class, [
            '/login' => 'login',
            '/register' => 'register',
            '/reset-password' => 'resetPassword',
            '/forgot-password' => 'forgotPassword',
            '/confirm-email' => 'confirmEmail',
            '/logout' => 'Logout'
        ], 'admin');

        $route->post(AuthController::class, [
            '/login' => 'login',
            '/register' => 'register',
            '/reset-password' => 'resetPassword',
            '/forgot-password' => 'forgotPassword',
            '/confirm-email' => 'confirmEmail',
            '/logout' => 'Logout'
        ], 'admin');

        $route->post(DashboardController::class, [
            '/uploader' => 'uploadTest'
        ], 'admin');
    }
}
