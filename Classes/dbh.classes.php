<?php 
class Database{
    protected function connect(){
        try {
            $user_name = "root";
            $pass_word = "";
            $dbh = new PDO('mysql:host=localhost;dbname=e-lyrics', $user_name, $pass_word);
            $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $dbh;
        } catch (PDOException $e) {
            print "Error! :" . $e->getMessage() . "<br/>";
            die();
        }
    }
}