<?php
class User
{

  private $title;
  private $desc;
  private $object_plafon;
  private $objectif;
  private $status;
  private $begin_date;
  private $end_date;
  private $validated;
  private $cat_id;
  private $owner_id;
  


  function __construct($title, $desc, $object_plafon, $objectif, $status, $begin_date,$end_date,$validated,$cat_id,$owner_id)
  {
    $this->title = $title;
    $this->desc = $desc;
    $this->object_plafon = $object_plafon;
    $this->objectif = $objectif;
    $this->status = $status;
    $this->begin_date = $begin_date;
    $this->end_date = $end_date;
    $this->validated = $validated;
    $this->cat_id = $cat_id;
    $this->owner_id = $owner_id;
  }

  public function ajouter()
  {

    $path=$_SERVER["DOCUMENT_ROOT"]."/projet_web/config/connect_db.php";
    include($path);
    $req = $bdd->exec ("INSERT INTO `projects`(`title`, `description`, `objectif_plafon`, `objectif`, 
    `status`, `begin_date`, `end_date`, `validated`, `cat_id`, `owner_id`) VALUES 
    ('$this->title','$this->desc','$this->object_plafon','$this->objectif','$this->status','$this->begin_date',
    '$this->end_date','$this->validated','$this->cat_id','$this->owner_id')");
  }

  public function modifier()
  {

    $path=$_SERVER["DOCUMENT_ROOT"]."/projet_web/config/connect_db.php";
    include($path);

    //$id = isset($_GET['id_admin']) ? $_GET['id_admin'] : '';
    $id = $_GET['id'];
    $r = $bdd->exec("UPDATE `projects` SET `title`='$this->title',`description`='$this->desc',
    `objectif_plafon`='$this->object_plafon',`objectif`='$this->objectif',`status`='$this->status',
    `begin_date`='$this->begin_date',`end_date`='$this->end_date',
    `validated`='$this->validated',`cat_id`='$this->cat_id',`owner_id`='$this->owner_id' WHERE $id");
  }

  public function supprimer()
  {
    $path=$_SERVER["DOCUMENT_ROOT"]."/projet_web/config/connect_db.php";
    include($path);//.. maaneha okhrj mil dossier hedha w odkhel lil includ
    $id = $_GET['id'];
    $req = $bdd->exec("DELETE FROM `projects` WHERE '$id'");
  }
}