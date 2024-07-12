
<?php
include 'lib\pass_connect.php';
$query = "SELECT studentpass FROM password";
$result = mysqli_query($conn, $query);
if ($result) {
  while ($row = mysqli_fetch_assoc($result)) {
    $password = $row['studentpass'];
  }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $pass1 = $_POST['pass1'];
  $pass2 = $_POST['pass2'];
  if (isset($pass1) && isset($pass2)) {

    if ($password == $pass1) {
      $query = "UPDATE password SET studentpass='$pass2' WHERE studentpass='$pass1'";
      $result = mysqli_query($conn, $query);
      echo '
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Change Success</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      height: 100vh;
      background: linear-gradient(45deg, #66aaff, #0099cc);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      text-align: center;
      padding: 30px;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      max-width: 400px;
    }

    h1 {
      color: #fff;
      background: linear-gradient(45deg, #0066cc, #003366);
      padding: 10px;
      border-radius: 8px;
    }

    p {
      color: #333;
      margin-top: 20px;
    }
    .return-button {
      background-color: #0066cc;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 20px;
    }

    .return-button:hover {
      background-color: #003366;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Password Changed Successfully</h1>
    <p>Your password has been changed successfully.</p>
    <button class="return-button" onclick="goHome()">Return Home</button>
  </div>
</body>
<script>
function goHome() {
  window.location.href = "Admincontrol.php";
}
</script>
</html>

';
    }
    else {
      echo '
      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Password Change Success</title>
        <style>
          body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            background: linear-gradient(45deg, #66aaff, #0099cc);
            display: flex;
            justify-content: center;
            align-items: center;
          }
      
          .container {
            text-align: center;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            max-width: 400px;
          }
      
          h1 {
            color: #fff;
            background: linear-gradient(45deg, #0066cc, #003366);
            padding: 10px;
            border-radius: 8px;
          }
      
          p {
            color: #333;
            margin-top: 20px;
          }
          .return-button {
            background-color: #0066cc;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
          }
      
          .return-button:hover {
            background-color: #003366;
          }
        </style>
      </head>
      <body>
        <div class="container">
          <h1>Password Cant be  Changed!</h1>
          <p>Wrong credentials.</p>
          <button class="return-button" onclick="goHome()">Return Home</button>
        </div>
      </body>
      <script>
      function goHome() {
        window.location.href = "Admincontrol.php";
      }
      </script>
      </html>
      
      ';
    }
  }
}

?>