<?php

namespace app\routes;

use app\controllers\dashboard\AuthController;
use app\controllers\dashboard\DashboardController;
use kilyte\Application;

class Dashboard{

    public function __construct(Application $application)
    {
        $this->route($application->router);
    }

    public function route($route)
    {
        $route->get(DashboardController::class, [
            '/' => 'index',
        ], 'admin', 'auth');

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
    }
}