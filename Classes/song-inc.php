<?php
include "songClasses.php";
if (isset($_POST["saveBtn"])){
    $title = $_POST["title"];
    $artist = $_POST["artist"];
    $album = $_POST["album"];
    $year = $_POST["year"];
    $lyrics = $_POST["lyrics"];
    $songs = new Song($title,$artist,$album,$year, $lyrics);
    $songs->addSong();
    header("location: ../dashboard.php");
}

if(isset($_POST["updateBtn"])){
    $id = $_POST["Id"];
    $title = $_POST["title"];
    $artist = $_POST["artist"];
    $album = $_POST["album"];
    $year = $_POST["year"];
    $lyrics = $_POST["lyrics"];
    $chansons = new Song($title, $artist, $album, $year, $lyrics);
    $chansons->setId($id);
    $chansons->updateSong();
}
if(isset($_POST["deleteBtn"])){
    $id = $_POST["Id"];
    $title = $_POST["title"];
    $artist = $_POST["artist"];
    $album = $_POST["album"];
    $year = $_POST["year"];
    $lyrics = $_POST["lyrics"];
    $melody = new Song($title, $artist, $album, $year, $lyrics);
    $melody->setId($id);
    $melody->deleteSong();
}