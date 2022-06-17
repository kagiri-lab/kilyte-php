<?php

namespace app\controllers;

use kilyte\Controller;

class SiteController extends Controller
{

    public function siteIndex()
    {
        $this->setLayout('main');
        return $this->render([], 'main.home');
    }

    public function contact()
    {
        $this->setLayout('main');
        return $this->render([], 'main.contact');
    }

    public function about()
    {
        $this->setLayout('main');
        return $this->render([], 'main.about');
    }
}
