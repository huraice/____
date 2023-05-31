
<!DOCTYPE html>
<html>
<head>
  <title>Vote for Candidates</title>
</head>
<body>
  <h1>Vote for Candidates</h1>
  <form action="vote.php" method="POST">
    <label for="candidate">Select a candidate:</label>
    <select id="candidate" name="candidate">
      
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

        // Retrieve candidate data from the database
        $sql = "SELECT * FROM candidates";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $row['id'] . "'>" . $row['Name1'] .  "</option>";
          }
        } else {
          echo "<option value=''>No candidates found</option>";
        }

        mysqli_close($conn);
      ?>
    </select><br><br>
    <label for="userId">User ID:</label>
    <input type="text" id="userId" name="userId" required><br><br>
    <input type="submit" value="Vote">
  </form>
</body>
</html>