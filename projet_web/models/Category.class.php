<?php
class Category
{

    private $name;
    private $desc;

    function __construct($name, $desc)
    {
        $this->name = $name;
        $this->desc = $desc;
    }

    public function ajouter()
    {

        $path = $_SERVER["DOCUMENT_ROOT"] . "/projet_web/config/connect_db.php";
        include($path);

        //$type= intval($this->type);
        $req = $bdd->exec("INSERT INTO `categories` ( `name`,`description`) VALUES ('$this->name','$this->desc')");

        // echo'oui';
        //return TRUE
    }

    public function modifier()
    {


        $path = $_SERVER["DOCUMENT_ROOT"] . "/projet_web/config/connect_db.php";
        include($path);

        //$id = isset($_GET['id_admin']) ? $_GET['id_admin'] : '';
        $id = $_GET['id'];

        $r = $bdd->exec("UPDATE `categories` SET `name`='$this->name',`description`='$this->desc'  WHERE id=$id");


        // echo'oui';
        //return TRUE;
    }

    public function supprimer()
    {


        $path = $_SERVER["DOCUMENT_ROOT"] . "/projet_web/config/connect_db.php";
        include($path);
        $req = $bdd->exec('DELETE FROM categories WHERE id=\'' . $_GET['id'] . '\'');

        // echo'oui';	


    }
}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);
