<?php
include_once "./connection.php";

function get_position_by_user($user, $db = false){
  if(!$db)  { $db = get_db_connection();  }
  $q = "SELECT * FROM POSITION WHERE USER_ID = '$user' ORDER BY TIMES DESC";
  return mysqli_query($db, $q);
}

function get_orders($db = false){
  if(!$db) { $db = get_db_connection();  }
  $q = "SELECT * FROM ORDERS;";
  return mysqli_query($db, $q);
}

function get_users($db = false)
{
  if(!$db) { $db = get_db_connection(); }
  $q = "SELECT * FROM USERS ;";
  return mysqli_query($db, $q);
}

function get_orders_by_users($user, $db = false){
  if(!$db) { $db = get_db_connection(); }
  $q = "SELECT * FROM ORDERS WHERE ASSIGNED = '$user'";
  return mysqli_query($db, $q);
}

if(isset($_GET['all_users']))
{
  header("Content-type: text/txt; charset=UTF-8");
  $ret = get_users();
  while($user = mysqli_fetch_assoc($ret))
  {
    echo $user['ID'].'#'.$user['NAME'].'!';
  }
}

if(isset($_GET['get_orders_by_user']))
{
  header("Content-type: text/txt; charset=UTF-8");
  $user = $_GET['get_orders_by_user'];
    $ret = get_orders_by_users($user);
    while($orders = mysqli_fetch_assoc($ret))
    {
      echo $orders['ADDRESS'].'#'.$orders['ASSIGNED'].'#'.$orders['COORD_LON'].'#'.$orders['COORD_LAT'].'#'.$orders['DIRECTION'].'#'.$orders['ID'].'#'.$orders['TIMES'].'!';
    }
}

if(isset($_GET['get_all_orders']))
{
  header("Content-type: text/txt; charset=UTF-8");
  $ret = get_orders();
  while($orders = mysqli_fetch_assoc($ret)){
    echo $orders['ADDRESS'].'#'.$orders['ASSIGNED'].'#'.$orders['COORD_LON'].'#'.$orders['COORD_LAT'].'#'.$orders['DIRECTION'].'#'.$orders['ID'].'#'.$orders['TIMES'].'!';
  }
}

if(isset($_GET['get_position_by_user']))
{
  header("Content-type: text/txt; charset=UTF-8");
  $user = $_GET['get_position_by_user'];
    $ret = get_position_by_user($user);
    while($position = mysqli_fetch_assoc($ret))
    {
      echo $position['USER_ID'].'#'.$position['COORD_LON'].'#'.$position['COORD_LAT'].'#'.$position['TIMES'].'!';
    }
}

?>
