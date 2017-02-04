<?php 
//database connection
$servername = "ancient.cs.mtsu.edu";
$username = "hackmt7";
$password = "hackmt7mysql";
$tdb = "hackmt7";
$port = '443';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $tdb);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
 ?>
