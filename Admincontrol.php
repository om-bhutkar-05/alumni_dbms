<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alumni DBMS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
    .ac {
      margin-top: 100px;
    }

    .custom-btn {
      width: 250px;
    }

    a {
      text-decoration: none;
      color: white;
    }
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      height: 100vh;
      background: linear-gradient(135deg, #ff4500, #ff1493, #00bfff);
    
    }

    .ac {
      margin-top: 100px;
    }

    .custom-btn {
      width: 250px;
      padding: 10px 20px;
      font-size: 16px;
      font-weight: bold;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      outline: none;
      background: linear-gradient(45deg, #f08080, #ff69b4);
    }

    .custom-btn:hover {
      background: linear-gradient(45deg, #e34949, #f54d95);
    }

    a {
      text-decoration: none;
      color: white;
    }
  </style>
</head>

<body class="bg-dark text-light">
  <div class="ac"></div>
  <?php
  include 'lib/db_connect.php';
  include 'lib/navbar.php';
  include 'studentlogin.php';
  include 'adminlogin.php';
  include 'formhandle.php';
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SHOW TABLES";
  $result = $conn->query($sql);
  $tables = array();
  while ($row = $result->fetch_array()) {
    $tables[] = $row[0];
  }
  $conn->close();
  echo '
  <div class="container text-center">
    <div class="dropdown my-4">
      <button class="btn btn-secondary dropdown-toggle custom-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        View Tables
      </button>
      <ul class="dropdown-menu bg-dark">';
  foreach ($tables as $table) {
      echo '
        <li class="border text-light">
          <div class="d-flex justify-content-between align-items-center">
            <a href="tableview.php?tablename='.$table.'">'.$table.'</a>
            <button type="submit" onclick="confirmDelete(\''.$table.'\')" class="btn btn-danger">Delete</button>
          </div>
        </li>';
  }
  echo '
      </ul>
    </div>
  </div>
  
  <script>
    function confirmDelete(table) {
      if (confirm("Are you sure you want to delete this table?")) {
        window.location.href = "tabledelete.php?tablename=" + table;
      } else {
        // Cancelled, do nothing
      }
    }
  </script>';
   ?>
  <?php echo '
  </ul>
</div>
<div class="text-center">
<button type="button" class="btn btn-primary custom-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Create Table
</button>
</div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content bg-dark">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="createtable">Create table</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="create_table.php" method="post">
              <div class="mb-3">
                <label for="Table_Name" class="form-label ">Table Name</label>
                <input type="text" name="TableName" class="form-control" id="Name">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" onlclick="create()" class="btn btn-primary">Create table</button>
            </form>
            <script>
            // Get the select element
const select = document.getElementById("mySelect");
const selectedValue = localStorage.getItem("selectedValue");
if (selectedValue) {
  // If there is, set the selected value for the select element
  select.value = selectedValue;
}

// Listen for change events on the select element
select.addEventListener("change", function() {
  // Store the selected value in local storage
  localStorage.setItem("selectedValue", this.value);
});

            </script>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="studentloginpasschange">
  <div class="  text-center">
  <button type="button" class="btn btn-primary my-4 custom-btn" data-bs-toggle="modal" data-bs-target="#changepass">
 change password
  </button>
  </div>
  <div class="modal fade " id="changepass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Change password</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="changepass.php" method="Post">
        <div class="mb-3">
        <label for="pass" class="form-label">Enter Old Password</label>
        <input type="pass" name="pass1" class="form-control" id="Pass1">
        <label for="pass" class="form-label">Enter New Password</label>
        <input type="pass" name="pass2" class="form-control" id="Pass2">
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<div class="Adminloginpasschange">
<div class="  text-center">
<button type="button" class="btn btn-primary  custom-btn" data-bs-toggle="modal" data-bs-target="#changepass2">
change Admin password
</button>
</div>
<div class="modal fade " id="changepass2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content bg-dark">
    <div class="modal-header">
      <h1 class="modal-title fs-5" id="exampleModalLabel">Change password</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <form action="changepass2.php" method="Post">
      <div class="mb-3">
      <label for="pass" class="form-label">Enter Old Password</label>
      <input type="pass" name="pass1" class="form-control" id="Pass1">
      <label for="pass" class="form-label">Enter New Password</label>
      <input type="pass" name="pass2" class="form-control" id="Pass2">
   
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
  ' ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>

</body>

</html>