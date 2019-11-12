<?php 
	$title = "Upload";
	include('../includes/header.php');
?>

<main>
	<div id="main_box">
		<div id="authentication_box">
			<form action="../functions/file_upload.php" method="post" enctype="multipart/form-data">
				<label>Select .zip file</label> 

				<input name="ufile" type="file" accept=".zip" size="50" />

				<input type="submit" name="Submit" value="Upload" />
			</form>
			
		<?= isset($_GET["message"])? $_GET["message"]: ""?>
		</div>
	</div>
</main>

<?php 
	include('../includes/footer.php');
?>