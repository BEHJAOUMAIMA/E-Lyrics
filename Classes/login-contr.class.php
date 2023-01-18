<?php

class LoginContr extends Login{
    private $email;
    private $password;
    public function __construct($Email, $Password)
    {
        $this->email = $Email;
        $this->password = $Password;
    }

    public function loginUser()
    {
        if ($this->emptyInputs() == false) {
            header("location: ../login.php?error=emptyinput");
            exit();
        }

        $this->getUser($this->email, $this->password);
    }
    private function emptyInputs()
    {
        $result = true;
        if (empty($this->email) || empty($this->password)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}