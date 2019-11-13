<?php 
	$title = "Planner";
	include('../includes/header.php');
?>

<main>
	<div id="main_box">
		<div id="google_map" style="width:100%;height:400px;"></div>
	</div>

	<script src="../js/google_maps.js"></script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgQnfoVMX94wzFbhksI_pG-jWVYYAVe50&callback=initMap"></script>
</main>

<?php 
	include('../includes/footer.php');
?>