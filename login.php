<?php
include("connection.php");
if(isset($_POST['usrlogin'])){
    $username= $_POST['usernamelog'];
    $password= $_POST['passusr'];
    $sql=  "select * from users where username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        header("Location: vote.php");
    } else {
        echo '<script>
window.location.href ="userlogin.php";
alert("Login failed. Invalid username or password ")
</script>';

    }
    

}