<html>
<head>
    <title>HackMT 2017 Group 7</title>
<!--    <script src="read_db.js"></script>-->
</head>
<body>

<?php
include('connection.php');
include('functions.php');
get_orders($conn);
/*
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

$q = "SELECT * FROM POSITION";
$r = mysqli_query($conn, $q);
$position = mysqli_fetch_assoc($r);
echo "User id: ".$position['USER_ID'];
echo "Longitude: ".$position['COORD_LON'];
echo "Latitude: ".$position['COORD_LAT'];
echo "Time: ".$position['TIMES'];

*/


?>



</body>
</html>
