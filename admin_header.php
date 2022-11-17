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
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="admin_header.css">
</head>
<body>
<header class="header">

<div class="flex">

   <a href="admin_page.php" class="logo">Admin <span>Dashboard</span>
   </a>

   <nav class="navbar">
      <a href="admin_page.php">home</a>
      <a href="admin_products.php">products</a>
      <a href="admin_orders.php">orders</a>
      <a href="admin_users.php">users</a>
      <a href="admin_message.php">messages</a>
   </nav>

   <div class="icons">
      <!-- <div id="menu-btn" class="fas fa-bars"></div> -->
      <!-- <div id="user-btn" class="fas fa-user"></div> -->
   </div>

   <div class="account-box">
      <p>username : <span><?php echo $_SESSION['admin_name']; ?></span></p>
      <p>email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
     
   </div>
   
   <div>
   <a href="adminregistration.php"><i class="fa-solid fa-square-plus"></i>&nbsp;&nbsp;ADD NEW ADMIN&nbsp;</a>
   </div>
   <div class="logout">
   <a href="logout.php" class="delete-btns">logout</a>
   
   </div>

</div>

</header>
</body>
</html>

