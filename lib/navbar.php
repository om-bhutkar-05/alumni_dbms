<?php

echo '
   <div class="bg-dark ">
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top border border-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">IOPE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse navbar-menu " id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="About_us.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Contact_us.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
 </div>
 ';
 if(isset($_GET['loginsuccess']) && $_GET['loginsuccess']=='false'){
echo '<script type="text/javascript">
function showAlert() {
    alert("Invalid credentials");
}

window.onload = function() {
    showAlert();
    setTimeout(function() {
        window.close();
    }, 3000); 
};
</script>';
 }
?>

