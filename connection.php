<?php
	$conn = mysqli_connect('localhost','root','','navkar');
	if(!$conn){
		die("Error in establishing Connection :( ".mysqli_connect_error());
	}
?>