<?php
    require_once("functions/session.php");
    
    if (logged_in()) {
        header("Location: home.php");
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Create Account</title>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="js/register.js"></script>
        
        <?php require("includes/bootstrap_req.php"); ?>
    </head>
    
    <body>
        <?php require("includes/header.php"); ?>
        
        <div class="container-fluid">
            <form
                method="post"
                action="functions/register.php"
                class="col-sm-offset-2 col-sm-8"
            >
                <div class="form-group">
                    <label for="email">Email: </label>
                    
                    <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                    >
                </div>
                
                <div class="form-group">
                    <label for="username">Username: </label>
                    
                    <input
                        type="text"
                        class="form-control"
                        name="username"
                    >
                </div>
                
                <div class="form-group">
                    <label for="password_01">Password: </label>
                    <input
                        type="password"
                        class="form-control"
                        name="password_01"
                    >
                </div>
                
                <div class="form-group">
                    <label for="password_02">Re-enter Password: </label>
                    
                    <input
                        type="password"
                        class="form-control"
                        name="password_02"
                    >
                </div>
                
                <div class="form-group">
                    <div>
                        <button
                            type="submit"
                            class="btn btn-default"
                        >Register</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
