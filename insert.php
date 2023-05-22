<?php

include 'includes/config.php';

$r_username = $_POST['r_username'];
$r_pass = $_POST['r_pass'];
$r_con_pass = $_POST['r_con_pass'];
$r_email = $_POST['r_email'];
$r_phone = $_POST['r_phone'];

$username_pattern = "/[A-Za-z .]{3,20}/";
$pass_pattern= "/^[a-z A-Z 0-9]{5}$/";
$email_pattern ="/[a-z 0-9]@gmail.com/";
$phone_pattern = "/(\+88|88|88-|\+88-)?01[3-9]{1}[0-9]{8}$/";

$duplicate_username = mysqli_query($conn,"SELECT * FROM `register1` WHERE username = 'r_username'");

if(mysqli_num_rows($duplicate_username)>0){
    echo "<script>alert('Username already used!')</script>";
    echo "<script>location.href='register1.php'</script>";
}

else if(!preg_match($username_pattern, $r_username)){
    echo "<script>alert('Invalid username!')</script>";
    echo "<script>location.href='register1.php'</script>";
}
else if(!preg_match($pass_pattern, $r_pass)){
    echo "<script>alert('Invalid password!')</script>";
    echo "<script>location.href='register1.php'</script>";
}
else if($r_pass !== $r_con_pass){
    echo "<script>alert('Passwords don't match!')</script>";
    echo "<script>location.href='register1.php'</script>";
}
else if(!preg_match($email_pattern, $r_email)){
    echo "<script>alert('Invalid email!')</script>";
    echo "<script>location.href='register1.php'</script>";
}
else if(!preg_match($phone_pattern, $r_phone)){
    echo "<script>alert('Invalid phone number!')</script>";
    echo "<script>location.href='register1.php'</script>";
}
else{
    $insertQuery = "INSERT INTO `register1`(`username`, `pass`, `email`, `phone`) VALUES ('$r_username','$r_pass','$r_email','$r_phone')"; 
    
    if(!mysqli_query($conn, $insertQuery))
    {
        die("Not inserted!");

    }
    else{
        
    echo "<script>alert('Registration Done!')</script>"; 
    echo "<script>location.href='login.php'</script>";

    }

}
?>