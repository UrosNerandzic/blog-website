<?php 

?>

<section class="container section-blog mb-5">
   <h1 class="text-center blog-title mb-5">
      Blog
   </h1>
   <form class="d-flex search-bar-blog">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
   </form>

   <div class="row justify-content-between">

      <?php foreach($post_data as $post){
         ?>

      <div class="col-md-3 p-0 blog-item text-white">
         <a href="../single-blog.php?id=<?php echo $post['id']?>" class="text-decoration-none blog-a">
            <?php 
            echo '<img  src="data:image/png;base64,' .base64_encode($post['image']).' "width"="100%" "height"="100%">';
            ?>
            <div>
               <h2 class="text-center mt-2 mb-4 text-white">
                  <?php echo $post['title'];?>
               </h2>
               <p class="text-center text-white blog-text">
                  <?php echo $post['body']; ?>
               </p>
               <div class="d-flex text-center justify-content-center ">
                  <p class="text-center bg-body blog-text w-50 p-0">
                     more info
                  </p>
               </div>
         </a>
      </div>
   </div>
   <?php
}; 
?>
</section>