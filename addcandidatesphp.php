<?php
// Assuming you have a MySQL database connection
$host = "localhost";
$username = "root";
$password = "";
$database = 'smart_voting_system';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['party'];

$mobile = $_POST['Mobile'];


// // Process and store the image
$image = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];
$image_type = $_FILES['image']['type'];


// // Move the uploaded image to a desired location
$upload_dir = "img/";
$target_file = __DIR__ . "/" . $upload_dir . basename($image);
$target_file = $upload_dir . basename($image);

move_uploaded_file($image_tmp, $target_file);

// // Insert data into the database
$sql = "INSERT INTO candidates (Name1, party, mobile,image) VALUES ('$name', '$email', '$mobile', '$target_file')";

if (mysqli_query($conn, $sql)) {
  echo '<script>
  window.location.href ="addcandidates.php";
  alert("New Registration Completed ")
  </script>';

  

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>