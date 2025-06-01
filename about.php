<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us Page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>Quality Assurance</h3>
         <p>At [Your Grocery Shop Name], quality is at the heart of everything we do. We work tirelessly to source the finest products, partnering with local farmers and trusted suppliers to ensure you get the best of what nature has to offer. From farm-fresh produce to pantry staples and gourmet treats, we carefully curate our selection to meet your diverse culinary needs.</p>

      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>Join Us on Our Journey</h3>
         <p>We invite you to join us on this exciting journey of reimagining grocery shopping. Explore our online store, discover new flavors, and experience the convenience of having your groceries delivered to your doorstep. Thank you for choosing [Your Grocery Shop Name] as your trusted grocery partner.

Your support means the world to us, and we look forward to serving you with excellence for years to come.</p>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-8.png" alt="">
         <p>I appreciated the convenience of being able yo browse a wide selection of fresh, locally sourced producr from the comfort of my own <br> The website was easy to navigate and the ordering process was seamless.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ruchith </h3>
      </div>

      <div class="box">
         <img src="images/pic-7.png" alt="">
         <p>I recently tried out farm online shopping for the first time and Imust say ,I was pleasantly surprised by the experience.<br> The website was user-friendly and easy to navigate.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Prabod</h3>
      </div>

      <div class="box">
         <img src="images/pic-9.png" alt="">
         <p>I recently tried out farm online shopping for the first time and Imust say ,I was pleasantly surprised by the experience.<br>
         The website was user-friendly and easy to navigate.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>

         </div>
         <h3>Charuka</h3>
      </div>
   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>