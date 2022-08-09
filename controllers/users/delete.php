<?php

    
    include_once '../../model/connection.php    ';

    $identification = $_GET['identification']; 

    $bd = new DB(); 

    $query = $bd->connect()->prepare("DELETE FROM users WHERE identification = ?;"); 
    $result = $query->execute([$identification]); 

    if ($result == TRUE) {
        header("Location: ../../index.php?message=deleted");
    }else{
        header("Location: ../../index.php?message=failed");
        exit(); 
    }


?>