<?php
require_once("functions/session.php");

if (logged_in()) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>

<html>
    <head>
        <?php require("includes/bootstrap_req.php"); ?>
        <script src="js/register.js" type="text/javascript"></script>
        
        <title>Create Account</title>

    </head>

    <body>
        <?php require("includes/header.php"); ?>
        <?php require("includes/navbar.php"); ?>

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
