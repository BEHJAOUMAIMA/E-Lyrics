<?php 
if (isset($_POST["register"])) {

    // Saisir Data
    $username = $_POST["UserName"];
    $email = $_POST["Email"];
    $password = $_POST["Password"];
    $passRepeat = $_POST["passwordConfirm"];

    //Instanciation du Classe
    include "../Classes/dbh.classes.php";
    include "../Classes/register.classes.php";
    include "../Classes/register-contrl.class.php";
   
    $register = new RegisterContr($username, $email, $password,$passRepeat);


    $register->signupUser();

    header("location:../register.php?error=none");
}