<?php

class Admins extends Database{
    public $username;
    public $email;
    public $pass;
    public $passRepeat;
    public function __construct($Username = null, $Email = null, $Password = null, $PassRepeat = null)
    {
        $this->username = $Username;
        $this->email = $Email;
        $this->pass = $Password;
        $this->passRepeat = $PassRepeat;
    }
    public function registerAdmin(){
        $sql = "SELECT * FROM user WHERE email = ?";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute([$this->email]);
        $res = $stmt->fetch();

        //validation
        if (empty($this->username) || empty($this->email) || empty($this->pass) || empty($this->passRepeat)) {
            $_SESSION['message'] = "Please fill all required fields !!";
            header("location: ../register.php?error=emptyinput");
        }
        if(!preg_match("/^[a-zA-Z0-9 ]*$/", $this->username)){
            $_SESSION['message'] = "Please enter a valid Name !!";
            header("location: ../register.php?error=username");
        }
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $_SESSION['message'] = "Please enter a valid email !!";
            header("location: ../register.php?error=email");
        }
        if($this->pass !== $this->passRepeat){
            $_SESSION['message'] = "Passwords dosn't Match !!";
            header("location: ../register.php?error=passwordmatch");

        }
        if($res['id']== ''){
            
            $insert = "INSERT INTO `user` (`username`, `email`, `password`) VALUES(?,?,?)";
            $stmt = $this->getConnection()->prepare($insert);
            $stmt->execute([$this->username, $this->email, $this->pass]);
            header('location:../login.php');
            $_SESSION['message1'] = "Registration has been added successfully !";
        } else {
            $_SESSION['message'] = "Email already Taken!!";
            header('location:../register.php?error=seremailtaken');
        }
    }
    public function logOut(){  
        session_destroy();
        $_SESSION['message'] = "You have been successfully logged out !!";
        header("Location: ../login.php");
    }
}
class Login extends Database{
    private $email;
    private $passw;
    public function __construct($email = null, $psw = null)
    {
        $this->email = $email;
        $this->passw = $psw;
    }
    public function login(){
        if($this->emptyInputs()==false){
            header("location: ../login.php?error=empyinput");
            exit();
        }
    }
    public function emptyInputs(){
        $res=false;
        if(empty($this->email) || empty($this->passw)  ){
            $res = false;
        }else{
            $res = true;
        }
        return $res;
    }
    public function getAdmin(){
        $sql = "SELECT * FROM `user` WHERE `email` = ?";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute([$this->email]);
        if($stmt->rowCount() == 0){
            $stmt =0;
            header( "location: ../login.php?error=usernotfound");
            exit();
        }
        $result = $stmt->fetchAll();
       
        
        if($this->passw !== $result[0]['password']){

            header("location: ../login.php?error=wrongpassword");
            exit();
        }elseif($this->passw == $result[0]['password']){
            $_SESSION["admin"] = $result[0]["username"];
            header("location: ../dashboard.php");
            exit();
        }
    }

}