<?php

namespace app\routes;

use app\controllers\AuthController;
use app\controllers\site\SiteController;
use app\controllers\UserController;
use kilyte\Application;

class Web
{

    private Application $app;

    public function __construct(Application $application)
    {
        $this->app = $application;
        $this->load();
    }

    public function load()
    {

        $this->app->router->get(SiteController::class, [
            '/' => 'siteIndex',
            '/contact' => 'contact',
            '/about' => 'about'
        ]);

        $this->app->router->post(AuthController::class, [
            '/login' => 'login',
            '/register' => 'register'
        ]);

        $this->app->router->get(AuthController::class, [
            '/login' => 'login',
            '/logout' => 'logout',
            '/register' => 'register'
        ]);

        $this->app->router->get(UserController::class, [
            '/' => 'userIndex',
            '/profile' => 'profile',
            '/profile/{username}' => 'profileWithId',
            '/all' => 'all_users',
            '/all/{id}' => 'edit'
        ], 'user', 'auth');

        $this->app->router->post(UserController::class, [
            '/all/{id}' => 'edit'
        ], 'user', 'auth');
    }
}
