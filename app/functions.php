<?php
session_start();

require_once '../app/Views/BaseView.php';
require_once '../app/Controllers/HomeController.php';
require_once '../app/Controllers/HumorController.php';
require_once '../app/Controllers/AboutController.php';
require_once '../app/Controllers/UsersController.php';
require_once '../app/Controllers/WipPageController.php';
require_once '../app/Controllers/ErrorsController.php';
require_once '../app/Repositories/HumorRepository.php';
require_once '../app/Repositories/UsersRepository.php';
require_once '../app/Repositories/DB.php';
require_once '../app/Models/Joke.php';
require_once '../app/Models/User.php';

function dd($data)
{
    echo '<pre>';
    var_dump($data);
    die;
}

$host = '127.0.0.1';
$db   = 'project';
$user = 'root';
$pass = '';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try {
    DB::$connection = new PDO($dsn, $user, $pass);
    DB::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int) $e->getCode());
}
