<?php
    require_once("functions/functions.php");
    require_once("functions/db_functions.php");
    
    define("QUERY", "query");
    define("LOCATION_IMAGE_DIR", "images/locations/");
    define("ROW_LENGTH", 3);
    
    
    
    if (!get_field_set(QUERY)) {
        header("Location: home.php");
    }
    
    $query = filter_input(INPUT_GET, QUERY, FILTER_SANITIZE_STRING);
    $locations = search_locations($query);
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Search Results</title>
        
        <?php require("includes/bootstrap_req.php"); ?>
    </head>
    
    <body>
        <?php require("includes/header.php"); ?>
        
        <div class="container-fluid">
            <p>Search results for: <?= $query ?></p>
        
            <?php
                $i = 0;
                $location_count = sizeof($locations);
                
                while ($i < sizeof($locations)) :
            ?>
                <div class="row">
                    <?php
                        $j = 0;
                        
                        while ($j++ < ROW_LENGTH && $i < $location_count) :
                            $l = $locations[$i++];
                            $location_id =  $l["id"];
                            $name = $l["name"];
                            
                            $images = get_location_images($location_id);
                            $img = $images[0];
                            $filename = $img["filename"];
                            $filetype = $img["filetype"];
                            $full_filename = LOCATION_IMAGE_DIR . $filename .
                                             "." . $filetype;
                    ?>
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <a href="location.php?id=<?= $location_id ?>">
                                
                                <img
                                    src="<?= $full_filename ?>"
                                    alt="location_image"
                                >
                                
                                <div class="caption">
                                    <p><?= $name ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endwhile; ?>
            
            
            
            
            
            
        </div>
    </body>
</html>
