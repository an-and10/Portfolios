

<?php
    global $con;
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


  $get_comment = "select * from comments where author_id='$id'";
  $run_comment = mysqli_query($con,$get_post);

  $count_comment = mysqli_num_rows($run_post);




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
          <a href="my_account.php?view_all_post">
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
                <p class="announcement-heading">12</p>
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
                <p class="announcement-heading">18</p>
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



<center><!-- center Begin -->
    
    <h1> Do You Realy Want To Remove this Article ? </h1>
    
    <form action="" method="post"><!-- form Begin -->
        
       <input type="submit" name="Yes" value="Yes, I Want To Delete" class="btn btn-danger"> 
        
       <input type="submit" name="No" value="No, I Dont Want To Delete" class="btn btn-success"> 
        
    </form><!-- form Finish -->
    
</center>


<?php 
if(isset($_GET['delete_user_posts']))
{	

		$post_id = $_GET['delete_user_posts'];
			if(isset($_POST['Yes'])){
		    
		    $delete_customer = "delete from posts where id='$post_id'";
		    
		    $run_delete_customer = mysqli_query($con,$delete_customer);
		    
		    if($run_delete_customer){
		        
		        
		        
		        echo "<script>alert('Successfully deleted your Artcile, Feel sorry about this. Good Bye')</script>";
		        
		        echo "<script>window.open('my_account.php?user_dashboard','_self')</script>";
		        
		    }
		    
		}




			if(isset($_POST['No'])){
			    
			    echo "<script>window.open('my_account.php?view_all_posts','_self')</script>";
			    
}
}

?>