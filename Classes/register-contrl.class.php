<?php

class RegisterContr extends Register {
    private $username;
    private $email;
    private $password;
    private $passRepeat;
    public function __construct($Username, $Email, $Password, $PassRepeat)
    {
        $this->username = $Username;
        $this->email = $Email;
        $this->password = $Password;
        $this->passRepeat = $PassRepeat;
    }

    public function signupUser(){
        if($this->emptyInputs() == false){
            header("location: ../register.php?error=emptyinput");
            exit();
        }
        if($this->invalidUsername() == false){
            header("location: ../register.php?error=username");
            exit();
        }
        if($this->invalidEmail() == false){
            header("location: ../register.php?error=email");
            exit();
        }
        if($this->passwordsMatch() == false){
            header("location: ../register.php?error=passwordmatch");
            exit();
        }
        if($this->userTakenCheck() == false){
            header("location: ../register.php?error=useremailtaken");
            exit();
        }
        $this->setUser($this->username,$this->email,$this->password);
    }
    private function emptyInputs() {
        $result = true;
        if (empty($this->username) || empty($this->email) || empty($this->password) || empty($this->passRepeat) ) {
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function invalidUsername(){
        $result=true;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
            $result = false;

        }else{
            $result = true;
        }
        return $result; 
    }

    private function invalidEmail(){
        $result = true;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function passwordsMatch(){
        $result = true;
        if ($this->password !== $this->passRepeat ) {
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function userTakenCheck(){

        $result = true;
        if (!$this->checkUser($this->username,$this->email)) {
            $result = false;
        }else{
            $result = true;
        }
    }
}
