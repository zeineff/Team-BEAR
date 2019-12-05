<?php
    require_once("functions/session.php");
    
    $path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    $parts = explode('/', $path);
    $current_page = $parts[2];
?>

<script src="js/navbar.js"></script>

<div class="container-fluid">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="home.php">ActiVitouR</a>
            </div>

            <ul class="nav navbar-nav">
                <li <?php if ($current_page === "home.php") {echo "class='active'";} ?>>
                    <a href="home.php">Home</a>
                </li>

                <li <?php if ($current_page === "map.php") {echo "class='active'";} ?>>
                    <a href="map.php">Map</a>
               </li>
               
                <li <?php if ($current_page === "activity_planner.php") {echo "class='active'";} ?>>
                    <a href="activity_planner.php">Activity Planner</a>
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

            <?php if (logged_in()) : ?>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="functions/logout.php">
                            <span class="glyphicon glyphicon-log-out"></span>
                            Logout
                        </a>
                    </li>
                </ul>

                <p class="navbar-text navbar-right">
                    <?php echo $_SESSION["username"]; ?>
                </p>
            <?php else : ?>
                <ul class="nav navbar-nav navbar-right">
                    <li <?php if ($current_page === "register.php") {echo "class='active'";} ?>>
                        <a href="register.php">
                            <span class="glyphicon glyphicon-user"></span>
                            Create Account
                        </a>
                    </li>

                    <li <?php if ($current_page === "login.php") {echo "class='active'";} ?>>
                        <a href="login.php">
                            <span class="glyphicon glyphicon-log-in"></span>
                            Login
                        </a>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </nav>
</div>
