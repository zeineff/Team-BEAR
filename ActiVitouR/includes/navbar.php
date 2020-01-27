<?php
require_once("functions/session.php");

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$parts = explode('/', $path);
$current_page = $parts[2];
?>

<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">ActiVitouR</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="vtours.php">Virtual Tours</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="activity_planner.php">Activity Planner</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="map.php">Map</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="login.php">Login</a>
                        <a class="dropdown-item" href="register.php">Register</a>
                    </div>
                </li>
            </ul>
            <form
                class="navbar-form navbar-right"
                action="search.php"
                id="search_form"
                >
                <div class="input-group">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Search"
                        id="search_bar"
                        name="query"
                        >

                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</nav>
