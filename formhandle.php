<?php
include "lib/db_connect.php";
 
if ($_SERVER['REQUEST_METHOD']=='POST'){
  $tables = mysqli_query($conn, "SHOW TABLES");

  while ($table = mysqli_fetch_row($tables)) {
      $table_name = $table[0];
      $create_time_query = "SELECT CREATE_TIME FROM information_schema.tables WHERE table_name = ?";
      $stmt = mysqli_prepare($conn, $create_time_query);
      mysqli_stmt_bind_param($stmt, "s", $table_name);
      mysqli_stmt_execute($stmt);
      $create_time = mysqli_fetch_row(mysqli_stmt_get_result($stmt))[0];
      $table_info[$table_name] = $create_time;
  }
  arsort($table_info);
  $latest_table = key($table_info);
  $Roll_no = $_POST['Roll_no'];
  $Name = $_POST['Name'];
  $Email = $_POST['Email'];
  $sem1 = $_POST['sem1'];
  $sem2 = $_POST['sem2'];
  $FY = $_POST['FY'];
  $sem3 = $_POST['sem3'];
  $sem4 = $_POST['sem4'];
  $SY = $_POST['SY'];
  $sem5 = $_POST['sem5'];
  $sem6 = $_POST['sem6'];
  $TY = $_POST['TY'];
  $Category = $_POST['Category'];
  $FYFEE = $_POST['FYFEE'];
  $SYFEE = $_POST['SYFEE'];
  $TYFEE = $_POST['TYFEE'];
  $Scholarship = $_POST['Scholarship'];
  $Contact_no = $_POST['Contact_no'];
  $Address = $_POST['Address'];
  $sql1 = "INSERT INTO `$latest_table` ( `Roll_No`, `Name`, `email_id`, `sem1_GPA`, `sem2_GPA`, `FY_GPA`, `sem3_GPA`, `sem4_GPA`, `SY_GPA`, `sem5_GPA`, `sem6_GPA`, `TY_GPA`, `Category`, `FY_Fee_Reciept_No`, `SY_Fee_Reciept_No`, `TY_Fee_Reciept_No`, `Scholarship_recieved`, `Contact_No`, `Address`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
  $stmt = mysqli_prepare($conn, $sql1);
  mysqli_stmt_bind_param($stmt, "sssssssssssssssssss", $Roll_no, $Name, $Email, $sem1, $sem2, $FY, $sem3, $sem4, $SY, $sem5, $sem6, $TY, $Category, $FYFEE, $SYFEE, $TYFEE, $Scholarship, $Contact_no, $Address);
 
  if (mysqli_stmt_execute($stmt)) {
 header("Location:display1.php?Roll_no=$Roll_no");
 } 
 else {
  header("Location:display2.php");
 }
  
}
