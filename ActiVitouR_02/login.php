<?php
    require_once("functions/session.php");
    require_once("functions/functions.php");
    
    if (logged_in()) {
        header("Location: home.php");
    }
    
    
    
    $login_failed = get_field_set("error");
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="js/login.js"></script>
        
        <?php require("includes/bootstrap_req.php"); ?>
    </head>
    
    <body>
        <?php require("includes/header.php"); ?>
        
        <div class="container-fluid">
            <div class="col-sm-offset-2 col-sm-8">
                <?php if ($login_failed) : ?>
                    <div class="alert alert-danger">
                        <strong>Incorrect email and/or password</strong>
                    </div>
                <?php endif; ?>

                <form
                    action="functions/login.php"
                    method="post"
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
                        <label for="password_01">Password: </label>

                        <input
                            type="password"
                            class="form-control"
                            name="password"
                        >
                    </div>

                    <div class="form-group">
                        <div>
                            <button
                                type="submit"
                                class="btn btn-default"
                            >Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
