<?php
function get_db_connection($db = false)
{
	$servername = "ancient.cs.mtsu.edu";
	$username = "hackmt7";
	$password = "hackmt7mysql";
	$tdb = "hackmt7";
	echo 'before msql()';
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $tdb);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	return $conn;
	// echo "Connected successfully";
}
 ?>
