<?php
class Database
{
      private $hostName = 'localhost';
      private $userName = 'root';
      private $password = '';
      private $db = 'e-lyrics';
      private function connection()
      {
            $conn = new PDO('mysql:host=' . $this->hostName  . ';dbname=' . $this->db, $this->userName, $this->password);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            try {
                return $conn;
            } catch (PDOException $e) {
                  echo 'Something went wrong with your connection ...!' . $e->getMessage();
            }
      }
      public function getConnection(){
            return $this->connection();
      }
}
