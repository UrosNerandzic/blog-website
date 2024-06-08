<?php 
include("./templates/header.php");
?>

<section class="register-section">
   <div class="text-center register-item">
      <h1 class="text-white">Login</h1>
      <form action="">
         <label for="email">Email</label>
         <input type="email" id="email" name="email" placeholder="Enter Email">
         <label for="password">Password</label>
         <input type="email" placeholder="Enter Password">
         <button class="register-button" type="submit" value="submit">
            Login Now
         </button>
      </form>
   </div>
</section>

<?php 
include("./templates/footer.php");
?>