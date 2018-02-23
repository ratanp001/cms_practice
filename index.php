<?php  include "includes/db.php"; ?>
 
<?php  include "includes/header.php"; ?>

    <!-- Navigation -->
<?php  include "includes/navigation.php"; ?>

    
 
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            
            <div class="col-md-8">
               
             <?php 
      
             $query = "SELECT * FROM posts";
             $select_all_posts = mysqli_query($connection,$query);
             //var_dump($select_all_category);

             while ($row = mysqli_fetch_assoc($select_all_posts)) {
                $post_title = $row['post_title'];
                $post_author = $row['post_author'];
                $post_date = $row['post_date'];
                $post_image = $row['post_image'];
                $post_content = $row['post_content'];
                ?>


                 <!-- First Blog Post -->
       
                <h2>
                    <a href="#"><?php echo $post_title; ?></a>
                </h2>
                <p class="lead">
                    by <a href="#"><?php echo $post_author ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"><?php echo $post_date ?></span> </p>
                <hr>
                
                
                
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">          
                <hr>
                <p><?php echo $post_content ?></p>
                
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                <hr>
            </div>
            
            </div> 
            <?php } ?>  
            </div>
            
            <!-- Blog Sidebar Widgets Column -->
         
           <?php include "includes/sidebar.php";?>
             

        



<?php include "includes/footer.php";?>
