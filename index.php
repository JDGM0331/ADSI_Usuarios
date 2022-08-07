<?php

    include_once 'controllers/security/login.php';
    include_once 'controllers/security/user_session.php';

    $userSession = new UserSession(); 
    $user = new User; 

    if(isset($_SESSION['user'])){
        $user->setUser($userSession->getCurrentUser());
        include_once './views/users/index.php';

    }else if(isset($_POST['user']) && isset($_POST['password'])){
        $userForm = $_POST['user'];
        $passwordForm = $_POST['password'];

        if($user->userExists($userForm, $passwordForm)){
            $userSession->setCurrentUser($userForm);
            $user->setUser($userForm); 
            include_once './views/users/index.php';

        }else{
            $login = "Error"; 
            include_once './views/security/login.php';

        }

    }else{
        include_once './views/security/login.php';
    }

?>