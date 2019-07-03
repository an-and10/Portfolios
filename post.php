<?php

include('function/function.php');
include('includes/top.php');
include('includes/header-post.php');


    ?>


     <?php

       if(isset($_GET['post_id']))
        {
             $post_id = $_GET['post_id'];


               $get_post = "select * from posts where status='publish' and id='$post_id'";
               $run_post = mysqli_query($con,$get_post);

               $row= mysqli_fetch_array($run_post);

                     $id = $row['id'];
                     $date = $row['date'];
                     $title = $row['title'];
                     $image = $row['image'];
                     $author_image = $row['author_image'];
                     $post_data = $row['post_data'];
                     $categories = $row['categories'];
                     $views = $row['views'];
                     $tages = $row['tages'];
                     $status = $row['status'];
                     $author = $row['author'];


                    // $id = $row['id'];




                }

            else
            {
          echo "<script>window.open('index.php','_self')</script>";

                          }



?>

   <section>
   <div class=" contact_us animated fadeInRight">
      <div class="container">
       <h2> Custom Post
   </h2>
   <h3> Hey, You are at the article reading page!!</h3>
   </div>

       </div>


    <div class="container">

      <div class="row">
        <div class="col-md-8">
             <div class="post">
              <div class="row">
                 <div class="col-md-2 col-xs-2 post-date">
                        <div class="day">   16     </div>
                        <div class="month">   January    </div>
                        <div class="year"> 2012  </div>
                 </div>
              <div class="col-md-8 col-xs-8 post-heading">
                        <h3> <?php echo $title ;?></h3><p>
                        <p> Written by: <span> <?php echo $author; ?></span></p>
                 </div>
                  <div class="col-md-2 col-xs-2 profile-picture">
                  <img src="images/<?php echo $author_image ?>"  class="image-responsive" style=" width: 100%; ">
                 </div>
           </div>

           <img src="images/slide-7.jpg" alt="post images">
           <p class="desc">
            <?php echo $post_data ?>
                 </p>
          <hr>
          <div class="bottom">
              <span class="first">
               <i class="fa fa-folder" style="font-size: 20px;"></i> <a href="#"?><?php echo ucfirst($categories) ?></a>
              </span>
             <span class="second">
               <i class="fa fa-comments" style="font-size: 20px;"></i> <a href="#">
                   <?php

                        $get_comment =  "select * from comments where post_id='$id'";
                        $run_comment = mysqli_query($con,$get_comment);
                        $count_comment = mysqli_num_rows($run_comment);

                        echo $count_comment ;

               ?>

              Comments</a>
              </span>
               <span class="second">
               <i class="fa fa-eye" style="font-size: 20px;"></i> <a href="#">Views  : 7</a>
              </span>
              <span class="second" style="float: right"> <?php echo cal_likes($post_id);?> People Likes </span>


              <?php


                            if(isset($_GET['post_id'], $_GET['type']))
                            {

                                $user_email = $_SESSION['email'];


                                $type= $_GET['type'];
                                $id = $_GET['post_id'];
                                $user = "select * from users where email='$user_email'";
                                $run_user = mysqli_query($con,$user);
                                $row = mysqli_fetch_array(($run_user));
                                $user_id = $row['id'];


                                if($type =='article')
                                {
                                    $check_query = "select * from posts_like where post_id='$id' AND user_id='$user_id'";
                                    $check_run = mysqli_query($con,$check_query);

                                    $count = mysqli_num_rows($check_run);

                                    if($count!=0)
                                    {
                                      echo "<script>alert('You have Already Liked this Article ')</script>";
                                    }
                                    else
                                    {
                                      $query = "insert into posts_like (post_id,user_id) values ('$id','$user_id')";
                                    $run_query = mysqli_query($con,$query);

                                    }




                                }


                            }


                            ?>
                    <?php
                            if(isset($_GET['post_id'], $_GET['type']))

                            {
                                // $id = $_GET['post_id'];
                                echo "  <button type='button' id='btnOUs' class='btn btn-success' ng-click='levelOU()'style='float:right; margin:-5px ; color:white'><a href='post.php?post_id=$id&type=article'>Likes</a></button>";
                            }
                            else{
                                // $id = $_GET['post_id'];
                                echo "  <button type='button' id='btnOUs' class='btn btn-info' style='float:right ; color:white; margin:-5px' ng-click='levelOU()'><a href='post.php?post_id=$id&type=article'>Likes</a></button>";

                            }



                            ?>


            </div>

            </div>
            <div class="related-post">
                 <h2>    Related Post</h2><hr>
                <div class="row">
                  <?php

                    $get = "select * from posts where status='publish' limit 3";
                       $run =  mysqli_query($con,$get);
                       while($row = mysqli_fetch_array($run))
                       {
                           $id = $row['id'];
                           $title = $row['title'];
                            $image = $row['image'];
                           $post_data = $row['post_data'];
                           ?>

                           <div class="col-sm-4">
                        <a href="post.php?post_id=<?php echo $id ?>">
                            <img src="images/<?php echo $image ?>" alt="">
                            <h3><?php echo $title ?></h3></a>
                            <p><?php echo substr($post_data,0,70) ."...."; ?></p>

                        </div>
                     <?php
                        }
        ?>



                </div>
            </div>

            <div class="author">
                <div class="row">
                    <div class="col-sm-3 ">
                        <img src="images/product-1.jpg" alt="autho images" class="img-circle">
                    </div>
                    <div class="col-sm-9">
                        <h2> Name  of Author</h2>
                         Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                    </div>
                </div>
            </div>
             <div class="comment">
               <h2>Comments</h2><hr>
            <?php

            $get = "select * from comments where status='Approved' and post_id='$post_id' order by id desc";
            $run = mysqli_query($con,$get);
            if(mysqli_num_rows($run)>0)
            {
                while($row=mysqli_fetch_array($run))
                {
                    $name = $row['name'];
                    //$username= $row['username'];
                    $image = $row['image'];
                    $comments = $row['comment'];
                    $date = $row['date'];

                    ?>


                <div class="row single-comment">
                    <div class="col-sm-2"><img src="images/<?php echo $image ?> " alt="" class="img-circle"></div>
                    <div class="col-sm-10"><h4><?php echo $name ; ?></h4>
                    <p><?php echo $comments ?></p></div>
                    <p style="float:right"><?php echo $date; ?></p>
                </div><hr>


               <?php
                }
                ?>

            <?php
            }
            else
            {
         echo "<h3>No Comments Yet </h3>" ;
            }


            ?>
             </div>

           <?php include('includes/comment-info.php'); ?>
          </div>



        <div class="col-md-4">
          <?php include('includes/sidebar.php');?>
          </div>

</div>
</div>


<script>
    $("button").click(function(){
  $("button").removeClass("active");
  $(this).addClass("active");
});
</script>

<style>
    .active {
  background-color: green !important;
}
</style>
