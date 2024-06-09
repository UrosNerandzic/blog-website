<?php 
session_start();

include("connection.php");
include("functions.php");
$errors = [
   'email' => '',
   'password' => ''
];

if($_SERVER['REQUEST_METHOD'] == "POST"){
   //something was posted
  $email = $_POST['email'];
  $password = $_POST['password'];
   if(!empty($email) && !empty($password)){
      
      //read from database
      $query = "select * from users where email = '$email' limit 1";
      $result = mysqli_query($con, $query);
      if($result){
         if($result && mysqli_num_rows($result) > 0){
            
            $user_data = mysqli_fetch_assoc($result);
           
            $password = $user_data['password'];
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            if(password_verify($password, $hashed_password)){
               $_SESSION['id'] = $user_data['id'];
               header("Location: index.php");
               die;
            }
         }
      }
      echo'wrong username and wrong password';
   }else{
      echo "Please enter some valid information!";
   }
}
include("./templates/header.php");
?>

<section class="register-section">
   <div class="text-center register-item">
      <h1 class="text-white">Login</h1>
      <form action="" method="POST">
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

         <button class="register-button" type="submit" value="Login">
            Login Now
         </button>
         <span class="text-white">
            New to blog?
            <a class="text-decoration-none" href="./register.php">
               Register Now
            </a>
         </span>
      </form>
   </div>
</section>

<?php 
include("./templates/footer.php");
?>