
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Assuming you have a MySQL database connection
$host = "localhost";
$username = "root";
$password = "";
$database = 'smart_voting_system';

  $conn = mysqli_connect($host, $username, $password, $database);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Retrieve selected candidate ID and user ID from the form submission
  $candidateId = $_POST['candidate'];
  $userId = $_POST['userId'];

  // Check if the user has already voted
  $sql = "SELECT * FROM votes WHERE candidate_id = $candidateId AND user_id = '$userId'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    echo "You have already voted for this candidate.";
  } else {
    // Update the vote count in the database for the selected candidate
    
    $sql = "UPDATE candidates SET votes = votes + 1 WHERE id = $candidateId";

    if (mysqli_query($conn, $sql)) {
      // Insert the vote into the votes table to track the user's vote
      $sql = "INSERT INTO votes (candidate_id, user_id) VALUES ($candidateId, '$userId')";
      mysqli_query($conn, $sql);

      echo '<script>
window.location.href ="index.php";
alert("Vote Submitted Successfully ")
</script>';

    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }

  mysqli_close($conn);
}
?>
