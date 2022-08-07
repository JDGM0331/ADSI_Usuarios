<?php 

    include_once './model/connection.php';

    Class User extends DB{

        private $name; 
        private $user; 

        public function userExists($user, $password){
            $md5password = md5($password);
            $query = $this->connect()->prepare('SELECT * FROM users WHERE user = :user AND password = :password');
            $query->execute(['user' => $user, 'password' => $md5password]);

            if($query->rowCount()){
                return true; 
            }else{
                return false;
            }
        }

        public function setUser($user){
            $query = $this->connect()->prepare('SELECT * FROM users WHERE user =:user');
            $query->execute(['user' => $user]); 

            foreach($query as $currentUser){
                $this->name = $currentUser['name'];
                $this->user = $currentUser['user'];
            }
        }

        public function getName(){
            return $this->name; 
        }

    } 






?>