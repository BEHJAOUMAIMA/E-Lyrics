<?php
class Login extends Database{

    protected function getUser($email, $password){
        $stmt = $this->connect()->prepare('INSERT INTO user (email, password) VALUES (?,?,?);');
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        if(!$stmt->execute(array($email, $hashedPwd))){
            $stmt = null;
            header("location: ../register.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }
    
}