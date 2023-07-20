<?php

namespace app\controllers\dashboard;

use kilyte\Application;
use kilyte\Controller;
use kilyte\Http\Request;
use kilyte\http\uploader\ImageUploader;

class DashboardController extends Controller
{
    public function index()
    {
        $this->setLayout('dashboard.main');
        return $this->render([], 'dashboard.index');
    }

    public function uploadTest(Request $request)
    {
        $this->setLayout('dashboard.main');
        if ($request->isPost()) {
            // $upload = ImageUploader::execute();
            // print_r($upload);
            // // if (!$upload->check()) {
            // //     print_r($upload->get_error());
            // // } else {
            // //     print_r($upload->get_name());
            // // }
        }
        return $this->render([], 'dashboard.uploader');
    }
}
