<?php

	$con = mysqli_connect('localhost','root','root','pos');
	if(!$con) {
		die();
	}

	$uname = $_GET['q'];
	$uname = mysql_real_escape_string($uname);
	$query = "DELETE FROM username_store WHERE username=";
	$query .= "$uname;";
	mysqli_query($con,$query);
	mysqli_close($con);
?>
