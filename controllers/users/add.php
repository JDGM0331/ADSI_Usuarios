<?php 

    include_once '../../model/connection.php    ';

    $identification = $_POST['identification']; 
    $name = $_POST['name']; 
    $user = $_POST['user']; 
    $password = md5($_POST['password']); 

    $db = new DB(); 

    $query = $db->connect()->prepare("INSERT INTO users(identification,name,user,password) VALUES (?,?,?,?);");
    $result = $query ->execute([$identification, $name, $user, $password]); 

    if ($result == TRUE) {
        header("Location: ../../index.php?message=created");
    }else{
        header("Location: ../../index.php?message=failed");
        exit(); 
    }
?>      