   
             
              <div class="comment-box" id ="comment">
               <h2>Comment-info</h2>
                <div class="row">
                    <div class="col-xs-12">
                    <form action="" method="post">
                       
                         <div class="form-group">
                            <label for="fullname">Comments</label>
                            <input type="text" class="form-control" value= " <?php echo $post_id ?>"placeholder="EnterComments" name="comments">
                            
                        </div>

                
                    
                            <input type="submit" class="btn btn-success pull-right" name="submit">
                    </form>
                    </div>
                </div>
            </div>
            
           
          <?php



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



                 // $comments = $_POST['comments'];
                 $insert = "insert into comments (date,name,user_id,post_id,image,comment,status) values (NOW(),'$name','$user_id','$post_id','$image','$comments','Review')";
                $run = mysqli_query($con,$insert);
                    if($run)
                    {
                        //echo "Your Comments is Successfully placed for the verification";
                        echo "<script>alert('Your Comment is Successfully placed for review')</script>";
                    }
                    else
                    {
                        echo "<script>alert('Failed to upload data')</script";
                    }

                }
                else
                {
                    echo "<script>alert('Login First')</script>";
                }
            }

    
            
                ?>
                
            