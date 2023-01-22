<?php
require "database.php";

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
            $stmt->execute([$this->title[$i], $this->artist[$i], $this->artist[$i], $this->year[$i], $this->lyrics[$i]]);
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
                $sql = "SELECT COUNT(id) FROM `user`";
                break;
            case "Titles":
                $sql = "SELECT COUNT(titre) FROM `songs`";
                break;
            case "Artists":
                $sql = "SELECT COUNT(DISTINCT(artiste)) FROM `songs`";
                break;
        }
    }    
}