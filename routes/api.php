<?php

namespace app\routes;

use app\controllers\api\APIController;
use kilyte\Application;

class API
{

    private Application $app;

    public function __construct(Application $application)
    {
        $this->app = $application;
        $this->load();
    }

    private function load()
    {
        $this->app->router->get('api', [APIController::class, 'index']);
    }
}
