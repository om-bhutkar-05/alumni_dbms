<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .form-detail {
      margin-top: 40px;
    }

    .card-container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      margin-top: 5rem;
    }

    .card {
      width: 100%;
      max-width: 600px;
      display: flex;
      flex-direction: column;
      border: 1px solid #ccc;
      border-radius: 5px;
      overflow: hidden;
      margin-bottom: 20px;

    }

    .card:not(.active) {
      display: none;
    }

    .next,
    .prev {
      top: 50%;
      transform: translateY(-50%);
      z-index: 1;
    }

    .next,
    .prev {
      margin-top: 20px;
    }

    .card-body {
      background-color: lavender;
    }

    .card-footer {
      display: flex;
      position: relative;
      bottom: 0;
    }

    body {
      background-color: #923cb5;
      background-image: linear-gradient(147deg, #923cb5 0%, #000000 74%);
      height: 100vh;
    }
  </style>
  <?php
  include 'lib/db_connect.php';
  include 'lib/navbar.php';
  ?>
</head>

<body class="bg-dark text-light">
  <form action="formhandle.php" method="post">
    <input type="hidden" name="formIdentifier" value="page1">
    <div class="container mt-5 text-dark">
      <div class="row justify-content-center">
        <div class="col-lg-6 card-container ">
          <div class="card active mb-3">
            <div class="card-body ">
              <h5 class="card-title">Personal Information</h5>
              <div class="mb-3">
                <label for="Roll_no" class="form-label">Enter your Roll_Number</label>
                <input type="number" name="Roll_no" class="form-control" id="Roll_no" min="7" required>
              </div>
              <div class="mb-3">
                <label for="Name" class="form-label">Name</label>
                <input type="text" name="Name" class="form-control" id="Name" required>
              </div>
              <div class="mb-3">
                <label for="Email" class="form-label">Email address</label>
                <input type="email" name="Email" class="form-control" id="Email" required>
              </div>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">Academic Information</h5>
              <div class="mb-3">
                <label for="sem1" class="form-label">Semester 1 GPA</label>
                <input type="number" name="sem1" class="form-control" id="sem1" step="0.01" oninput="limitNumberLength(this, 4)" required>
              </div>
              <div class="mb-3">
                <label for="sem2" class="form-label">Semester 2 GPA</label>
                <input type="number" name="sem2" class="form-control" id="sem2" step="0.01" oninput="limitNumberLength(this, 4)" required>
              </div>
              <div class="mb-3">
                <label for="FY" class="form-label">FY GPA</label>
                <input type="number" name="FY" class="form-control" id="FY" step="0.01" oninput="limitNumberLength(this, 4)" required>
              </div>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">Academic Information</h5>
              <div class="mb-3">
                <label for="sem3" class="form-label">Semester 3 GPA</label>
                <input type="number" name="sem3" class="form-control" id="sem3" step="0.01" oninput="limitNumberLength(this, 4)" required>
              </div>
              <div class="mb-3">
                <label for="sem4" class="form-label">Semester 4 GPA</label>
                <input type="number" name="sem4" class="form-control" id="sem4" step="0.01" oninput="limitNumberLength(this, 4)" required>
              </div>
              <div class="mb-3">
                <label for="SY" class="form-label">SY GPA</label>
                <input type="number" name="SY" class="form-control" id="SY" step="0.01" oninput="limitNumberLength(this, 4)" required>
              </div>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">Academic Information</h5>
              <div class="mb-3">
                <label for="sem5" class="form-label">Semester 5 GPA</label>
                <input type="number" name="sem5" class="form-control" id="sem5" step="0.01" oninput="limitNumberLength(this, 4)" required>
              </div>
              <div class="mb-3">
                <label for="sem6" class="form-label">Semester 6 GPA</label>
                <input type="number" name="sem6" class="form-control" id="sem6" step="0.01" oninput="limitNumberLength(this, 4)" required>
              </div>
              <div class="mb-3">
                <label for="TY" class="form-label">TY GPA</label>
                <input type="number" name="TY" class="form-control" id="TY" step="0.01" oninput="limitNumberLength(this, 4)" required>
              </div>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">Academic Information</h5>
              <div class="mb-3">
                <label for="FYFEE" class="form-label">FY Fee_Reciept_Number</label>
                <input type="number" name="FYFEE" class="form-control" id="FYFEE" required>
              </div>

              <div class="mb-3">
                <label for="SYFEE" class="form-label">SY Fee_Reciept_Number</label>
                <input type="number" name="SYFEE" class="form-control" id="SYFEE" required>
              </div>
              <div class="mb-3">
                <label for="TYFEE" class="form-label">TY Fee_Reciept_Number</label>
                <input type="number" name="TYFEE" class="form-control" id="FYFEE" required>
              </div>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">Personal Information</h5>
              <div class="mb-3">
                <fieldset style="border:purple ; border-width:1px; border-style:solid;" required>
                  <h6>Scholarship recieved</h6>
                  <input type="radio" id="Yes" name="Scholarship" value="Yes">
                  <label for="Yes">Yes</label><br>
                  <input type="radio" id="No" name="Scholarship" value="No">
                  <label for="No">No</label><br>
                </fieldset>
              </div>
              <div class="mb-3">
                <label for="Contact_no" class="form-label">Contact_no</label>
                <input type="number" name="Contact_no" class="form-control" id="Contact_no" oninput="limitNumberLength(this, 10)" required>
              </div>
              <div class="mb-3">
                <label for="Category" class="form-label">Category</label>
                <input type="text" name="Category" class="form-control" placeholder="OPEN, OBC, etc." id="Category" required>
                <div class="mb-3">
                  <label for="Address" class="form-label">Address</label>
                  <input type="text" name="Address" class="form-control" id="Address" required>
                </div>

                <button type="submit" class="btn btn-primary" onclick="checkURLAfterDelay()">Submit</button>
              </div>
            </div>
          </div>
  </form>
  <div class="card-footer">
    <button class="btn btn-primary prev mx-2" type="button">Previous</button>
    <button class="btn btn-primary next" type="button" style="width: 80px;">Next</button>
  </div>
  </div>
  </div>

  <script>
    const cards = document.querySelectorAll('.card-container .card');
    let currentIndex = 0;

    cards.forEach((card, index) => {
      if (index !== currentIndex) {
        card.classList.remove('active');
      }
    });

    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');

    prevBtn.addEventListener('click', () => {
      if (currentIndex > 0) {
        cards[currentIndex].classList.remove('active');
        currentIndex--;
        cards[currentIndex].classList.add('active');
      }
    });

    nextBtn.addEventListener('click', () => {
      if (currentIndex < cards.length - 1) {
        cards[currentIndex].classList.remove('active');
        currentIndex++;
        cards[currentIndex].classList.add('active');
      }
    });
  </script>
  <script>
    function limitNumberLength(input, maxLength) {
      if (input.value.length > maxLength) {
        input.value = input.value.slice(0, maxLength);
      }
    }
  </script>
  <script>
    function checkURLAfterDelay() {

      const currentURL = window.location.href;


      setTimeout(() => {

        if (window.location.href === currentURL) {
          alert('Fill all the fields in the given form');
        }
      }, 1000);
    }
    window.onload = checkURLAfterDelay;
  </script>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</body>

</html>