<?php 
  // ===== Conneect Database ===== //
  include "../includes/database.php";


?>
<?php

    include('../includes/database.php');
  ?>
  <!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../assets/css/navContainer.css">
    <link rel="stylesheet" href="../assets/css/style2.css">
    <link rel="stylesheet" href="../assets/css/style3.css">

    <!----===== Google Icon CSS ===== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    
    <!----======== Title ======== -->
    <title>CNHS</title> 

</head>

<body>
  <!----======== Sidebar ======== -->
  <?php include 'includes/sideMenu.php';?>

  <!----======== Container Content ======== -->
  <section class="home-section">
    
    <?php include 'subject/studentsubj.php';?>



  </section> 
    
</body>
</html>