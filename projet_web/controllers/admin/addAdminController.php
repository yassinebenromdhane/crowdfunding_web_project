<?php
require_once('../../models/User.class.php');
$name = $_POST['name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$c_pass = $_POST['c_password'];
$role = 0;

if (isset($_POST['btn'])) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if ($pass == $c_pass) {
            $admin = new User($name, $last_name, $email, $pass, null, $role);
            $admin->ajouter();
            header("location:../../front/admin/login.php?resultat=added");
        } else {
            header("location:../../front/admin/sign-up.php?try=err");
        }
    } else {
        header("location:../../front/admin/login.php?resultat=err");
    }
}

exit();
