<?php
//saves coordinates sent to POST from phone app
function get_coordinates($dbc){
  $longitude = $_POST['lng'];
  $latitude = $_POST['lat'];
  $user = $_POST['user'];

  $q = "INSERT INTO POSITION SET USER_ID = '$user' , COORD_LON = '$longitude' , COORD_LAT = '$latitude'  ";

  mysqli_query($dbc, $q);
}


 ?>
