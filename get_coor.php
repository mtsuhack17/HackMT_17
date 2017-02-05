<?php
//saves coordinates sent to POST from phone app
include_once "./connection.php";

function get_coordinates($db = false){
  if(!$db)  { $db = get_db_connection();  }
  $longitude = floatval($_POST['lng']);
  $latitude = floatval($_POST['lat']);
  $user = intval($_POST['user']);

  $q = "INSERT INTO POSITION SET USER_ID = $user , COORD_LAT = $longitude , COORD_LON = $latitude  ";

  mysqli_query($db, $q);
}

get_coordinates();
 ?>
