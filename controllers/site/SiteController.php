<?php

namespace app\controllers\site;

use app\models\User;
use kilyte\Controller;
use kilyte\database\DbModel;

class SiteController extends Controller
{

    public function siteIndex()
    {
        $this->setLayout('site.main');
        return $this->render([], 'site.home');
    }

    public function contact()
    {
        $this->setLayout('site.main');
        return $this->render([], 'site.contact');
    }

    public function about()
    {
        $this->setLayout('site.main');
        return $this->render([], 'site.about');
    }

    public function testSql()
    {
        $users = DbModel::rawQuery("SELECT * FROM migrations WHERE created_at > '2022-09-03 02:22'");
        print_r($users);
    }
}
