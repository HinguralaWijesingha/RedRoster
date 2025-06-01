<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<header class="header">

   <div class="flex">

      <a href="home.php" class="logo"> Red Rooster<span>.</span></a>

      <nav class="navbar">
         <a href="index.php">Home</a>
         <a href="login.php">Login Here</a>
      </nav>
   </div>

</header>