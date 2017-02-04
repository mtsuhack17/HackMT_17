<?php
function get_position_by_user($user){
  if(!$db)
  {
      $db = get_db_connection();
  }
  $q = "SELECT * FROM POSITION WHERE USER_ID = '$user'";
  $r = mysqli_query($db, $q);
  while($position = mysqli_fetch_assoc($r)){
    echo "User id: ".$position['USER_ID'];
    echo "Longitude: ".$position['COORD_LON'];
    echo "Latitude: ".$position['COORD_LAT'];
    echo "Time: ".$position['TIMES'];
  }
}
//get_orders
function get_orders(){
  if(!$db)
  {
      $db = get_db_connection();
  }
  $q = "SELECT * FROM ORDERS";
  $r = mysqli_query($db, $q);
  while($orders = mysqli_fetch_assoc($r)){
    echo "Address: ".$orders['ADDRESS'];
    echo "User: ".$orders['ASSIGNED'];
    echo "Longitude: ".$orders['COORD_LON'];
    echo "Latitude: ".$orders['COORD_LAT'];
    echo "Direction: ".$orders['DIRECTION'];
    echo "ID: ".$orders['ID'];
    echo "Time: ".$orders['TIMES'];
  }
}

//users
function get_users(){
  if(!$db)
  {
      $db = get_db_connection();
  }
  $q = "SELECT * FROM USERS ORDER BY NAME ASC";
  $r = mysqli_query($db, $q);
  while($user = mysqli_fetch_assoc($r)){
    echo "User id: ".$user['ID'];
    echo "Longitude: ".$user['NAME'];
  }
}
//get_orders_by_users
function get_orders_by_users($user){
  if(!$db)
  {
      $db = get_db_connection();
  }
  $q = "SELECT * FROM ORDERS WHERE ASSIGNED = '$user'";
  $r = mysqli_query($db, $q);
  while($orders = mysqli_fetch_assoc($r)){
    echo "Address: ".$orders['ADDRESS'];
    echo "User: ".$orders['ASSIGNED'];
    echo "Longitude: ".$orders['COORD_LON'];
    echo "Latitude: ".$orders['COORD_LAT'];
    echo "Direction: ".$orders['DIRECTION'];
    echo "ID: ".$orders['ID'];
    echo "Time: ".$orders['TIMES'];
  }
}
 ?>
