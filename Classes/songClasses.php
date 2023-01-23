<?php
include "database.php";

Class Song extends Database{
    public $id;
    public $title;
    public $artist;
    public $album;
    public $year;
    public $lyrics;
    public function __construct($Title = null, $Artist=null, $Album =null , $Year=null, $Lyrics=null)
    {
        $this->title = $Title;
        $this->artist = $Artist;
        $this->album = $Album;
        $this->year = $Year;
        $this->lyrics = $Lyrics;
    }
    function setId($id)
    {
        $this->id = $id;
    }
    public function addSong(){
        for ($i = 0; $i < count($this->title); $i++) {
            $add = "INSERT INTO `songs`(`titre`, `artiste`, `album`, `annee`, `paroles`) VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->getConnection()->prepare($add);
            $stmt->execute([$this->title[$i], $this->artist[$i], $this->album[$i], $this->year[$i], $this->lyrics[$i]]);
        }
    }
    public function readSong(){
        $read = "SELECT * FROM `songs`";
        $stmt = $this->getConnection()->prepare($read);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
    public function updateSong(){
        for ($i = 0; $i < count($this->title); $i++) {
            $update = "UPDATE `songs` SET `titre`=?, `artiste`=?, `album`=?, `annee`=?, `paroles`=? WHERE id = ?";
            $stmt = $this->getConnection()->prepare($update);
            $stmt->execute([$this->title[$i], $this->artist[$i], $this->album[$i], $this->year[$i], $this->lyrics[$i], $this->id]);
        }
    }
    public function deleteSong(){
        $delete = "DELETE FROM `songs` WHERE id = ?";
        $stmt = $this->getConnection()->prepare($delete);
        $stmt->execute([$this->id]);
    }

    public function statistics($column){
        switch($column){
            case "Admins":
                $sql = "SELECT COUNT(id) as `totalAdmins` FROM `user`";
                $stmt = $this->getConnection()->prepare($sql);
                $stmt->execute();
                $a = $stmt->fetch();
                return $a['totalAdmins'];

            case "Titles":
                $sql = "SELECT COUNT(titre) as `totalTitles` FROM `songs`";
                $stmt = $this->getConnection()->prepare($sql);
                $stmt->execute();
                $t = $stmt->fetch();
                return $t['totalTitles'];
            case "Artists":
                $sql = "SELECT COUNT(DISTINCT(artiste)) as totalArtists FROM `songs`";
                $stmt = $this->getConnection()->prepare($sql);
                $stmt->execute();
                $r = $stmt->fetch();
                return $r['totalArtists'];
        }
    }    
}



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