<?php
include 'lib/db_connect.php';

if(isset($_POST['row_id']) && isset($_POST['table_name'])){
    $rowId = $_POST['row_id'];
    $tableName = $_POST['table_name'];
    $sql = "DELETE FROM `$tableName` WHERE `Roll_No`='$rowId';";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "success";
    }
    else{
        echo "error";
    }
}
?>
