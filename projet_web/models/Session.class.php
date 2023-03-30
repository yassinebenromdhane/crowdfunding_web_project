<?php
class Session
{
    private $email;
    private $password;


    function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = md5($password);
    }


    public function verifier()
    {

        include('../config/connect_db.php');
        $req = $bdd->query(" SELECT * FROM users WHERE email = '$this->email' AND password = '$this->password'");
        $resultat = $req->fetch();

        if (!$resultat) {
            header('location:../front/admin/login.php?mess=error');
        } else {
            session_start();

            $_SESSION['id'] = $resultat['id'];
            $_SESSION['name'] = $resultat['name'];
            $_SESSION['lastName'] = $resultat['last_name'];
            $_SESSION['email'] = $resultat['email'];
            $_SESSION['password'] = $resultat['password'];
            $_SESSION['image'] = $resultat['image'];
            $_SESSION['created_at'] = $resultat['created_at'];
            $_SESSION['updated_at'] = $resultat['updated_at'];
            $_SESSION['role'] = $resultat['role'];



            header('location:../index.php');
        }
    }
}
