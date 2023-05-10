<?php 
require_once('../../models/Project.class.php');
include('../../config/connect_db.php');
$array = array();
if (isset($_POST['btn_save'])){
    $array['title'] = $_POST['title'];
    $array['plafon'] = $_POST['plafon'];
    $array['begin'] = $_POST['begin'];
    $array['end'] = $_POST['end'];
    $array['desc'] = $_POST['desc'];
    $array['categ'] = $_POST['categ'];
    session_start();
    $prj = new Project($array['title'],$array['desc'],$array['plafon'],0,0,$array['begin'],$array['end'],0, $array['categ'],$_SESSION['id']);
    $prj->ajouter();
    $last_id=$prj->get_last_inserted_id();
    $files = $_FILES['upload'];
    for ($i=0; $i<count($files['name']); $i++) {
        echo $files['name'][$i];
        echo $files['tmp_name'][$i];
    }
    echo"<br>----------------------";
    echo $last_id;
    
    
    
    

}

?>