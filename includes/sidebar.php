<!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
                 

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <form action="search.php" method="post">
                    <div class="input-group">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    </form><!--search form-->
                    <!-- /.input-group -->
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

                </form><!--search form-->
                <!-- /.input-group -->



        


       
    </div>
                
                
                
                

                <!-- Blog Categories Well -->
                <div class="well">
                  
                  
                  
       
                              
                            </ul>
                        </div>
                        
                    </div>
                    <!-- /.row -->
                </div>
                
                <!-- Side Widget Well -->
                

            </div>
            