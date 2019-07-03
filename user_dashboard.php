<?php
    global $con;

    if(!isset($_SESSION['email'])){
         echo "<script>alert('You have Successfully Register With US!! PLease LOgin to Continue the process')</script>";
       // echo "<script>window.open('login.php','_self')</script>";

    }
if(isset($_SESSION['email']))

{

  $email = $_SESSION['email'];

  $get = "select * from users where email='$email'";
  $run= mysqli_query($con,$get);
  $row= mysqli_fetch_array($run);
  $name = $row['name'];
  $email = $row['email'];
  $id = $row['id'];
  $status = $row['status'];
  $contact = $row['contact'];

  $get_post = "select * from posts where author_id='$id'";
  $run_post = mysqli_query($con,$get_post);

  $count = mysqli_num_rows($run_post);


  $get_comment = "select * from comments where user_id='$id'";
  $run_comment = mysqli_query($con,$get_comment);

  $count_comment = mysqli_num_rows($run_comment);



  $get_likes = "select * from posts_like where user_id='$id'";
  $run_likes = mysqli_query($con,$get_likes);

  $count_likes = mysqli_num_rows($run_likes);



}
else
{
  header('Location: login.php');
}



?>





<div class="box"><h3>DashBoard</h3>
<p> Add Artcile and likes our posts to have more signifcant numbers</p></div>



    <div class="row">
      <div class="col-lg-6">
        <div class="panel panel-info">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-plus fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">

                <p class="announcement-heading"><?php echo $count; ?></p>
                <p class="announcement-text">Total Post Added</p>
              </div>
            </div>
          </div>
          <a href="my_account.php?view_all_posts">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  Expand
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="panel panel-warning">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-barcode fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading"><?php echo $count_comment ?></p>
                <p class="announcement-text"> Comments Added</p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  Expand
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
  </div>
  <div class="row">
      <div class="col-lg-6">
        <div class="panel panel-danger">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-users fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading"><?php echo $count_likes ?></p>
                <p class="announcement-text">Total Likes</p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  Expand
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="panel panel-success">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-comments fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">9000</p>
                <p class="announcement-text">Request </p>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  Expand
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
</div>
