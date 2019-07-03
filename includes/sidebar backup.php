
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



            /* Social */



                  recent post//

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



if(isset($_POST['submit']))
            {

                if(isset($_SESSION['email']))
                {   


                  $email = $_SESSION['email'];

                  $get = "select * from users where email='$email'";
                  $run= mysqli_query($con,$get);
                  $row= mysqli_fetch_array($run);
                  $name = $row['name'];
                  $email = $row['email'];
                  $user_id = $row['id'];
                  $status = $row['status'];
                  $contact = $row['contact'];
                $image= 'unknow.png';
                 $comments = $_POST['comments'];

                $post_id = $_GET['post_id'];

                 // $comments = $_POST['comments'];
                 $insert = "insert into comments (date,name,user_id,post_id,image,comment,status) values (NOW(),'$name','$user_id','$post_id',$image','$comments','Review')";
                $run = mysqli_query($con,$insert);
                    if($run)
                    {
                        //echo "Your Comments is Successfully placed for the verification";
                        echo "<script>alert('Your Comment is Successfully placed for review')</script";
                    }
                    else
                    {
                        echo "<script>alert('Failed to upload data')</script";
                    }

                }
                else
                {
                        echo "<script>alert('Please Login FIrst')</script>";
                }
            }