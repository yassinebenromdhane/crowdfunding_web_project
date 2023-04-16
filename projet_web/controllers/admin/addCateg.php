<?php 

include('../../models/Category.class.php');

if (isset($_POST['btn'])){
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $actif = $_POST['actif'];
    if(!empty($actif) or $actif =! null){
        $categorie = new Category($name,$desc,true);
    }
   else{
        $categorie = new Category($name,$desc,false);
    }
    $categorie->ajouter();
    header('location:../../../front/admin/categList.php');
    // var_dump($name,$desc,$actif);
}



?>