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
    <header>
        <h2>Smart Voting</h2>
    </header>
    <div id='form'>
        <form name='form' action="usrregi.php" method="POST">
            <h3>New Login</h3>
            <h5>Enter Your Details</h5>
            <table>
                <tr>
                    <td>
                        <label for="user">Username </label>
                    </td>
                    <td>
                        <input required type="text" id="user" name="user" placeholder="username">
                    </td>
                </tr>
                <tr>
                    <td><label  for="password">Password</label></td>
                    <td><input required type="password" id="pass" name="pass" placeholder="password"></td>
                </tr>
                <tr>
                    <td>
                        <label for="">Mobile Number</label>
                    </td>
                    <td><input type="tel" pattern="[0-9]{10}" required  type="text" id="mobile" name="mobile" placeholder="000xxxxxxxx"></td>
                </tr>
            </table>

            <input type="submit" value="Sign in" name="btn" id="submit">

        </form>
        <br>




    </div>



</body>

</html>