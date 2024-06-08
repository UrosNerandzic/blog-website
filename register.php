<?php
      include('./templates/header.php');
   ?>

<section class="register-section">
   <div class="text-center register-item">
      <h1 class="text-white">Register</h1>
      <form action="">
         <label for="firstName">First Name</label>
         <input type="text" placeholder="Enter First Name">
         <label for="lastName">Last Name</label>
         <input type="text" placeholder="Enter Last Name">
         <label for="email">Email</label>
         <input type="email" id="email" name="email" placeholder="Enter Email">
         <label for="password">Password</label>
         <input type="email" placeholder="Enter Password">
         <button class="d-block mx-auto mt-2 register-button" type="submit" value="submit">
            Register Now
         </button>
      </form>
   </div>
</section>


<?php
      include('./templates/footer.php');
   ?>