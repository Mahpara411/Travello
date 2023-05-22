<?php

include 'includes/config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$location = $_POST['location'];
$people = $_POST['people'];
$arrive = $_POST['arrive'];
$leave = $_POST['leave'];

    $insertQuery = "INSERT INTO `book`(`name`, `email`, `location`, `people`,`arrive`, `leave`) VALUES ('$name', '$email', '$location', '$people','$arrive', '$leave')";
    
    if(!mysqli_query($conn, $insertQuery))
    {
        echo ("Not inserted!");

    }
    else{
        
    echo "<script>alert('booking Done!')</script>"; 
    echo "<script>location.href='index.php'</script>";

    }

   
?>