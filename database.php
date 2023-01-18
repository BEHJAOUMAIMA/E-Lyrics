<?php
class Database
{
      private $hostName = 'localhost';
      private $userName = 'root';
      private $password = '';
      private $db = 'c';
      private function connection()
      {
            $conn = new PDO('mysql:host=' . $this->hostName  . ';dbname=' . $this->db, $this->userName, $this->password);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            try {
                return $conn;
            } catch (PDOException $e) {
                  echo 'Database Error: ' . $e->getMessage();
            }
      }
      public function getConnection(){
            return $this->connection();
      }
}