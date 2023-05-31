<?php
include("connection.php");
if(isset($_POST['adminlog'])){
    $username= $_POST['user'];
    $password= $_POST['pass'];
    $sql=  "select * from admin where admin_usr = '$username' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        header("Location: adminpage.php");
    } else {
        echo '<script>
window.location.href ="admin.php";
alert("Login failed. Invalid username or password ")
</script>';

    }
    

}