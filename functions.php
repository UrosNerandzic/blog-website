<?php 
//users
function check_login($con){
   if(isset($_SESSION['id'])){
      $id = $_SESSION['id'];
      $query = "select * from users where id = '$id' limit 1";
      $result = mysqli_query($con, $query);
      // ako je rezultat pozitivan i broj redova vece od 0
      if($result && mysqli_num_rows($result) > 0){
         $user_data = mysqli_fetch_assoc($result);
         return $user_data;
      }
   }
   //redirect to login
   header("Location: login.php");
   die;
}

function check_post($con){
   
      $query = 'select * from posts ';
      $result = mysqli_query($con, $query);
      
      $post_data = mysqli_fetch_all($result,MYSQLI_ASSOC);
      
      return $post_data;
      
}
?>