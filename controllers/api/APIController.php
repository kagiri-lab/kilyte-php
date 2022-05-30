<?php

namespace app\controllers\api;

use kilyte\Controller;
use kilyte\Request;
use kilyte\Response;

class APIController extends Controller
{

    public function index(Request $request, Response $response)
    {
        $this->renderAPI(['KiLyte Framework']);
    }
}
