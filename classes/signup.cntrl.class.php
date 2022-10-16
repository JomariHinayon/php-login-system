<?php

class SignUpController{
    
    private $uname, $email, $password, $conPassword;

    public function __construct($uname, $email, $password, $conPassword) {
        $this->$uname = $uname;
        $this->email = $email;
        $this->password = $password;
        $this->conPassword = $conPassword;
    }

    // check if input are empty
    private function emptyInput() {
        $result;

        if(empty($this->$uname) || empty($this->$email) || empty($this->password) || empty($this->conPassword)) {
            $result = false;
        }else {
            $result = true;
        }

        return $result;
    }

    // check if the username is valid
    private function validUname() {
        $result;

        if(preg_match('/^[a-zA-Z0-9]*$', $this->uname)) {
            $result = true;
        }else {
            $result = false;
        }

        return $result;
    }

    // check if the email is valid
    private function validEmail() {
        $result;

        if(filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        }else {
            $result = false;
        }

        return $result;
    }

    // check if the password match
    private function passwordMatch() {
        $result;

        if($this->password == $this->conPassword) {
            $result = true;
        }else {
            $result = false;
        }

        return $result;
    }

}

?>