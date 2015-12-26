<?php

class Registration{

    var $username ='', $password='',$confirmPassword='' ,$email = '', $phoneNum = '';

    public function _construct($username,$password,$cPassword,$email,$phoneNum){
        $this->username = $username;
        $this->password = $password;
        $this->confirmPassword = $cPassword;
        $this->email = $email;
        $this->phoneNum = $phoneNum;
    }

    public function checkPassword()
    {
        if ($this->password != $this->confirmPassword) {
            return "You entered passwords differently";
        }else{
            return "why the hell you lying";
        }
    }

    public function checkEmail()
    {
        if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return "This email address is considered valid.";
        }else{
            return "Re-enter your email";
        }
    }
}