<?php

	/*
		Change values to php.ini

		upload_max_filesize = 100M;

		post_max_size = 100M;

		also make sure to give folder 755 permissions for linux
	*/
	$rand = rand(10,100);
	$streplaceFileName = cleanSpecialCharacters($_FILES['ufile']['name']);
	
	$zipFile = $rand."-".$streplaceFileName;

	$ds = DIRECTORY_SEPARATOR;
	
	$storeFolder = '../uploads'; 

	$message = "Please upload a .zip file";

	if((!empty($_FILES)) && !empty($_FILES['ufile']['name'])) {

		if(preg_match("/[.](zip)$/", $_FILES['ufile']['name'])) {

			$filename = $rand . '-' . $streplaceFileName;
			
			$tempFile = $_FILES['ufile']['tmp_name'];
			
			$targetPath = $storeFolder . $ds;
			
			$targetFile = $targetPath.$filename;

			$check = move_uploaded_file($tempFile,$targetFile);
			
			if($check) {
				$message =  'ZipFile Uploaded Successfully!';

			}
		}
	}
	
	header("Location:../pages/upload.php?message=$message");

	function cleanSpecialCharacters($string) {
		$string = str_replace(' ', '-', $string); 

		return preg_replace('/[^A-Za-z0-9.\-]/', '', $string); 
	}

?>