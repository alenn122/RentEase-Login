<!-- DESIGNED AND DEVELOPED BY JONATHAN ALLEN MINA - FEBRUARY 2025 -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FAVICON -->
    <link rel="icon" href="images/favicon.png" type="image/png">
    <!-- BOOTSTRAP CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous">
    <!-- BOOTSTRAP ICON -->
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="style.css">
    <title>RentEase</title>
  </head>
  <body>
    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-lg p-4 fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">RentEase</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#index">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#list">List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#blog">Blog</a>
            </li>
          </ul>
          <a href="users/login.php"><button class="btn btn-main">Log in</button></a>
        </div>
      </div>
    </nav>

    <!-- INDEX SECTION -->
    <style>
      #index{
        background: linear-gradient(rgba(0, 0, 0, 0.822), rgba(4, 14, 2, 0.712)), url(images/list2.jpg);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
      }
    </style>
    <div id="index">
      <div class="container vh-100 d-flex align-items-center justify-content-center">
        <div class="row text-center">
          <div class="col-lg-12">
            <p class="lead text-white fw-bolder">— RentEase —</p>
            <h1>Find Your Ideal Apartment</h1>
            <button class="btn btn-main">View Listings</button>
            <button class="btn btn-main2">Rent Now</button>
          </div>
        </div>
      </div>
    </div>

    <!-- ABOUT SECTION -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-12">
            <img class="mt-3" src="images/about.png" alt="">
          </div>
          <div class="col-lg-6 col-sm-12">
            <span>About Us</span>
            <h1 class="mb-2">About Us</h1>
            <p>RentEase is dedicated to simplifying your apartment search. We offer a curated selection of quality rentals, making it easy to find your perfect home.</p>
            <p>Our platform provides detailed listings, photos, and user-friendly tools to streamline the renting process.</p>
            <p>We're committed to connecting renters with comfortable and convenient living spaces.</p>
            <button class="btn btn-main2 text-dark">Read more</button>
          </div>
        </div>
      </div>
    </section>

    <!-- FEATURED SECTION-->
    <div id="feature">
      <div class="container">
        <div class="row text-center g-4">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="feature-item w-100 h-100">
              <div class="feature-icon">
                <i class="bi bi-patch-check-fill"></i>
                <p class="mt-2 text-white">Verified Listings</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="feature-item w-100 h-100">
              <div class="feature-icon">
                <i class="bi bi-calendar-check"></i>
                <p class="mt-2 text-white">Easy Booking & Scheduling</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="feature-item w-100 h-100">
              <div class="feature-icon">
                <i class="bi bi-file-lock2-fill"></i>
                <p class="mt-2 text-white">Secure Transactions</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="feature-item w-100 h-100">
              <div class="feature-icon">
                <i class="bi bi-person-circle"></i>
                <p class="mt-2 text-white">24/7 Customer Support</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- LIST SECTION -->
    <section id="list">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="title">
              <span>List</span>
              <h1>List</h1>
              <p class="mb-4">Featured Apartments</p>
            </div>
          </div>
        </div>

        <div class="row gy-4">
          <div class="col-lg-3 col-sm-12">
            <div class="list-content">
              <img src="images/list1.jpg" alt="">
              <h6 class="mt-2">Spacious 2 - Bedroom Condo</h6>
              <p> Modern 2-bedroom, 2-bathroom condo with balcony and parking.</p>
              <div class="list-icon">
                <button class="btn btn-main btn-sm">Rent Now</button>
                <a href="#list"><i class="bi bi-heart-fill"></i></a>
                <a href="#list"><i class="bi bi-info-circle-fill"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-sm-12">
            <div class="list-content">
              <img src="images/list2.jpg" alt="">
              <h6 class="mt-2">Spacious 2 - Bedroom Condo</h6>
              <p> Modern 2-bedroom, 2-bathroom condo with balcony and parking.</p>
              <div class="list-icon">
                <button class="btn btn-main btn-sm">Rent Now</button>
                <a href="#list"><i class="bi bi-heart-fill"></i></a>
                <a href="#list"><i class="bi bi-info-circle-fill"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-sm-12">
            <div class="list-content">
              <img src="images/list3.jpg" alt="">
              <h6 class="mt-2">Spacious 2 - Bedroom Condo</h6>
              <p> Modern 2-bedroom, 2-bathroom condo with balcony and parking.</p>
              <div class="list-icon">
                <button class="btn btn-main btn-sm">Rent Now</button>
                <a href="#list"><i class="bi bi-heart-fill"></i></a>
                <a href="#list"><i class="bi bi-info-circle-fill"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-sm-12">
            <div class="list-content">
              <img src="images/list4.jpg" alt="">
              <h6 class="mt-2">Spacious 2 - Bedroom Condo</h6>
              <p> Modern 2-bedroom, 2-bathroom condo with balcony and parking.</p>
              <div class="list-icon">
                <button class="btn btn-main btn-sm">Rent Now</button>
                <a href="#list"><i class="bi bi-heart-fill"></i></a>
                <a href="#list"><i class="bi bi-info-circle-fill"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 d-flex justify-content-end align-items-center
          mt-4">
          <div class="view-all">
            <button class="btn btn-main btn-sm">view all</button>

          </div>
        </div>
      </div>
    </section>

    <!-- INSTAGRAM SECTION -->
    <div class="row g-0" id="instagram">
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="insta">
          <img src="images/insta1.jpg" alt="">
          <a href="#instagram" class="insta-link"><i class="bi bi-instagram"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="insta">
          <img src="images/insta2.jpg" alt="">
          <a href="#instagram" class="insta-link"><i class="bi bi-instagram"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="insta">
          <img src="images/insta3.jpg" alt="">
          <a href="#instagram" class="insta-link"><i class="bi bi-instagram"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="insta">
          <img src="images/insta4.jpg" alt="">
          <a href="#instagram" class="insta-link"><i class="bi bi-instagram"></i></a>
        </div>
      </div>
    </div>

    <!-- BLOG SECTION -->
    <section id="blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="title">
              <span>Blog</span>
              <h1>Blog</h1>
              <p class="mb-4">Latest from the RentEase Blog</p>
            </div>
          </div>
        </div>

        <div class="row gy-4">
          <div class="col-lg-4 col-sm-12">
            <div class="blog-content">
              <img src="images/blog1.jpg" alt="">
              <div class="blog-text">
                <p class="lead mt-2">Finding the Perfect Apartment</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Dignissimos aspernatur commodi quia dolorem vitae quae
                  officiis labore totam quam eaque.</p>
                <button class="btn btn-main2 text-dark mb-3">Read more</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-12">
            <div class="blog-content">
              <img src="images/blog2.jpg" alt="">
              <div class="blog-text">
                <p class="lead mt-2">Finding the Perfect Apartment</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Dignissimos aspernatur commodi quia dolorem vitae quae
                  officiis labore totam quam eaque.</p>
                <button class="btn btn-main2 text-dark mb-3">Read more</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-12">
            <div class="blog-content">
              <img src="images/blog3.jpg" alt="">
              <div class="blog-text">
                <p class="lead mt-2">Finding the Perfect Apartment</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Dignissimos aspernatur commodi quia dolorem vitae quae
                  officiis labore totam quam eaque.</p>
                <button class="btn btn-main2 text-dark mb-3">Read more</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER SECTION -->
    <footer id="footer">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-3 col-sm-12">
            <a class="navbar-brand fs-1" href="#">RentEase</a>
            <p>Your dream apartment is just a click away.</p>
            <div class="socials">
              <a href="#footer"><i class="bi bi-facebook"></i></a>
              <a href="#footer"><i class="bi bi-instagram"></i></a>
              <a href="#footer"><i class="bi bi-twitter"></i></a>
              <a href="#footer"><i class="bi bi-linkedin"></i></a>
              <a href="https://github.com/alenn122" target="_blank"><i class="bi bi-github"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-sm-12 ms-auto">
            <h6>Company</h6>
            <p>About Us</p>
            <p>Careers</p>
            <p>Team</p>
          </div>

          <div class="col-lg-2 col-sm-12">
            <h6>Features</h6>
            <p>FAQ</p>
            <p>Blog</p>
          </div>

          <div class="col-lg-2 col-sm-12">
            <h6>Help</h6>
            <p>Get Support</p>
            <p>Services</p>
            <p>Privacy Policy</p>
            <p>Security</p>
            <p>Terms of Use</p>
          </div>
        </div>
      </div>
      <div class="credits">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-auto">
              <p class="pt-5 mb-0">© 2025 RentEase. All Rights Reserved.</p>
            </div>
            <div class="col-auto">
              <p class="pt-5 mb-0">Designed and Developed by <a href="https://www.facebook.com/jonathanallen.wagasmina"
                  target="_blank">alenn</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- ARROW UP BTN -->
    <a href="#home" class="up-arrow">
      <i class="bi bi-arrow-up-circle"></i>
    </a>

    <!-- BOOTSTRAP JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
    <!-- MAIN JS -->
    <script src="script.js"></script>
  </body>
</html>