<?php 
require_once('../../models/Session.class.php');
if (isset($_POST['btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = 0;
    $loginSession =  new Session($email,$password,$role);
    $loginSession->verifier();
}

?>