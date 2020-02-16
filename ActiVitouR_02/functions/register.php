<?php
    require_once("session.php");
    require_once("functions.php");
    require_once("db_functions.php");
    
    $fields = array("email", "username", "password_01", "password_02");
    
    if (check_post_fields($fields)){
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
        $password_01 = filter_input(INPUT_POST, "password_01", FILTER_SANITIZE_STRING);
        $password_02 = filter_input(INPUT_POST, "password_02", FILTER_SANITIZE_STRING);
        
        if ($password_01 === $password_02 && valid_new_user_details($email, $username)){
            $user = create_user($email, $username, $password_01);
            
            set_session($user);
        }
    }
    
    header("Location: ../home.php");
