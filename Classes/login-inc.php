<?php 
include 'AdminClasses.php';

if (isset($_POST['signIn'])) {
    $email = $_POST['Email'];
    $pass = $_POST['Password'];
   
}

$login = new Login($email, $pass);
$login->login();





