<?php
// Start session
session_start();

include('connection.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Smart Voting System</title>

    <link rel="stylesheet" href="stylebody.css" type="text/css" />
  </head>
  <body>
    
      <header><h2>Smart Voting</h2></header>
      <div id="home" class="home">
        <caption>
          <h1 align="center">Welcome...!</h1>
        </caption>
        <br /><br /><br />


        
          <div id="linkcolor1">
            <a href="userlogin.php"> User Login</a>
            <a href="admin.php" > Admin Login</a>
          </div>

          
        
      </div>
    
    
  </body>
</html>
