<?php

class Registration{

    var $username ='', $password='',$confirmPassword='' ,$email = '', $phoneNum = '';

    public function _construct($username,$password,$cPassword,$email,$phoneNum){
        $this->username = $username;
        $this->password = $password;
        $this->confirmPassword = $cPassword;
        $this->email = $email;
        $this->phoneNum = $phoneNum;
        var_dump($_POST); exit;
    }

    public function checkPassword()
    {
        if ($this->password != $this->confirmPassword) {
            return "You entered passwords differently";
        }else{
            return null;
        }
    }

    public function checkEmail()
    {
        if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return "This email isnt valid please re-type.";
        }else{
            return "This email address is considered valid.";
        }
    }
}