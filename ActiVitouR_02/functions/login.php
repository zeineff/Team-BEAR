<?php
    require_once("session.php");
    require_once("functions.php");
    require_once("db_functions.php");
    
    $fields = array("email", "password");
    
    $success = false;
    
    if (check_post_fields($fields)){
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
        
        $user = get_user_by_email($email);
        
        if ($user !== null && password_verify($password, $user["password"])){
            $success = true;
            set_session($user);
        }
    }
    
    if ($success) {
        header("Location: ../home.php");
    } else {
        header("Location: ../login.php?error=incorrect_details");
    }
