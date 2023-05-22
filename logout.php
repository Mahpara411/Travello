<?php
session_start();

if(isset($_SESSION['username'])){

    session_destroy();  
    echo "<script>location.href='login.php'</script>";

}
    else{
        
        echo "<script>alert('No access from URL!')</script>";
        echo "<script>location.href='login.php'</script>";
    }

?>