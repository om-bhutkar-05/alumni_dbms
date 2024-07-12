<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alumni DBMS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .carousel-item img {
      object-fit: cover;
      height: 500px;
    }

    .carousel {
      width: 80%;
      height: auto;
      margin: 0 auto;
    }

    .index {
      margin-top: 55px;
    }

    .button-gradient {
      position: relative;
      overflow: hidden;
      border: none;
      background-image: linear-gradient(to right, #8A2387, #E94057, #F27121);
      transition: all 0.3s ease-out;
    }

    .button-gradient:hover {
      transform: scale(1.05);
    }

    .button-gradient::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 0;
      height: 0;
      background-color: rgba(255, 255, 255, 0.5);
      border-radius: 50%;
      opacity: 0;
      transition: all 0.5s ease-out;
    }

    .button-gradient:hover::before {
      width: 200%;
      height: 200%;
      opacity: 1;
    }

    body {
      background-color: #923cb5;
      background-image: linear-gradient(147deg, #923cb5 0%, #000000 74%);
    }
  </style>
</head>

<body class="text-white">
<?php
  include 'lib/db_connect.php';
  include 'lib/navbar.php';
  include 'studentlogin.php';
  include 'adminlogin.php';
  ?>
  <div class="container-fluid p-0 index ">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/Slide1.jpg" class="d-block w-100" alt="slide1">
        </div>
        <div class="carousel-item">
          <img src="assets/Slide2.jpg" class="d-block w-100" alt="slide2">
        </div>
        <div class="carousel-item">
          <img src="assets/Slide3.jpg" class="d-block w-100" alt="slide3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <div class="container my-4">
    <div class="row justify-content-center text-center">
      <div class="col-md-4">
        <button type="button" class="btn btn-primary btn-lg w-100 button-gradient my-1" data-bs-toggle="modal" data-bs-target="#studentlogin">
          Student Login
        </button>
      </div>
      <div class="col-md-4 ">
        <button type="button" class="btn btn-primary btn-lg w-100 button-gradient my-1" data-bs-toggle="modal" data-bs-target="#adminlogin">
          Admin Login
        </button>
      </div>
    </div>
  </div>
  

  <?php include "lib/footer.php" ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
</body>

</html>