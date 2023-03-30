<?php
class User
{

  private $name;
  private $lastName;
  private $email;
  private $password;
  private $image;
  private $created_at;
  private $updated_at;
  private $role;


  function __construct($name, $lastName, $email, $password, $image, $role)
  {
    $this->name = $name;
    $this->lastName = $lastName;
    $this->email = addslashes($email);
    $this->password = md5($password);
    $this->image = $image;
    $this->created_at = date("Y-m-d H:i:s");
    $this->updated_at = date("Y-m-d H:i:s");
    $this->role = $role;
  }

  public function ajouter()
  {

    $path=$_SERVER["DOCUMENT_ROOT"]."/projet_web/config/connect_db.php";
    include($path);

    $req = $bdd->query("SELECT * FROM users WHERE email LIKE '$this->email'");
    $count = $req->rowCount();
    if ($count == 0) {
      //$type= intval($this->type);
      $req = $bdd->exec("INSERT INTO `users`(`name`,`last_name`, `email`, `password`, `image`, `created_at`, `updated_at`,`role`) VALUES 
    ('$this->name','$this->lastName','$this->email','$this->password','$this->image','$this->created_at','$this->created_at','$this->role')");
      echo 'oui';
      //return TRUE;
    } else {
      echo 'user already exist';
      //return FALSE;
    }
  }

  public function modifier()
  {

    include('../config/connect_db.php');

    //$id = isset($_GET['id_admin']) ? $_GET['id_admin'] : '';
    $id = $_GET['id'];

    $r = $bdd->exec("UPDATE `users` SET 
        `name`='$this->name',`last_name`='$this->lastName',
       `email`='$this->email',`password`='$this->password' 
       ,`image`='$this->image',`updated_at`='$this->updated_at'
       ,`role`='$this->role' WHERE id=$id");


    echo 'oui';
    //return TRUE;
  }

  public function supprimer()
  {
    include('../config/connect_db.php'); //.. maaneha okhrj mil dossier hedha w odkhel lil includ
    $req = $bdd->exec('DELETE FROM users WHERE id=\'' . $_GET['id'] . '\'');
    echo 'oui';
  }
}


//$instance = new admine($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);
