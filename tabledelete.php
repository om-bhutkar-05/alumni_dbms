<?php
include 'lib/db_connect.php';
$tablename = $_GET['tablename'];
$sql = "DROP TABLE `$tablename`";
if ($conn->query($sql) === TRUE) {
    echo "Table $tablename deleted successfully";
    header("Location:Admincontrol.php?loginsuccess=true");
} else {
    echo "Error deleting table: " . $conn->error;
}
$conn->close();
