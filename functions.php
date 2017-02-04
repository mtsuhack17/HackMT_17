<?php
function get_position_by_user(){
  if(!$db)
  {
      $db = get_db_connection();
  }
  $q = "SELECT * FROM POSITION";
  $r = mysqli_query($db, $q);
  while($position = mysqli_fetch_assoc($r)){
    echo "User id: ".$position['USER_ID'];
    echo "Longitude: ".$position['COORD_LON'];
    echo "Latitude: ".$position['COORD_LAT'];
    echo "Time: ".$position['TIMES'];
  }
}
//get_orders

//users

//get_orders_by_users
 ?>
