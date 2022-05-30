<?php

namespace app\routes;

use app\controllers\AboutController;
use app\controllers\SiteController;
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
        $this->app->router->get('/', [SiteController::class, 'home']);
        $this->app->router->get('/register', [SiteController::class, 'register']);
        $this->app->router->post('/register', [SiteController::class, 'register']);
        $this->app->router->get('/login', [SiteController::class, 'login']);
        $this->app->router->get('/login/{id}', [SiteController::class, 'login']);
        $this->app->router->post('/login', [SiteController::class, 'login']);
        $this->app->router->get('/logout', [SiteController::class, 'logout']);
        $this->app->router->get('/contact', [SiteController::class, 'contact']);
        $this->app->router->get('/about', [AboutController::class, 'index']);
        $this->app->router->get('/profile', [SiteController::class, 'profile']);
        $this->app->router->get('/profile/{id:\d+}/{username}', [SiteController::class, 'login']);
    }
}
