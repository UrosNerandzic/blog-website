<?php 
session_start();
$_SESSION;

include("connection.php");
include("functions.php");

$user_data = check_login($con);

// check GET request id param
if(isset($_GET['id'])){
   $id = mysqli_real_escape_string($con,$_GET['id']);

   // make query
   $query = "select * from posts where id = $id ";
   
   //get result 
   $result = mysqli_query($con, $query);
   
   // fetch result in array format 
   
   $post = mysqli_fetch_assoc($result);

   mysqli_free_result($result);
   mysqli_close($con);
   
}

include("./templates/header.php");
?>

<section>
   <div class="container text-center">
      <?php if($post){
         ?>
      <h4>
         <?php echo $post['title']; ?>
      </h4>
      <?php 
            echo '<img  src="data:image/png;base64,' .base64_encode($post['image']).' "width"="100%" "height"="100%">';
      ?>
      <p>
         <?php echo $post['body'];  ?>
      </p>
      <?php
      }else{
         ?>
      <h5>There is no blog on this page</h5>
      <?php
      }  
      ?>
   </div>
</section>

<?php 
include("./templates/footer.php");
?>