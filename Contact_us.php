<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Alumni DBMS</title>

  <style>
    body {
      background: #007bff;
      background: linear-gradient(to right, #0062E6, #33AEFF);
    }

    .bg-image {
      background-image: url('https://source.unsplash.com/kKvQJ6rK6S4/660x1000');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .c-form {
      padding-top: 80px;
    }

    body {
      background-color: #923cb5;
      background-image: linear-gradient(147deg, #923cb5 0%, #000000 74%);
    }
  </style>
</head>

<body>
  <?php
  include 'lib/navbar.php';
  ?>
  <div class="c-form">
    <div class="container-fluid px-5 my-5">
      <div class="row justify-content-center">
        <div class="col-xl-10">
          <div class="card border-0 rounded-3 shadow-lg overflow-hidden">
            <div class="card-body p-0">
              <div class="row g-0">
                <div class="col-sm-6 d-none d-sm-block bg-image"></div>
                <div class="col-sm-6 p-4">
                  <div class="text-center">
                    <div class="h3 fw-light">Contact Form</div>
                    <p class="mb-4 text-muted">Split layout contact form</p>
                  </div>
                  <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="Contact_us_handle.php" method="post">

                    <!-- Name Input -->
                    <div class="form-floating mb-3">
                      <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
                      <label for="name">Name</label>
                      <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                    </div>

                    <!-- Email Input -->
                    <div class="form-floating mb-3">
                      <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                      <label for="emailAddress">Email Address</label>
                      <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                      <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
                    </div>

                    <!-- Message Input -->
                    <div class="form-floating mb-3">
                      <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
                      <label for="message">Message</label>
                      <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
                    </div>

                    <!-- Submit success message -->
                    <div class="d-none" id="submitSuccessMessage">
                      <div class="text-center mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        <p>To activate this form, sign up at</p>
                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                      </div>
                    </div>

                    <!-- Submit error message -->
                    <div class="d-none" id="submitErrorMessage">
                      <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>

                    <!-- Submit button -->
                    <div class="d-grid">
                      <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
                    </div>
                  </form>
                  <!-- End of contact form -->

                </div>
              </div>

            </div>
          </div>
          <?php
          include 'lib/footer.php';
          ?>
        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>

</html>