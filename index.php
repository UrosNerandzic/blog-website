<?php 
session_start();
$_SESSION;


include("connection.php");
include("functions.php");

$user_data = check_login($con);
$post_data = check_post($con);

?>
<?php
      include('./templates/header.php');
   ?>

<!-- first section -->
<section class="container-fluid section-one mb-5 mt-5">
   <div class="row">
      <div class="col-md-6 p-0">
         <img class="image-section-first" src="./image/technology.jpg" alt="">
      </div>
      <div class="col-md-6 align-items-center m-auto">
         <h1 class="text-center pb-4">
            Welcome <?php echo ucfirst($user_data['first_name']);?>
         </h1>
         <p class="text-center text-section-one">
            Hello <?php echo ucfirst($user_data['first_name']);?>, I will introduce you to the blog site.
            Where you will be able to edit blogs according to your taste.
         </p>
      </div>
   </div>
</section>


<!-- second section -->
<section class="container-fluid section-two">
   <div class="section-second d-flex justify-content-between m-5 ">
      <img src="./image/icons/bootstrap.svg" alt="">
      <img src="./image/icons/html.svg" alt="">
      <img src="./image/icons/css.svg" alt="">
      <img src="./image/icons/javascript.svg" alt="">
      <img src="./image/icons/jquery.svg" alt="">
      <img src="./image/icons/mysql.svg" alt="">
      <img src="./image/icons/php.svg" alt="">
      <img src="./image/icons/react.svg" alt="">
      <img src="./image/icons/redux.svg" alt="">
      <img src="./image/icons/sass.svg" alt="">
      <img src="./image/icons/tailwind.svg" alt="">
      <img src="./image/icons/typescript.svg" alt="">
      <img src="./image/icons/wordpress.svg" alt="">
      <img src="./image/icons/git.svg" alt="">
   </div>
</section>


<?php
      include('./templates/blog-section.php');
   ?>



<?php include("./templates/footer.php"); ?>