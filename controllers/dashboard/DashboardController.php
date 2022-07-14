<?php

namespace app\controllers\dashboard;

use kilyte\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $this->setLayout('dashboard.main');
        return $this->render([], 'dashboard.index');
    }
}
