<?php
    // Connect to the database
    $connection = mysqli_connect('localhost', 'root', '', 'book_db');

    // Check if connection is successful
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Fetch records from the database
    $query = "SELECT * FROM book_form";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query Failed: " . mysqli_error($connection));
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin panel</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="icon" href="images/logo.png" type="image/png" sizes="32x32">
</head>

<body>
  <!-- Header section -->
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

  <div class="heading" style="background: url(images/header-bg-3.jpg) no-repeat">
    <h1>Admin panel</h1>
  </div>

  <!-- add package   -->

  <section class="add_package">
    <h1 class="heading-title">Add New Package</h1>

    <form action="add_package.php" method="post" class="package-form" enctype="multipart/form-data">
      <div class="flex">
        <div class="inputBox">
          <span>Package Name:</span>
          <input type="text" id="package_name" name="package_name" required />
        </div>

        <div class="inputBox">
          <span>Description:</span>
          <input type="text" id="description" name="description" required />
        </div>
        <div class="inputBox">
          <span>Price:</span>
          <input type="number" id="price" name="price" step="0.01" min="0" required />
        </div>
        <div class="inputBox">
          <span>Duration:</span>
          <input type="text" id="duration" name="duration" required />
        </div>
        <div class="inputBox">
          <span>Upload Image:</span>
          <input type="file" id="image" name="image" accept="image/*" required />
        </div>
      </div>

      <input type="submit" value="Submit" class="btn" name="send" />
    </form>
  </section>


  <!-- booking section -->
  <h1 class="heading-title">Current booking</h1>

  <section class="order-container">

    <?php
        if (mysqli_num_rows($result) >
      0) { while ($row = mysqli_fetch_assoc($result)) { echo '
      <div class="order-card">
        '; echo '
        <h2>Booking #' . $row['id'] . '</h2>
        '; echo '
        <p><span>Name:</span> ' . $row['name'] . '</p>
        '; echo '
        <p><span>Email:</span> ' . $row['email'] . '</p>
        '; echo '
        <p><span>Phone:</span> ' . $row['phone'] . '</p>
        '; echo '
        <p><span>Address:</span> ' . $row['address'] . '</p>
        '; echo '
        <p><span>Location:</span> ' . $row['location'] . '</p>
        '; echo '
        <p><span>Guests:</span> ' . $row['guests'] . '</p>
        '; echo '
        <p><span>Arrivals:</span> ' . $row['arrivals'] . '</p>
        '; echo '
        <p><span>Leaving:</span> ' . $row['leaving'] . '</p>
        '; echo '
      </div>
      '; } } else { echo '
      <p>No orders found.</p>
      '; } ?>
  </section>


</body>

</html>

<?php
    mysqli_close($connection);
?>