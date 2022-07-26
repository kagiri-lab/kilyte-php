<?php

namespace app\routes;

use app\controllers\AuthController;
use app\controllers\site\SiteController;
use app\controllers\UserController;
use kilyte\Application;

class Web
{
    
    public function __construct(Application $application)
    {
        $this->register($application->router);
    }

    public function register($router)
    {

        $router->get(SiteController::class, [
            '/' => 'siteIndex',
            '/contact' => 'contact',
            '/about' => 'about'
        ]);

        $router->post(AuthController::class, [
            '/login' => 'login',
            '/register' => 'register'
        ]);

        $router->get(AuthController::class, [
            '/login' => 'login',
            '/logout' => 'logout',
            '/register' => 'register'
        ]);

        $router->get(UserController::class, [
            '/' => 'userIndex',
            '/profile' => 'profile',
            '/profile/{username}' => 'profileWithId',
            '/all' => 'all_users',
            '/all/{id}' => 'edit'
        ], 'user', 'auth');

        $router->post(UserController::class, [
            '/all/{id}' => 'edit'
        ], 'user', 'auth');
    }
}
