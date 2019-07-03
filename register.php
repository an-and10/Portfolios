
               <?php
        include('includes/top.php');

        include('includes/header-index.php');
        ?>

        <section>
           <div class=" contact_us animated fadeInRight">
              <div class="container">
               <h2> Registration
           </h2>
           <h3> Hey, You are at the Registration Page to get the quick Servicereading page!!</h3>
           </div>

               </div>

        <div class="container">

            <div class="row">
                <div class="col-md-8">
                 <div class="box box-design"><!-- box Begin -->

                           <div class="box-header"><!-- box-header Begin -->

                               <center><!-- center Begin -->

                                   <h2> Register a Account </h2>
                                   <p class="text-nuted"> Kindly Provides the details to access our full and flexible service</p>
                               </center><!-- center Finish -->

                               <form action="register.php" method="POST" enctype="multipart/form-data"><!-- form Begin -->

                                   <div class="form-group"><!-- form-group Begin -->

                                       <label>Your Name</label>

                                       <input type="text" class="form-control" name="name" required>

                                   </div><!-- form-group Finish -->

                                   <div class="form-group"><!-- form-group Begin -->

                                       <label>Your Email</label>

                                       <input type="email" class="form-control" name="email" required>

                                   </div><!-- form-group Finish -->

                                   <div class="form-group"><!-- form-group Begin -->

                                       <label>Your Password</label>

                                       <input type="password" class="form-control" name="password" required>

                                   </div><!-- form-group Finish -->

                                  <!-- form-group Finish -->

                                  <!-- form-group Finish -->

                                   <div class="form-group"><!-- form-group Begin -->

                                       <label>Your Contact</label>

                                       <input type="text" class="form-control" name="contact" required>

                                   </div><!-- form-group Finish -->

                                   <!-- form-group Finish -->

                                   <div class="form-group"><!-- form-group Begin -->

                                       <label>Your Profile Picture <span class="small" style="float:right; margin-left:80px;"> (You can also update it later)</span></label>

                                       <input type="file" class="form-control form-height-custom" name="c_image" >

                                   </div><!-- form-group Finish -->

                                   <div class="text-center"><!-- text-center Begin -->

                                       <button type="submit" name="submit" class="btn btn-primary">

                                       <i class="fa fa-user-md"></i> Register

                                       </button>

                                   </div><!-- text-center Finish -->

                               </form><!-- form Finish -->

                           </div><!-- box-header Finish -->

                       </div>

                </div>

               <div class="col-md-4">
                  <?php include('includes/sidebar.php');?>
                  </div>




                          <?php
                           global $con;
                                  if(isset($_POST['submit']))
                                  {
                                      $name = mysqli_real_escape_string($con,$_POST['name']);
                                        $email = mysqli_real_escape_string($con,$_POST['email']);
                                          $password= mysqli_real_escape_string($con,$_POST['password']);
                                            $contact = mysqli_real_escape_string($con,$_POST['contact']);
                                      // $email=$_POST['email'];
                                      // // $username = $_POST['username'];
                                      // $password = $_POST['password'];
                                      // $contact = $_POST['contact'];



                                        $c_image = $_FILES['c_image']['name'];
                                        $c_image_tmp = $_FILES['c_image']['tmp_name'];
                                          move_uploaded_file($c_image_tmp,"profile_images/$c_image");


                                      $get_user = "select * from users where email='$email'";


                                      $duplicate=mysqli_query($con,$get_user);
                                        if (mysqli_num_rows($duplicate)>0)
                                          {

                                            // echo $email;
                                            echo "<script>alert('You have Already Registered an account with Us!! PLease Login to Continue')</script>";

                                          }

                                  else
                                    {
                                          echo $name;
                                        echo $password;
                                        echo $contact;
                                        echo $email;
                                        if(empty($c_image))
                                        {
                                          $c_image='unknown.png';
                                        }
                                         echo $c_image;

                                        $insert_users  = "insert into users (name,email,password,status,contact,profile_image) values ('$name','$email','$password','Draft','$contact','$c_image')";

                                        $run_users = mysqli_query($con,$insert_users);

                                        if($run_users)
                                        {
                                            echo "<script>alert('You have Successfully Register With US!! PLease LOgin to Continue the process')</script>";
                                        }
                                        else {
                                            echo "<script>alert('We are Sorry, We could not able to process the registration right now! Please try Later!')</script>";
                                        }
                                  }
                              }

                                  ?>
