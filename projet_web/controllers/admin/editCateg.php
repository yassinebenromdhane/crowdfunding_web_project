<?php
include('../../models/Category.class.php');
var_dump(isset($_POST['btn']));
if (isset($_POST['btn'])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $actif = $_POST['actif'];
    if (!empty($actif) or $actif = !null) {
        $categorie = new Category($name, $desc, true);
    } else {
        $categorie = new Category($name, $desc, false);
    }
    $categorie->modifier($id);
    header('location:../../front/admin/categList.php');
}
