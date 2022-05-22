<?php

namespace app\controllers;

use kilyte\core\Controller;

class AboutController extends Controller
{
    public function index()
    {
        return $this->render('about');
    }
}