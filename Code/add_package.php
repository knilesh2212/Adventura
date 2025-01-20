<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'book_db';

$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $package_name = mysqli_real_escape_string($connection, $_POST['package_name']);
    $description = mysqli_real_escape_string($connection, $_POST['description']);
    $price = $_POST['price'];
    $duration = mysqli_real_escape_string($connection, $_POST['duration']);
    
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        
        
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $image_url = $target_file; 

                
                $sql = "INSERT INTO packages (package_name, description, price, duration, image_url) 
                        VALUES ('$package_name', '$description', '$price', '$duration', '$image_url')";

                if (mysqli_query($connection, $sql)) {
                   
                    header("Location: admin.php");
                    exit();
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "File is not an image.";
        }
    } else {
        echo "No file uploaded or an error occurred.";
    }
}

mysqli_close($connection);
?>
