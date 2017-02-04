<?php
include_once "./connection.php";

function get_position_by_user($user, $db = false){
  if(!$db)
  {
      $db = get_db_connection();
  }
  $q = "SELECT * FROM POSITION WHERE USER_ID = '$user'";
  $r = mysqli_query($db, $q);
  return $r;
}
//get_orders
function get_orders($db = false){
  if(!$db)
  {

      $db = get_db_connection();
  }
  $q = "SELECT * FROM ORDERS;";

  $r = mysqli_query($db, $q);
  return $r;

}

//users
function get_users($db = false)
{
  if(!$db)
  {   
      $db = get_db_connection();
  }
  $q = "SELECT * FROM USERS ;";
  $r = mysqli_query($db, $q);

  return $r;
}

function get_orders_by_users($user, $db = false){
  if(!$db)
  {
      $db = get_db_connection();
  }
  $q = "SELECT * FROM ORDERS WHERE ASSIGNED = '$user'";
  $r = mysqli_query($db, $q);
  return $r;
}

if(isset($_GET['all_users']))
{
  header("Content-type: text/txt; charset=UTF-8");
  $ret = get_users();
  while($user = mysqli_fetch_assoc($ret)){
    echo "User id: ".$user['ID'].';';
    echo "Longitude: ".$user['NAME'].';';
  }
}

if(isset($_GET['get_orders_by_user']))
{
  header("Content-type: text/txt; charset=UTF-8");
  $user = $_GET['get_orders_by_user'];
  {
    $ret = get_orders_by_users($user);
    while($orders = mysqli_fetch_assoc($ret))
    {
      echo "Address: ".$orders['ADDRESS'].';';
      echo "User: ".$orders['ASSIGNED'].';';
      echo "Longitude: ".$orders['COORD_LON'].';';
      echo "Latitude: ".$orders['COORD_LAT'].';';
      echo "Direction: ".$orders['DIRECTION'].';';
      echo "ID: ".$orders['ID'].';';
      echo "Time: ".$orders['TIMES'].';';
    }
  }
}


if(isset($_GET['get_all_orders']))
{
  header("Content-type: text/txt; charset=UTF-8");
  $ret = get_orders();
  while($orders = mysqli_fetch_assoc($ret)){
    echo "Address: ".$orders['ADDRESS'].';';
    echo "User: ".$orders['ASSIGNED'].';';
    echo "Longitude: ".$orders['COORD_LON'].';';
    echo "Latitude: ".$orders['COORD_LAT'].';';
    echo "Direction: ".$orders['DIRECTION'].';';
    echo "ID: ".$orders['ID'].';';
    echo "Time: ".$orders['TIMES'].';';
  }
}

if(isset($_GET['get_position_by_user']))
{
  header("Content-type: text/txt; charset=UTF-8");
  $user = $_GET['get_position_by_user'];
  {
    $ret = get_position_by_user($user);
    while($position = mysqli_fetch_assoc($ret))
    {
      echo "User id: ".$position['USER_ID'].';';
      echo "Longitude: ".$position['COORD_LON'].';';
      echo "Latitude: ".$position['COORD_LAT'].';';
      echo "Time: ".$position['TIMES'].';';
    }
}
}
 ?>
