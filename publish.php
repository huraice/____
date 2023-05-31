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

// Retrieve voting results from the database
$sql = "SELECT * FROM candidates";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $resultHtml = "<h2>Voting Results</h2>";
  $resultHtml .= "<ul>";
  while ($row = mysqli_fetch_assoc($result)) {
    $candidateName = $row['Name1'];
    $voteCount = $row['votes'];

    $resultHtml .= "<li>$candidateName: $voteCount votes</li>";
  }
  $resultHtml .= "</ul>";

  echo $resultHtml;
} else {
  echo "No voting results found.";
}

mysqli_close($conn);
?>
