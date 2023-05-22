<?php

        include('includes/config.php');
        include('functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAVELLO</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" 
    referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    

<header>

    <a class="logo"><span>T</span>ravello</a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#packages">destinations</a>
        <a href="#book">book</a>
        <a href="#services">hotels</a>
        <a href="#contact">contact</a>
        
    </nav>

</header>

      
    <section class="home" id="home">
    
    <div class="content">
    <h3>Don't Count The Days,<br> make The Days Count</h3>
        <p>Visit Your Favourite Places with us...</p>
        <a class="btn" href='#packages'>discover more</a>
    </div>


    <div class="video-container">
        <video src="images/vid.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<div class="form">                  
         <form action="loginAction.php" method="POST">
              
         <div class="xyz">
             <h1>Login Here</h1>
         </div>
                    
              <div style="padding-bottom: 30px;"> 
                 <div> <h1>Username</h1>
                <input type="text" name="l_username" placeholder="enter your username"></div>
                <div style="padding-top: 20px;" ><h1>Password</h1> 
                <input type="text" name="l_pass" placeholder="enter 5 characters"></div>

                <button class="btnn">
                     <a href="home.php">Login</a>
                 </button>

                 <p class="link" style="padding-right: 30px;" >Don't have an account?<br>
                 <a href="register1.php">Register</a> here!</a></p>
           
             </div>     
            </form>
                
      </div>






<section class="packages" id="packages">

    <h1 class="heading">
        <span>D</span>
        <span>E</span>
        <span>S</span>
        <span>T</span>
        <span>I</span>
        <span>N</span>
        <span>A</span>
        <span>T</span>
        <span>I</span>
        <span>O</span>
        <span>N</span>
        <span>S</span>
    </h1>

    <div class="row px-1">
        <div class="col-md-10">

        <div class="row">
        
        
        <?php
        //calling funtion
        getpackages();
       

        ?>


</section>
</body>
</html>