<?php
if (isset($_POST['registerBtn'])) {
    $admin = $_POST['UserName'];
    $emailAdd = $_POST['Email'];
    $passw = $_POST['Password'];
    $repeatPassw = $_POST['passwordConfirm'];
}
include 'AdminClasses.php';

$register = new Admins($admin, $emailAdd, $passw, $repeatPassw);
$register->registerAdmin();