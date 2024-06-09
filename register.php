<?php 
session_start();

include("connection.php");
include("functions.php");

$errors = [
   'first_name' => '',
   'last_name' => '',
   'email' => '',
   'password' => ''
];

if($_SERVER['REQUEST_METHOD'] == "POST"){
   //something was posted
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  
   // Checking if all fields are filled
   if(empty($first_name)){
      $errors['first_name'] = 'First name is required';
   }
   if(empty($last_name)){
      $errors['last_name'] = 'Last name is required';
   }
   if(empty($email)){
      $errors['email'] = 'Email is required';
   }
   if(empty($password)){
      $errors['password'] = 'Password is required';
   }
   
   // Checking if the email is valid
   if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errors['email'] = 'Email must be a valid email address';
   }
   if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($password)){
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);
      $stmt = $con -> prepare("insert into users (first_name, last_name, email, password) values (?, ?, ?, ?)");
      $stmt -> bind_param("ssss", $first_name,$last_name,$email,$password);

      // Query execution
      if ($stmt->execute()) {
         echo "New user successfully added";
       } else {
         echo "Error";
      }
   
   $stmt->close();
   $con->close();
   header("Location: login.php");
   die;

   }else{
      echo 'error';
   }
}
include('./templates/header.php');
?>

<section class="register-section">
   <div class="text-center register-item">
      <h1 class="text-white">Register</h1>
      <form action="" method="POST">
         <label for="first_name">First Name</label>
         <input name="first_name" type="text" placeholder="Enter First Name">
         <div class="validation">
            <?php echo $errors['first_name']; ?>
         </div>

         <label for="last_name">Last Name</label>
         <input name="last_name" type="text" placeholder="Enter Last Name">
         <div class="validation">
            <?php echo $errors['last_name']; ?>
         </div>
         <label for="email">Email</label>
         <input name="email" type="email" id="email" name="email" placeholder="Enter Email">
         <div class="validation">
            <?php echo $errors['email']; ?>
         </div>

         <label for="password">Password</label>
         <input name="password" type="password" placeholder="Enter Password">
         <div class="validation">
            <?php echo $errors['password']; ?>
         </div>
         <button class="d-block mx-auto mt-2 register-button" type="submit" value="submit">
            Register Now
         </button>
      </form>
   </div>
</section>

<?php
      include('./templates/footer.php');
?>