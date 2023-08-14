<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!--font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>





<body>





<!-- header section starts-->

<section class="header">
    <a herf="home.php" class="logo">Travelerz</a>
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->









<!-- Booking Section Starts -->

<div class="heading" style="background:url(images/HeaderPic.jpg) no-repeat">
    <h1>book now</h1>
</div>





<section class="booking">

    <h1 class="heading-title">book tours!</h1>

    <form action="book_form.php" method="post" class="book-form">

        <div class="flex">

            <div class="inputBox">

                <span>Name:</span>

                <input type="text" placeholder="Enter Your Name" name="name">

            </div>

            <div class="inputBox">

                <span>E-mail:</span>

                <input type="email" placeholder="Enter Your E-mail Address" name="email">

            </div>

            <div class="inputBox">

                <span>Phone Number:</span>

                <input type="number" placeholder="Enter Your Phone Number" name="phone">

            </div>

            <div class="inputBox">

                <span>Adress:</span>

                <input type="text" placeholder="Enter Your Address" name="address">

            </div>

            <div class="inputBox">

                <span>Want to go:</span>

                <input type="text" placeholder="Enter Your Desired place to go" name="location">

            </div>

            <div class="inputBox">

                <span>Number of persons:</span>

                <input type="number" placeholder="Enter the number of persons" name="guests">

            </div>

            <div class="inputBox">

                <span>arrival Date:</span>

                <input type="date" name="arrivals">

            </div>

            <div class="inputBox">

                <span>Leaving Date:</span>

                <input type="date" name="leaving">

            </div>

        </div>

        <input type="submit" value="submit" class="btn" name="send">

    </form>

</section>






<!-- Booking Section ends -->






<!--footer section starts. -->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Quick Links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
        </div>
        
        <div class="box">
            <h3>Extra Links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a> 
            <a href="#"> <i class="fas fa-angle-right"></i> job Opportunities</a>  
            <a href="#"> <i class="fas fa-angle-right"></i> Be an investor</a>
        </div>  

        <div class="box">
            <h3>Help</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> Support</a>
            <a href="#"> <i class="fas fa-angle-right"></i> Cancel trip</a>
            <a href="#"> <i class="fas fa-angle-right"></i> Refund Policies</a>
               
        </div>  

        <div class="box">
            <h3>Follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook</a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedIn</a>  
            <a href="#"> <i class="fab fa-youtube"></i> Youtube</a>  
        </div> 

        <div class="box">
            <h3>Contact</h3>
            <a href="#"> <i class="fas fa-phone"></i> +880123456 </a>
            <a href="#"> <i class="fas fa-phone"></i> +094364834 </a>
            <a href="#"> <i class="fas fa-envelope"></i> travelerz.bd@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> Dhaka, Bangladesh  </a>   
        </div> 
        
    </div>

    <div class="credit"> developed and maintained by <span>Ifaz Ajmain and Faizul Islam Bhuiyan</span> | all rights reserved! </div>

</section>










<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


<!-- custom js file link -->
<script src="js/script.js"></script> 





</body>





</html>