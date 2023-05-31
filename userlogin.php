<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head><body>
   <header><h2>Smart Voting</h2></header>
    <div id='form'>
        <form name='form' action="userloginphp.php" method= "POST">

        <h1>Login Form</h1>
        <table>
            <tr>
                <td>
            <label for="">username</label></td>
            <td>
            <input type="text" id="usernamelog" name="usernamelog" placeholder="username"></td>
        </tr>
        <tr> 
            <td><label for="">Password</label></td>
            <td><input type="password" id="passusr" name="passusr" placeholder="password"></td>
            
        </tr>
       
        </table>

        <input type="submit" value="Login" name="usrlogin" id="usrlogin">
        
        </form>
        <br>

        <a href="userregister.php">New User ?</a>


    </div>
    
</body>
</html>
