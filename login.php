
           <?php



    include('includes/top.php');
    if(isset($_SESSION['email']))
    {
      echo "<script>alert('You have been already login in ')</script>";
      header('Location:index.php');
    }

    include('includes/header-index.php');

    ?>

    <section>
       <div class=" contact_us animated fadeInRight">
          <div class="container">
           <h2> Login
       </h2>
       <h3> Hey, You are at the Login Page to get the quick Service reading page!!</h3>
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

                           <form action="login.php" method="POST" enctype="multipart/form-data"><!-- form Begin -->



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

                               <!-- form-group Finish -->

                              <!-- form-group Finish -->

                               <div class="text-center"><!-- text-center Begin -->

                                   <button type="submit" name="login" class="btn btn-primary">

                                   <i class="fa fa-user-md"></i> Login

                                   </button>

                               </div><!-- text-center Finish -->

                           </form><!-- form Finish -->

                       </div><!-- box-header Finish -->

                   </div>

            </div>

    <div class="col-md-4">
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



    </div>

    </div>


    <?php
            global $con;

        if(isset($_POST['login']))
        {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $get_user= "select * from users where email='$email' and password = '$password'";

            $run_user = mysqli_query($con,$get_user);
            if($run_user)
            {
                session_start();
                $_SESSION['email']=$email;

                echo "<script>alert('You have been login in ')</script>";
            }
            else
            {
                echo "<script>alert('Failed ')</script>";
            }

        }

       ?>
