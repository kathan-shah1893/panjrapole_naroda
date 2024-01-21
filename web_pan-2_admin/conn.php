<?php
	$con=mysqli_connect("localhost","root","");
	if(!($con)){
		echo "not connect...<br>";
	}
	
	$db=mysqli_select_db($con,"panjrapole");
	if (!$db) {
		echo "db not connect...<br>";
	}
?>