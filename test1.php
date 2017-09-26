<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Introduction to PHP</title>
	</head>
	<body>
		<?php // test1.php
		$username = "Korigan Payne";
		echo $username;
		echo "<br>";
		$current_user = $username;
		echo $current_user;
		echo "<br>";
		$pi = "3.1415927";
		$radius = "5";
		echo $pi * ($radius * $radius);
		echo "<br>";
		echo "This is line ".__LINE__." of file ".__FILE__;
		?>
	</body>
</html>
