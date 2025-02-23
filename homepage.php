<?php
session_start();
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FAVICON -->
    <link rel="icon" href="images/favicon.png" type="image/png">
    <!-- BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- BOOTSTRAP ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="style.css">
    <title>RentEase</title>
</head>

<body>
    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-lg p-4 fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">RentEase</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#list">List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#rent">Rent</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#account">Account</a>
                    </li>
                </ul>
                <a href="users/logout.php"><button class="btn btn-main">Logout</button></a>
            </div>
        </div>
    </nav>

    <!-- HOME SECTION -->
    <div id="home">
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


        <!-- BOOTSTRAP JS -->
        <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
    <!-- MAIN JS -->
    <script src="script.js"></script>

</body>
</html>