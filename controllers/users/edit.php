<?php 

    include_once '../../model/connection.php    ';

    $id = $_POST['id']; 
    $identification = $_POST['identification']; 
    $name = $_POST['name']; 
    $user = $_POST['user']; 

    $db = new DB(); 

    $query = $db->connect()->prepare("UPDATE users SET identification = ?, name = ?, user = ? WHERE identification = ?;");
    $result = $query ->execute([$identification, $name, $user, $id]); 

    if ($result == TRUE) {
        header("Location: ../../index.php?message=updated");
    }else{
        header("Location: ../../index.php?message=failed");
        exit(); 
    }
?>      