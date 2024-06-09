<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./css/bootstrap.min.css">
   <link rel="stylesheet" href="./css/style.css">
   <title>Document</title>
</head>

<body>
   <header>
      <nav class="navbar navbar-expand-lg navbar-red">
         <div class="container-fluid">
            <a class="navbar-brand" href="/index.php">
               <img class="logo" src="image/code-logo.png" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
               data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
               aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav   mb-2 mb-lg-0">

                  <li class="nav-item mx-5">
                     <a class="nav-link" href="./index.php">Blog</a>
                  </li>
                  <?php 
                     if(!isset($_SESSION['id'])){
                        ?>
                  <li class="nav-item mx-5">
                     <a class="nav-link" href="./register.php">
                        Register
                     </a>
                  </li>
                  <?php
                     }
                  ?>


                  <?php 
                  if(!isset($_SESSION['id'])){
                     ?>
                  <li>
                     <a class="nav-link text-center" href="./login.php">
                        <img class="login-svg" src="../image/icons/profile.svg" alt="">
                        Login
                     </a>
                  </li>
                  <?php
                  }

                  else{
                     ?>
                  <li> <a class="nav-link text-center" href="./logout.php">
                        <img class="login-svg" src="../image/icons/profile.svg" alt="">
                        Logout
                     </a>
                  </li>
                  <?php
                  }
                  ?>


               </ul>
            </div>
         </div>
      </nav>
   </header>
   <main>