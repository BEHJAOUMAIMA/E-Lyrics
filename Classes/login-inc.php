<?php 
include 'songClasses.php';

if (isset($_POST['signIn'])) {
    $email = $_POST['Email'];
    $pass = $_POST['Password'];
    $admin = new Login($email, $pass);
    $admin->login();
    $admin->getAdmin();
    header("location : ../dashboard.php");
    exit;
}

if (isset($_GET['logoutBtn'])){
    $logout = new Admins;
    $logout->logOut();
    header("location: ../login.php");
    exit;
}
