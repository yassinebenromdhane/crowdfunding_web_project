<?php
class Category
{

    private $name;
    private $desc;
    private $actif;


    function __construct($name, $desc , $actif)
    {
        $this->name = $name;
        $this->desc = $desc;
        $this->actif = $actif;
    }

    public function ajouter()
    {

        $path = $_SERVER["DOCUMENT_ROOT"] . "/projet_web/config/connect_db.php";
        include($path);

        //$type= intval($this->type);
        $req = $bdd->exec("INSERT INTO `categories` ( `name`,`description`,`actif`) VALUES ('$this->name','$this->desc','$this->actif')");

        // echo'oui';
        //return TRUE
    }

    public function modifier()
    {


        $path = $_SERVER["DOCUMENT_ROOT"] . "/projet_web/config/connect_db.php";
        include($path);

        //$id = isset($_GET['id_admin']) ? $_GET['id_admin'] : '';
        $id = $_GET['id'];

        $r = $bdd->exec("UPDATE `categories` SET `name`='$this->name',`description`='$this->desc' ,`actif`='$this->actif'  WHERE id=$id");


        // echo'oui';
        //return TRUE;
    }

    public function supprimer($id)
    {


        $path = $_SERVER["DOCUMENT_ROOT"] . "/projet_web/config/connect_db.php";
        include($path);
        $req = $bdd->exec('DELETE FROM categories WHERE id=\'' . $id . '\'');

        // echo'oui';	


    }
}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);
