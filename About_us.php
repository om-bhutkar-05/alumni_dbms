<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>About Us</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <link rel="stylesheet" href="style.css">
  <style>
    .about-section {
      padding-top: 80px;
      /* adjust as needed */
    }

    body {
      background-color: #923cb5;
      background-image: linear-gradient(147deg, #923cb5 0%, #000000 74%);
    }
  </style>
</head>

<body class="text-white">
  <?php
  include 'lib/navbar.php';
  ?>
  <section class="hero-section about-section">
    <section class="hero-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h1>About Us</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor mauris sit amet odio gravida, vel tincidunt tortor tristique. Nunc id velit id diam bibendum vestibulum. Nulla ut dui vel augue interdum semper.</p>
            <button class="btn btn-primary">Learn More</button>
          </div>
          <div class="col-lg-6">
            <img src="https://via.placeholder.com/500x300.png?text=Placeholder+Image" alt="Hero image" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

    <!-- Team section -->
    <section class="team-section">
      <div class="container">
        <h2>Our Team</h2>
        <p class="lead">Meet the talented individuals who make our company great.</p>
        <div class="row g-4">
          <div class="col-lg-3">
            <div class="card">
              <img src="https://via.placeholder.com/300x300.png?text=Placeholder+Image" alt="Team member" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">hemant chakane</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor mauris sit amet odio gravida, vel tincidunt tortor tristique.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card">
              <img src="https://via.placeholder.com/300x300.png?text=Placeholder+Image" alt="Team member"  class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Om bhutkar</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor mauris sit amet odio gravida, vel tincidunt tortor tristique.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card">
              <img src="https://via.placeholder.com/300x300.png?text=Placeholder+Image" alt="Team member" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">shravan kalzunkar</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur
                  adipiscing elit. Duis auctor mauris sit amet odio gravida, vel tincidunt tortor tristique.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card">
              <img src="https://via.placeholder.com/300x300.png?text=Placeholder+Image" alt="Team member" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Admin</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor mauris sit amet odio gravida, vel tincidunt tortor tristique.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials section -->
    <section class="testimonials-section">
      <div class="container">
        <h2>Testimonials</h2>
        <p class="lead">See what our customers have to say about us.</p>
        <div class="row g-4">
          <div class="col-lg-4">
            <div class="testimonial">
              <p class="quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor mauris sit amet odio gravida, vel tincidunt tortor tristique."</p>
              <p class="author">John Smith</p>
              <p class="company">ABC Company</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial">
              <p class="quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor mauris sit amet odio gravida, vel tincidunt tortor tristique."</p>
              <p class="author">Jane Doe</p>
              <p class="company">XYZ Inc.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial">
              <p class="quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor mauris sit amet odio gravida, vel tincidunt tortor tristique."</p>
              <p class="author">Bob Johnson</p>
              <p class="company">123 Corporation</p>
            </div>
          </div>
        </div>
      </div>
    </section>

  </section>
  <?php
  include 'lib/footer.php';
  ?>
  <!-- Bootstrap 5 JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
  <!-- Font Awesome icons -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>

</html>