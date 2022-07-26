<?php

namespace app\routes;

use kilyte\Application;
use kilyte\database\Migration;

class Migrate{

    public function __construct(Application $application)
    {
        $this->register($application->router);
    }

    public function register($router){

        $router->get(Migration::class, [
            'tables' => 'apply'
        ]);
    }

}