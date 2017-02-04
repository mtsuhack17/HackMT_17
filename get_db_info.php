<?php

function get_db_connection()
{
    class MyDB extends SQLite3
    {
        function __construct()
        {
            $this->open('local_db.db');
        }
    }

    $db = new MyDB();
    return $db;
}

function get_users($db = false) {
    if(!$db)
    {
        $db = get_db_connection();
    }

    if(!$db){
        echo $db->lastErrorMsg();
    }
    $sql =<<<EOF
      SELECT * from users;
EOF;

    $ret = $db->query($sql);
    while($row = $ret->fetchArray(SQLITE3_ASSOC) )
    {
        echo  $row['NAME'] ."\n";
    }
}

function get_orders($db = false) {
    if(!$db)
    {
        $db = get_db_connection();
    }

    if(!$db){
        echo $db->lastErrorMsg();
    }
    $sql =<<<EOF
      SELECT * from orders;
EOF;

    $ret = $db->query($sql);
    while($row = $ret->fetchArray(SQLITE3_ASSOC) )
    {
        echo  $row['ID'] ."\n";
        echo  $row['ASSIGNED'] ."\n";
        echo  $row['TIMEST'] ."\n";
        echo  $row['ADDRESS'] ."\n";
        echo  $row['COORD_LONG'] ."\n";
        echo  $row['COORD_LAT'] ."\n";
        echo  $row['DIRECTION'] ."\n";
    }
}

function get_positions($db = false) {
    if(!$db)
    {
        $db = get_db_connection();
    }

    if(!$db){
        echo $db->lastErrorMsg();
    }
    $sql ="SELECT * from POSITION;";

    $ret = $db->query($sql);
    while($row = $ret->fetchArray(SQLITE3_ASSOC) )
    {
        echo  $row['USER_ID'] ."\n";
        echo  $row['COORD_LON'] ."\n";
        echo  $row['COORD_LAT'] ."\n";
        echo  $row['TIMES'] ."\n";
    }
}

function get_positions_by_user($user = false, $db = false) {
    if(!$db)
    {
        $db = get_db_connection();
    }

    if(!$db){
        echo $db->lastErrorMsg();
    }
    $sql = ' SELECT * from POSITION WHERE USER_ID='.'1'.';';

    $ret = $db->query($sql);
//    while($row = $ret->fetchArray(SQLITE3_ASSOC) )
//    {
//        echo  $row['COORD_LON'] ."\n";
//        echo  $row['COORD_LAT'] ."\n";
//        echo  $row['TIMES'] ."\n";
//    }
    return $ret;
}


function close_connection($db)
{
    if($db)
    {
        $db->close();
    }
}
//get_positions();
//get_users();
//get_positions_by_user();
?>