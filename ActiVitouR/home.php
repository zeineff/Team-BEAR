<!DOCTYPE html>
<html>
    <head>
        <title>ActiVitouR</title>
        <?php require("includes/bootstrap_req.php"); ?>
        <link rel="icon" href="IMG/headphones.png" type="image/gif" sizes="16x16">
    </head>

    <body>
        <?php require("includes/header.php"); ?>

        <div class="container-fluid">
            <div class="col-sm-offset-1 col-sm-10">
                <div class="container">

                    <div class="row">

                        <!-- Blog Entries Column -->
                        <div class="col-md-8">

                            <h1 class="my-4">Wicklow Mountains 
                                <small>Co. Wicklow, Ireland</small>
                            </h1>

                            <!-- Blog Post -->
                            <div class="card mb-4">
                                <img class="card-img-top" src="img/gforest.jpg" alt="Card image cap" style="  width: 750px;height: 400px;">
                                <div class="card-body">
                                    <h2 class="card-title">Glendalough Forest</h2>
                                    <p class="card-text">Vist the Glendalough forest, the Roundtower and Lough Tay.</p>
                                    <a href="#" class="btn btn-primary">Explore &rarr;</a>
                                </div>
                            </div>
                            <br>

                        </div>

                        <!-- Sidebar Widgets Column -->
                        <div class="col-md-4">

                            <!-- Categories Widget -->
                            <div class="card my-4">
                                <h5 class="card-header">Categories</h5>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <ul class="list-unstyled mb-0">
                                                <li>
                                                    <a href="#">Mountains</a>
                                                </li>
                                                <li>
                                                    <a href="#">Forests</a>
                                                </li>
                                                <li>
                                                    <a href="#">Glendalough</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <ul class="list-unstyled mb-0">
                                                <li>
                                                    <a href="#">Co. Wicklow, Ireland</a>
                                                </li>
                                                <li>
                                                    <a href="#">Round tower</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Side Widget -->
                            <div class="card my-4">
                                <h5 class="card-header">Side Widget</h5>
                                <div class="card-body">
                                    You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
