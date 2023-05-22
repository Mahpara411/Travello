<?php
session_start();

if(isset($_SESSION['username'])){

    include 'index.php';

    echo "<h2>Hello ".$_SESSION['username'];
    echo "<br><a href='logout.php'><input type='button' value = 'logout' name='username'></a>";   

}
    else{      
        echo "<script>alert('URL access denied!')</script>";
        echo "<script>location.href='login.php'</script>";
    }

?>