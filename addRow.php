<?php

	$con = mysqli_connect('localhost','root','root','pos');
	if(!$con) {
		die();
	}

	$uname = $_GET['q'];
	$cname = $_GET['r'];
	$uname = mysql_real_escape_string($uname);
	$cname = mysql_real_escape_string($cname);
	$query = "INSERT INTO username_store VALUES (";
	$query .= $uname;
	$query .= ",$cname);";
	mysqli_query($con,$query);
	mysqli_close($con);
?>
