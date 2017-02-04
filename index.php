<html>
<head>
    <title>HackMT 2017 Group 7</title>
<!--    <script src="read_db.js"></script>-->
</head>
<body>

<?php
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



</body>
</html>