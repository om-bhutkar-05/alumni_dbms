<?php
 include 'lib/pass_connect.php';
$query = "SELECT studentpass FROM password";
$result = mysqli_query($conn, $query);
if ($result) {
  while ($row = mysqli_fetch_assoc($result)) {
      $password=$row['studentpass'];
  }
}
 if ($_SERVER['REQUEST_METHOD']=='POST') {
if(isset($_POST['pass'])){
  $pass=$_POST['pass'];
  if ($pass==$password) {
header("Location:form.php?loginsuccess=true");
  }
  else {
    header("Location:index.php?loginsuccess=false");
  }
}
}
