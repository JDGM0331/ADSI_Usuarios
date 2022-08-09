<?php 

    include_once '../../model/connection.php    ';

    $identification = $_POST['identification']; 
    $name = $_POST['name']; 
    $user = $_POST['user']; 
    $password = md5($_POST['password']); 

    $db = new DB(); 

    $query = $db->connect()->prepare("INSERT INTO users(identification,name,user,password) VALUES (?,?,?,?);");
    print_r($query); 
    $result = $query ->execute([$identification, $name, $user, $password]); 

    if ($result == TRUE) {
        include('../../views/users/index.php');
    }else{
        include('./views/users/index.php');
        exit(); 
    }
?>      