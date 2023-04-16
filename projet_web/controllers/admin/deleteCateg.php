<?php 
include('../../models/Category.class.php');

    $categorie = new Category(null,null,null);
    $id=$_GET['id'];
    $categorie->supprimer($id);
    header('location:../../front/admin/categList.php');





?>