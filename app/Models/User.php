<?php

class User {
    public $email;
    public $first_name;
    public $last_name;

    public static function validate(array $data): array
    {
        $errors = [];
        if (!$data['email']) {
            $errors[] = 'e-mail is required..';
        }
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'e-mail must be valid email address..';
        }

        if (UsersRepository::getUserByEmail($data ['email'])) {
            $errors[] = 'hei.. email is already registered..';
        }
        if (!$data['first-name']) {
            $errors[] = 'first name is required..';
        }
        if (!$data['last-name']) {
            $errors[] = 'last name is required..';
        }
        if (!$data['password']) {
            $errors[] = 'password is required..';
        }
        if ($data['password'] != $data['password2'] ) {
            $errors[] = 'hei.. passwords must match..';
        }
        return $errors;
    }
}