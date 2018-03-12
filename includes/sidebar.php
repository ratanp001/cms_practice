<!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
                 <?php 
                if(isset($_POST['search'])){
                    $search = $_POST['search'];
                
                
                $query = "SELECT * from posts WHERE post_tags LIKE '%$search%'";
                $search_query = mysqli_query($connection,$query);
                $search_query = mysqli_query($connection,$query);
                
                if(!$search_query){
                    die("QUERY FAILED".mysql_error($connection));
                }
                
                $count = mysqli_num_rows($search_query);
                if($count == 0){
                    echo "No result";
                }else
                    echo "Some result";
                }
                ?>

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                        <form action="" method="post">
                        <div class="input-group">
                            <input name="search" type="text" class="form-control">
                            <span class="input-group-btn">
                                <button name="submit" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        </div>
                        </form>
                </div>
                
              
         

             <!--Login -->
    <div class="well">

       

             <h4>Logged in as </h4>

             <a href="includes/logout.php" class="btn btn-primary">Logout</a>



             <h4>Login</h4>

                <form method="post">
                <div class="form-group">
                    <input name="username" type="text" class="form-control" placeholder="Enter Username">
                </div>

                  <div class="input-group">
                    <input name="password" type="password" class="form-control" placeholder="Enter Password">
                    <span class="input-group-btn">
                       <button class="btn btn-primary" name="login" type="submit">Submit
                       </button>
                    </span>
                   </div>

                    <div class="form-group">

                        <a href="forgot.php?forgot=<?php echo uniqid(true); ?>">Forgot Password</a>


                    </div>

                </form>
    
    </div>     
    
</div>