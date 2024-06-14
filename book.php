<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="icon" href="images/logo.png" type="image/png" sizes="32x32">
  </head>
  <body>
    <!-- header section  -->

    <section class="header">
      <a href="index.html" class="logo">Adventura</a>

      <nav class="navbar">
        <a href="index.html">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
        <a href="book.php">Book</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <div
      class="heading"
      style="background: url(images/header-bg-3.jpg) no-repeat"
    >
      <h1>Book now</h1>
    </div>

    <!-- booking section -->

    <section class="booking">
      <h1 class="heading-title">Book your trip!</h1>

      <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
          <div class="inputBox">
            <span>Name :</span>
            <input type="text" placeholder="Enter your name" name="name" />
          </div>
          <div class="inputBox">
            <span>Email :</span>
            <input type="email" placeholder="Enter your email" name="email" />
          </div>
          <div class="inputBox">
            <span>Phone :</span>
            <input type="number" placeholder="Enter your number" name="phone" />
          </div>
          <div class="inputBox">
            <span>Address :</span>
            <input
              type="text"
              placeholder="Enter your address"
              name="address"
            />
          </div>
          <div class="inputBox">
            <span>Where to :</span>
            <input
              type="text"
              placeholder="Place you want to visit"
              name="location"
            />
          </div>
          <div class="inputBox">
            <span>How many :</span>
            <input type="number" placeholder="Number of guests" name="guests" />
          </div>
          <div class="inputBox">
            <span>Arrivals :</span>
            <input type="date" name="arrivals" />
          </div>
          <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving" />
          </div>
        </div>

        <input type="submit" value="submit" class="btn" name="send" />
      </form>
    </section>

    <!-- Footer section -->

    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>Quick links</h3>
          <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
          <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
          <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
          <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
        </div>

        <div class="box">
          <h3>Extra links</h3>
          <a href="#"><i class="fas fa-angle-right"></i> Ask Question</a>
          <a href="#"><i class="fas fa-angle-right"></i> About us</a>
          <a href="#"><i class="fas fa-angle-right"></i> Privacy policy</a>
          <a href="#"><i class="fas fa-angle-right"></i> Terms of use</a>
        </div>

        <div class="box">
          <h3>Contact info</h3>
          <a href="#"><i class="fas fa-phone"></i> +91 1111-222222</a>
          <a href="#"><i class="fas fa-phone"></i> +91 4432-456485</a>
          <a href="#"><i class="fas fa-envelope"></i> help@gmail.com</a>
          <a href="#"><i class="fas fa-map"></i> Ahmadabad, india - 380059</a>
        </div>

        <div class="box">
          <h3>Follow us</h3>
          <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
          <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
          <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
          <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
        </div>
      </div>

      <div class="credit">
        Created by
        <a href="https://github.com/knilesh2212" target="_blank"
          ><span>knilesh2212</span></a
        >
        | All rights are reserved!
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
