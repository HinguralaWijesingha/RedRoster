

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home Page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/styles.css">

</head>
<body>
   
<?php include 'header2.php'; ?>

<div class="home-bg">

<section class="home">

<div class="content">
      <span>Hi</span>
      <h3>Welcome to Red Rooster Outlet</h3><br>
</section>

</div>

<section class="home-category">

   <h1 class="title">shop by category</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/cat-1.png" alt="">
         <h3>fruits</h3>
         <p>Village farm products refer to the agricultural products that are produced in rural areas or villages.</p>
         <a href="login.php" class="btn">fruits</a>
      </div>

      <div class="box">
         <img src="images/cat-2.png" alt="">
         <h3>meat</h3>
         <p>Village farm products refer to the agricultural products that are produced in rural areas or villages.</p>
         <a href="login.php" class="btn">meat</a>
      </div>

      <div class="box">
         <img src="images/cat-3.png" alt="">
         <h3>vegitables</h3>
         <p>Village farm products refer to the agricultural products that are produced in rural areas or villages.</p>
         <a href="login.php" class="btn">vegitables</a>
      </div>

      <div class="box">
         <img src="images/cat-4.png" alt="">
         <h3>fish</h3>
         <p>Village farm products refer to the agricultural products that are produced in rural areas or villages.</p>
         <a href="login.php" class="btn">fish</a>
      </div>

   </div>

   <center><h2 class="credit"> &copy; copyright @ <?= date('Y'); ?> by <span>Anji</span> | all rights reserved! </h2></center>

<script src="js/script.js"></script>

</body>
</html>