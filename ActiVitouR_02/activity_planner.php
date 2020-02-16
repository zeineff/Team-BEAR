<!DOCTYPE html>

<html>
    <head>
        <title>Activity Planner</title>
        
        <?php require("includes/bootstrap_req.php"); ?>
    </head>
    
    <body>
        <?php require("includes/header.php"); ?>
        
        <div class="container-fluid">
            <div id="main_box">
		planner
                
                <div id="google_map" style="width:100%;height:400px;">
                    
                </div>
            </div>

            <script src="../js/google_maps.js"></script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgQnfoVMX94wzFbhksI_pG-jWVYYAVe50&callback=initMap"></script>
        </div>
    </body>
</html>
