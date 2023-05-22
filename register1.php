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
        <a href="packages" class="btn">discover more</a>
    </div>


    <div class="video-container">
        <video src="images/vid.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<div class="form">                  
    
    <form action="insert.php" method="post">
              
          <div> <h1>Username</h1>
          <input type="text" name="r_username" placeholder="enter your name" ></div>

          <div style="padding-top: 10px;"><h1>Password</h1> 
          <input type="text" name="r_pass" placeholder="enter 5 characters"></div>
          
          <div style="padding-top: 10px;"><h1> Confirm Password</h1> 
          <input type="text" name="r_con_pass" placeholder="enter 5 characters"></div>

          <div style="padding-top: 10px;"> <h1>Email</h1>
          <input type="text" name="r_email"  placeholder="enter a valied email address"></div>

          <div style="padding-top: 10px;"><h1>Phone</h1> 
          <input type="text" name="r_phone" placeholder="enter your phone number"></div>


          <button class="btnn">
               <a href="login.php">Register</a>
           </button>

           <p class="link">Already have an account?<br>
           <a href="login.php">Login</a> here!</a></p>
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

<section class="services" id="services">

<h1 class="heading">
    <span>H</span>
    <span>O</span>
    <span>T</span>
    <span>E</span>
    <span>L</span>
    <span>S</span>
</h1>

<div class="box-container">

<div class="box">
            <img src="images/coxhotel.jpg" alt="">
            <div class="content">
                <h3>Sea Pearl Beach Resort & Spa</h3>
                <p>Located on world's longest undivided coastline - Cox's Bazar. Largest Eco Resort located on Inani Beach - Excellent coral viewing. All rooms have sea view with a choice of balcony and kitchenettes.<br><br></p>
                <h3>BDT 16,352</h3>						
				<a href='#book'class="btn" >Book Now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/svhotel.jpg" alt="">
            <div class="content">
                <h3>Nil Pahari Eco Resort sajek valley</h3>
                <p>Nil Pahari Eco Resort Sajek provide accomodation, home stay, summer camp and pet friendly services for torists from all over the country! We are committed to providing the best hospitality when people visit sajek valley</p>
                <h3>BDT 6380</h3>						
				<a href='#book'class="btn" >Book Now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/srihotel.jpg" alt="">
            <div class="content">
                <h3>Grand Sultan Resort</h3>
                <p>Grand Sultan Tea Resort & Golf, the one & only five star resort in the Sylhet region of Bangladesh. Equipped with all modern state of the art amenities and facilities, located in Srimangal.<br><br></p>
                <h3>BDT 15,870</h3>						
				<a href='#book'class="btn" >Book Now</a>
                
            </div>
        </div>
        <div class="box">
            <img src="images/shotel.jpg" alt="">
            <div class="content">
                <h3>Noorjahan Grand</h3>
                <p>Dedicated To Providing Our Guests With The Exceptional Services. Our Timeless Hotel Evokes A Unique Sense Of Understand Elegence Of Modern Glamour That Can Only Be Found In Our Guest Rooms.</p>
                <h3>BDT 6000</h3>						
				<a href='#book'class="btn" >Book Now</a>
               
            </div>
        </div>
        <div class="box">
            <img src="images/rhotel.jpg" alt="">
            <div class="content">
                <h3>Aronnok & Lakeshore Holiday Resort</h3>
                <p>No.01 S-special resort in Rangamati. Resort in the heart of kaptai lake to spend some quality time with friends & family.<br><br><br><br></p>
                <h3>BDT 4700</h3>						
				<a href='#book'class="btn" >Book Now</a>
               
            </div>
        </div>
        <div class="box">
            <img src="images/bhotel.jpg" alt="">
            <div class="content">
                <h3>Labah Tong Hill Resort Ltd.</h3>
                <p>What if there was a hill resort in Bangladesh that boasted unparalleled beauty, without any boundaries? Labah Tong Hill Resort Ltd. is just that. We offer incomparable scenery and natural attractions perfect for visitors of all ages</p>
                <h3>BDT 5290</h3>						
				<a href='#book'class="btn" >Book Now</a>
               
            </div>
        </div>

</section>
</body>
</html>

