<?php

namespace app\routes;

use app\controllers\api\APIController;
use app\controllers\AuthController;
use app\controllers\SiteController;
use app\controllers\UserController;
use kilyte\Application;
use UserAPIController;

class API
{
    public function __construct(Application $application)
    {
        $this->register($application->router);
    }

    private function register($router)
    {

        $router->get(AuthController::class, [
            '/' => 'index',
            'users/list/{page}' => 'listAll'
        ], 'api/');

        $router->post(AuthController::class, [
            '/' => 'index',
            'login' => 'login',
            'register' => 'register',
            'token/generate' => 'generateToken'
        ], 'api/');


        $router->get(UserController::class, [
            'profile' => 'profile',
            'profile/{username}' => 'profileWithId',
            'hey' => 'hey'
        ], 'api/user/');
    }
}
