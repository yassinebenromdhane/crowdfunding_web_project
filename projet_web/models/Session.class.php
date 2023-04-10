<?php
class Session
{
    private $email;
    private $password;
    private $role;


    function __construct($email, $password,$role)
    {
        $this->email = $email;
        $this->password = md5($password);
        $this->role = $role;
    }


    public function verifier()
    {

        $path=$_SERVER["DOCUMENT_ROOT"]."/projet_web/config/connect_db.php";
        include($path);
        $req = $bdd->query(" SELECT * FROM users WHERE email = '$this->email' AND password = '$this->password'  
        AND role = '$this->role'");
        $resultat = $req->fetch();

        if (!$resultat) {
            header('location:../../front/admin/login.php?mess=404');
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
            // ob_flush(); var_dum p($_SESSION); echo ob_get_clean(); exit;
           
            if($resultat['role'] == 0){
                header('location:../../front/admin/index.php');
            }
            elseif ($resultat['role'] == 1) {
                header('location:../../front/founder/index.php');
            }
            else{
                header('location:../../front/investor/index.php');
            }
        }
    }
}
