<?php
require_once('../../models/User.class.php');
$name = $_POST['name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$c_pass = $_POST['c_password'];
$role = $_POST['role'];

if (isset($_POST['btn'])) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if ($pass == $c_pass) {
            $admin = new User($name, $last_name, $email, $pass, null, $role);
            var_dump($admin);
            $admin->ajouter();
            header("location:../../front/founder/login.php?resultat=added");
        } else {
            header("location:../../front/founder/sign-up.php?try=err");
        }
    } else {
        header("location:../../front/founder/login.php?resultat=err");
    }
}

exit();
