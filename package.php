<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
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


<div class="heading" style="background:url(images/header-bg-2.jpg) no-repeat">
    <h1>Package</h1>
</div>

<!-- package section  -->

<section class="package">

    <h1 class="heading-title">Top destinations</h1>

    <div class="box-container">

        <?php
        // Establish database connection
        $connection = mysqli_connect('localhost', 'root', '', 'book_db');
        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Query to fetch packages
        $sql = "SELECT * FROM packages";
        $result = mysqli_query($connection, $sql);

        // Check if there are any packages
        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="box">
                    <div class="image">
                    <img src="<?php echo $row['image_url']; ?>" alt="">
                    </div>
                    <div class="content">
                        <h3><?php echo $row['package_name']; ?></h3>
                        <p><?php echo $row['description']; ?></p>
                        <p><strong>Price:</strong> $<?php echo $row['price']; ?> | <strong>Duration:</strong> <?php echo $row['duration']; ?></p>
                        <a href="book.php" class="btn">Book now</a>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "No packages available.";
        }

        // Close connection
        mysqli_close($connection);
        ?>

    </div>

    <div class="load-more"><span class="btn">Load more</span></div>

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
            <a href="https://github.com/knilesh2212" target="_blank"><span>knilesh2212</span></a>
            | All rights are reserved!
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
    
</body>
</html>
