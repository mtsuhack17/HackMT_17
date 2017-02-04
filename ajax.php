<?php
if(isset($_GET['q_type'])) {
    header("Content-type: text/txt; charset=UTF-8");
    if($_GET['q_type']=='get_all_coord') {
        include_once "./get_db_info.php";
        $ret = get_positions_by_user();
        while($row = $ret->fetchArray(SQLITE3_ASSOC) )
        {
            echo  $row['COORD_LON'] ."\n";
            echo  $row['COORD_LAT'] ."\n";
            echo  $row['TIMES'] ."\n";
        }
//        echo 'Success, q = 1';
    }
    else {
        echo 'failed';
    }
}
?>