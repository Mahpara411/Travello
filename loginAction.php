<?php

include 'includes/config.php';
$l_username = $_POST['l_username'];
$l_pass = $_POST['l_pass'];

$result = mysqli_query($conn,"SELECT * FROM `register1` WHERE username = '$l_username' And pass = '$l_pass' ");

if(mysqli_num_rows($result)) {
    session_start();
    $_SESSION['username'] = $l_username;
    echo "<script>location.href='home.php'</script>";
}
else{ 
    echo "<script>alert('Username and password not matching!')</script>";
    echo "<script>location.href='login.php'</script>";
}

?>
