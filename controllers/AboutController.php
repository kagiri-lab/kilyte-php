<?php

namespace app\controllers;

use kilyte\Controller;

class AboutController extends Controller
{
    public function index()
    {
        return $this->render('about');
    }
}