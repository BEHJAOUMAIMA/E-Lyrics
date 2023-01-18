<?php
class Register extends Database{

    protected function setUser($username, $email, $password){
        $stmt = $this->connect()->prepare('INSERT INTO user (username, email, password) VALUES (?,?,?);');
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        if(!$stmt->execute(array($username, $email, $hashedPwd))){
            $stmt = null;
            header("location: ../register.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }
    protected function checkUser($username, $email){
        $stmt = $this->connect()->prepare('SELECT username FROM user WHERE username= ? OR email = ?');
        if (!$stmt->execute(array($username, $email))) {
            $stmt = null;
            header("location: ../register.php?error=stmt=failed");
            exit();
        }
        $resultCheck = true;
        if ($stmt->rowCount()>0) {
            $resultCheck = false;
        }else{
            $resultCheck = true;
        }
        return $resultCheck;
    }
}