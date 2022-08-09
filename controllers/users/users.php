<?php 

    include_once './model/connection.php';

    Class UsersADSI extends DB{

        public function getUsers(){
            $sth = $this->connect()->query('SELECT * FROM users');
            $result = $sth->fetchAll(PDO::FETCH_OBJ); 
            return $result;
        }

    } 

?>  