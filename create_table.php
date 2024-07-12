<?php
  include 'lib/db_connect.php';
  if ($_SERVER['REQUEST_METHOD']=='POST'){
    $newtablename=$_POST['TableName'];
  $sql1 = "CREATE TABLE `$newtablename`(
    `Roll_No` int(10) NOT NULL PRIMARY KEY,
    `Name` varchar(255) NOT NULL,
    `email_id` varchar(255) NOT NULL,
    `sem1_GPA` double NOT NULL,
    `sem2_GPA` double NOT NULL,
    `FY_GPA` double NOT NULL,
    `sem3_GPA` double NOT NULL,
    `sem4_GPA` double NOT NULL,
    `SY_GPA` double NOT NULL,
    `sem5_GPA` double NOT NULL,
    `sem6_GPA` double NOT NULL,
    `TY_GPA` double NOT NULL,
    `Category` varchar(255) NOT NULL,
    `FY_Fee_Reciept_No` decimal(20,0) NOT NULL,
    `SY_Fee_Reciept_No` decimal(20,0) NOT NULL,
    `TY_Fee_Reciept_No` decimal(20,0) NOT NULL,
    `Scholarship_recieved` varchar(255) NOT NULL,
    `Contact_No` decimal(20,0) NOT NULL,
    `Address` text NOT NULL
  )";
  mysqli_query($conn,$sql1);
header("location:Admincontrol.php?ntablename=$newtablename");
}
    mysqli_close($conn);

