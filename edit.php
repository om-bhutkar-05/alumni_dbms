
<?php
include 'lib/db_connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $tname = $_GET['tname'];
    $roll_no = $_GET['Roll_No'];
    $name = $_GET['Name'];
    $email = $_GET['email_id'];
    $sem1_GPA = $_GET['sem1_GPA'];
    $sem2_GPA = $_GET['sem2_GPA'];
    $FY_GPA = $_GET['FY_GPA'];
    $sem3_GPA = $_GET['sem3_GPA'];
    $sem4_GPA = $_GET['sem4_GPA'];
    $SY_GPA = $_GET['SY_GPA'];
    $sem5_GPA = $_GET['sem5_GPA'];
    $sem6_GPA = $_GET['sem6_GPA'];
    $TY_GPA = $_GET['TY_GPA'];
    $category = $_GET['Category'];
    $FY_Fee = $_GET['FY_Fee_Reciept_No'];
    $SY_Fee = $_GET['SY_Fee_Reciept_No'];
    $TY_Fee = $_GET['TY_Fee_Reciept_No'];
    $scholarship = $_GET['Scholarship_recieved'];
    $contact_no = $_GET['Contact_No'];
    $address = $_GET['Address'];
    $sql = "UPDATE `$tname` SET `Roll_No`='$roll_no', `Name`='$name',`email_id`='$email',`sem1_GPA`='$sem1_GPA',`sem2_GPA`='$sem2_GPA',`FY_GPA`='$FY_GPA',`sem3_GPA`='$sem3_GPA',`sem4_GPA`='$sem4_GPA',`SY_GPA`='$SY_GPA',`sem5_GPA`='$sem5_GPA',`sem6_GPA`='$sem6_GPA',`TY_GPA`='$TY_GPA',`Category`='$category',`FY_Fee_Reciept_No`='$FY_Fee',`SY_Fee_Reciept_No`='$SY_Fee',`TY_Fee_Reciept_No`='$TY_Fee',`Scholarship_recieved`='$scholarship',`Contact_No`='$contact_no',`Address`='$address' WHERE `Roll_No`='$roll_no'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_query($conn, $sql)) {
        echo '<script>window.location.href="tableview.php?tablename=' . $tname . '"</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
