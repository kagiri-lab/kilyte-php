<?php


require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../core/vendor/autoload.php';

use app\routes\API;
use app\routes\Migrate;
use app\routes\Web;

use kilyte\Application;

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
$config = [
    'userClass' => \app\models\User::class,
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];

$app = new Application(dirname(__DIR__), $config);

// $app->on(Application::EVENT_BEFORE_REQUEST, function () {
//     // echo "Before request from second installation";
// });

$webroutes = new Web($app);
$apiroutes = new API($app);
$migration = new Migrate($app);

$app->run();
