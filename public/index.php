<?php

require_once '../app/functions.php';

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'home':
        echo (new HomeController)->index();
        break;
    case 'humor':
        echo (new HumorController)->index();
        break;
    case 'joke':
        echo (new HumorController)->viewJoke();
        break;
    case 'about-me':
        echo (new AboutController)->index();
        break;
    case 'login':
        echo (new UsersController)->login();
        break;
    case 'log-out':
        echo (new UsersController)->logOut();
        break;
    case 'wip-page':
        echo (new WipPageController)->index();
        break;
    case 'registration':
        echo (new UsersController)->registration();
        break;
    default:
        echo (new ErrorsController)->index();  
}





