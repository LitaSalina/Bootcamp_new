<?php

class UsersController
{
    public function login(): string
    {
        $errors = [];
        if ($_POST) {
            $user = UsersRepository::getUserByEmailAndPassword($_POST['email'], $_POST['password']);
            if ($user) {
                $_SESSION['loggedIn'] = true;
                $_SESSION['first_name'] = $user->first_name;
                $_SESSION['last_name'] = $user->last_name;
                header('Location: ?page=wip-page');
            } else {
                $errors[] = 'Credentials are invalid';
            }
        }

        return BaseView::generate('Users', 'login', ['errors' => $errors]);
    }
    
    public function registration(): string
    {
        $errors = [];
        if ($_POST) {
            $errors = User::validate($_POST);
            if (!$errors) {
                UsersRepository::createUser($_POST);
                header('Location: ?page=login');
            }

        }
        return BaseView::generate('Users', 'registration', ['errors' => $errors]);
    }

    public function logOut(): void
    {
        session_destroy();
        header('Location: ?page=login');
    }

}