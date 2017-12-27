<!DOCTYPE html>
<html>
<head>
	<title>Test Mysqli</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php 
	//connect ke database
		$koneksi = mysqli_connect('localhost','root','','mahasiswa');
		$boolean = false;
		if ($koneksi) {
			echo "Success!";
			$boolean = true;
		}
		else{
			echo "Something's wrong ...";
		}
	 ?>

	 <?php 

	  ?>

</body>
</html>