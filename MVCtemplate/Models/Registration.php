<?php

require_once 'Model.php';

class Registration extends Model {

    public function validate(array $data)
    {
        if (!isset($data['email'], $data['password'], $data['password2'], $data['phone'], $data['address'])) {
            return 'Not all field values set';
        }

        // check if fields empty
        if (empty($data['email']) || empty($data['password']) || empty($data['password2']) || empty($data['phone']
                || empty('address'))) {
            return 'Please fill in all the fields';
        }

        // check email
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            return 'Invalid email address';
        }

        // Make sure phone number is numeric
        if (!is_numeric($data['phone'])) {
            return 'Phone number must be a numeric value';
        }

        // password length
        if (strlen($data['password']) < 5) {
            return 'Password must be at least 5 characters';
        }

        // check password conf
        if ($data['password'] !== $data['password2']) {
            return 'The password and password confirmation do not match';
        }

        return true;
    }

    /**
    public function insertMember()
    {
        $connection = new Model();
        $db = $this->pdo->i
        $sql = "INSERT INTO members (email,password,address,number) VALUES ('$_POST[email]', '$_POST[password]','$_POST[address]','$_POST[number]')";

        if($this->pdo->query($connection, $sql)){
            echo "Records added successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

    }
    */
}