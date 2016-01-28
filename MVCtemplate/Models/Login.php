<?php

class Login{

    public function checkCredentials(array $data){

        if (empty($data['email']) || empty($data['password']) || empty($data['password2']) || empty($data['phone'])) {
            return 'Please fill in all the fields';
        }

        // check email
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            return 'Invalid email address';
        }
        return null;

    }

}
