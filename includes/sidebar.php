 <div class="widgets">
                        <form action="index.php" method="post">
      
                          <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for..." name="search-name">
                <span class="input-group-btn">
                  <input class="btn btn-default" type="submit" value="Go" name="search">
                </span>
           </div>
           </form>
          </div><!-- Widget first clodes  -->
            <div class="widgets">
                        <div class="popular">
                           <h4>Popular Post</h4><hr>
                             <?php 
                            $get = "select * from posts order by views desc limit 0,4";
                            $run = mysqli_query($con,$get);
                            if(mysqli_num_rows($run)>0)
                            {
                                while($row=mysqli_fetch_array($run))
                                {
                                        $id = $row['id'];
//                                       //  $date = getdate($row['date']);
//                                        $day = $date['mday'];
//                                        $month = $date['month'];
//                                        $year = $date['year'];
                                         $title = $row['title'];
                                         $image = $row['image'];
                                         $author_image = $row['author_image'];
                                         $post_data = $row['post_data'];
                                         $categories = $row['categories'];
                                         $views = $row['views'];
                                         $tages = $row['tages'];
                                         $status = $row['status'];
                                         $author = $row['author'];
                                    ?>
                                    
                                    
                                    
                                   
                              <div class="row">
                                  <div class="col-xs-4">
                                     <p style="font-size:8px;"><i class="fa fa-clock"></i> 10 septemeber 1997</p>
                                    <img src="images/<?php echo $image?>" alt="this is for image">
                                  </div>

                                
                                   <div class="col-xs-8">
                                     <h6> <?php echo $title ?></h6>
                                     <p style="font-size:10px;"> <?php echo substr($post_data,0,50)."....."; ?></p>
                                   
                                   </div>
                              </div>
                              <hr>
                        <?php        
                                    
                                }
                            }   ?>
                             
                             
<!--
                             
-->
                 </div><!-- row closes  -->
              </div>

               <div class="widgets">
                          <div class="popular">
                            <h4>Recent Post</h4><hr>
                            <?php 
                            $get = "select * from posts order by id desc limit 0,4";
                            $run = mysqli_query($con,$get);
                            if(mysqli_num_rows($run)>0)
                            {
                                while($row=mysqli_fetch_array($run))
                                {
                                        $id = $row['id'];
//                                       //  $date = getdate($row['date']);
//                                        $day = $date['mday'];
//                                        $month = $date['month'];
//                                        $year = $date['year'];
                                         $title = $row['title'];
                                         $image = $row['image'];
                                         $author_image = $row['author_image'];
                                         $post_data = $row['post_data'];
                                         $categories = $row['categories'];
                                         $views = $row['views'];
                                         $tages = $row['tages'];
                                         $status = $row['status'];
                                         $author = $row['author'];
                                    ?>
                                    
                                    
                                    
                                   
                              <div class="row">
                                  <div class="col-xs-4">
                                     <p style="font-size:8px;"><i class="fa fa-clock"></i> 10 septemeber 1997</p>
                                    <img src="images/<?php echo $image?>" alt="this is for image">
                                  </div>

                                
                                   <div class="col-xs-8">
                                     <h6> <?php echo $title ?></h6>
                                     <p style="font-size:10px;"> <?php echo substr($post_data,0,50)."....."; ?></p>
                                   
                                   </div>
                              </div>
                              <hr>
                              <?php        
                                    
                                }
                            }   ?>
                             
                              
                        
                        </div><!-- row closes  -->
              </div>

              <div class="widgets">
                          <div class="popular">
                             <h4>Categories</h4><hr>
                               <div class="row">
                                <div class="col-xs-6">
                                  <ul>
                                  <?php 
                                   $get = "select * from categories order by id desc  limit 0,4";
                                      $run =  mysqli_query($con,$get);
                                      if(mysqli_num_rows($run)>0)
                                      {
                                          while( $row = mysqli_fetch_array($run))
                                          { 
                                                $category = $row['category'];
                                                $cat_id  = $row['id'];
                                               echo "<li><a href='index.php?cat_id=$cat_id'>$category</a></li> ";;

                                          }
                                      }
                                      ?>
                                 </ul>
                                </div>
                                <div class="col-xs-6">
                                  <ul>
                                   <?php 
                                   $get = "select * from categories order by id desc limit 4,8";
                                      $run =  mysqli_query($con,$get);
                                      if(mysqli_num_rows($run)>0)
                                      {
                                          while( $row = mysqli_fetch_array($run))
                                          { 
                                                $category = $row['category'];
                                                $cat_id  = $row['id'];
                                               echo "<li><a href='index.php?cat_id=$cat_id'>$category</a></li> ";;

                                          }
                                      }
                                      ?>
                                 </ul>
                                </div>
                                <hr>
                                
                              </div>
                            </div><!-- row closes  -->
              </div>


                
            <div class="widgets">
                    <div class="popular">
                       <h4>Social</h4><hr>
                         <div class="row">
                           <div class="col-xs-4"><i class="fa fa-home" style="font-size: 30px;"></i></div>
                          <div class="col-xs-4"><i class="fa fa-home" style="font-size: 30px;"></i></div>
                          <div class="col-xs-4"><i class="fa fa-home" style="font-size: 30px;"></i></div>
                         </div><hr>
                         <div class="row">
                           <div class="col-xs-4"><i class="fa fa-home" style="font-size: 30px;"></i></div>
                          <div class="col-xs-4"><i class="fa fa-home" style="font-size: 30px;"></i></div>
                          <div class="col-xs-4"><i class="fa fa-home" style="font-size: 30px;"></i></div>
                         </div>
                      </div><!-- row closes  -->
              </div>






               
          <!-- widget clodes -->
            
