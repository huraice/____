
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
$username=$_POST['user'];
$password=$_POST['pass'];
$mobile=$_POST['mobile'];

// Insert data into the database
$sql = "INSERT INTO users(username, password, mobile) VALUES ('$username','$password','$mobile')";

if (mysqli_query($conn, $sql)) {
    echo '<script>
window.location.href ="userlogin.php";
alert("New Registration Completed ")
</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>