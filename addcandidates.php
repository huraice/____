<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>

    <header>Smart Voting System</header>

    <div id="form">
        <form action="addcandidatesphp.php" method="POST">
            <h3>New Candidates Uploading Portal</h3>
            <table>
                <tr>
                    <td><label for="name">Name</label></td>
                    <td><input type="text" name="name" required placeholder="Enter Name" id="name"></td>
                </tr>
                <tr>
                    <td><label for="party">Party</label></td>
                    <td><input type="name" name="party" required placeholder="Enter Party Name" id="party"></td>


                </tr>
                <tr>
                    <td><label for="number">Mobile</label></td>
                    <td><input type="tel" pattern="[0-9]{10}" required name="Mobile" placeholder="0000xxxxxx" id="Mobile"></td>


                </tr>
                <tr>
                    <td>
                    <label for="image">Image:</label>
                    </td>
                    <td><input type="file" id="image" name="image" required><br></td>
                </tr>
                
                <!-- <tr>
                    <td colspan="2">
            <input type="file" name="image" id="image" accept="image/png, image/jpeg"></td>
                </tr> -->
                <!-- <tr>
                    <td><label for="symbol">upload symbol</label></td>

                </tr>
                <tr>
                    <td colspan="2">
            <input type="file" name="image" id="symbol" accept="image/png, image/jpeg"></td>
                </tr> -->
            </table>
            <br>
            <input type="submit" name="upload" id="upload" value="UPLOAD" >
        </form>
    </div>

</body>

</html>