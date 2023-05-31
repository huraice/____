<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h2>Smart Voting</h2></header>
    <div id='form'>
        <form name='form' action="adminlogin.php" method= "POST">

        <h1>Admin Login</h1>
        <table >
            <tr>
                <td>
            <label for="">User Name </label></td>
            <td>
            <input type="text" id="user" name="user" placeholder="Admin ID"></td>
        </tr>
        <tr> 
            <td><label for="">Password</label></td>
            <td><input type="password" id="pass" name="pass" placeholder="Password"></td>
            
        </tr>
        <tr> <div class="log">
            <td colspan="2"><input type="submit" value="Login" name="adminlog" id="adminlog">
            </div></td>
            
        </tr>
        </table>

        
        </form>
        <br>



    </div>
    
</body>
</html>