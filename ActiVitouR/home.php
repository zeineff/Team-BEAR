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

                            <h1 class="my-4">Page Heading
                                <small>Secondary Text</small>
                            </h1>

                            <!-- Blog Post -->
                            <div class="card mb-4">
                                <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                                <div class="card-body">
                                    <h2 class="card-title">Post Title</h2>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                                    <a href="#" class="btn btn-primary">Read More &rarr;</a>
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
