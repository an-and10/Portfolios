<?php 

$customer_session = $_SESSION['email'];

$get_customer = "select * from users where email='$customer_session'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['id'];

$customer_name = $row_customer['name'];

$customer_email = $row_customer['email'];

 $customer_status = $row_customer['status'];

// $customer_city = $row_customer['customer_city'];

 $customer_contact = $row_customer['contact'];

// $customer_address = $row_customer['customer_address'];

// $customer_image = $row_customer['customer_image'];

?>

<h1 align="center"> Edit Your Account </h1>

<form action="" method="post" enctype="multipart/form-data"><!-- form Begin -->
    
    <div class="form-group"><!-- form-group Begin -->
        
        <label> User  Name: </label>
        
        <input type="text" name="c_name" class="form-control" value="<?php echo $customer_name; ?>" required>
        
    </div><!-- form-group Finish -->
    
    <div class="form-group"><!-- form-group Begin -->
        
        <label>  Email: </label>
        
        <input type="text" name="c_email" class="form-control" value="<?php echo $customer_email; ?>" required disable>
        
    </div><!-- form-group Finish -->
    
    <div class="form-group"><!-- form-group Begin -->
        
        <label> Status: </label>
        
        <input type="text" name="c_status" class="form-control" value="<?php echo $customer_status; ?>" disabled>
        
    </div><!-- form-group Finish -->
    
        
    <div class="form-group"><!-- form-group Begin -->
        
        <label>  Contact: </label>
        
        <input type="text" name="c_contact" class="form-control" value="<?php echo $customer_contact; ?>" required>
        
    </div><!-- form-group Finish -->
    
    
    <!-- <div class="form-group">
        
        <label> Costumer Image: </label>
        
        <input type="file" name="c_image" class="form-control form-height-custom">
        
        <img class="img-responsive" src="customer_images/something to be placed here" alt="Costumer Image">
        
    </div> -->
    
    <div class="text-center"><!-- text-center Begin -->
        
        <button name="update" class="btn btn-primary"><!-- btn btn-primary Begin -->
            
            <i class="fa fa-user-md"></i> Update Now
            
        </button><!-- btn btn-primary inish -->
        
    </div><!-- text-center Finish -->
    
</form><!-- form Finish -->

<?php 

if(isset($_POST['update'])){
    
    $update_id = $customer_id;
    
    $c_name = $_POST['c_name'];
    
    $c_email = $_POST['c_email'];
    
    $c_status = $_POST['c_status'];
    
    // $c_city = $_POST['c_city'];
    
    // $c_address = $_POST['c_address'];
    
    $c_contact = $_POST['c_contact'];
    
    // $c_image = $_FILES['c_image']['name'];
    
    // $c_image_tmp = $_FILES['c_image']['tmp_name'];
    
    // move_uploaded_file ($c_image_tmp,"customer_images/$c_image");
    
    $update_customer = "update users set name='$c_name',email='$c_email',contact='$c_contact' where id='$update_id' ";
    
    $run_customer = mysqli_query($con,$update_customer);
    
    if($run_customer){
        
        echo "<script>alert('Your account has been edited, to complete the process, please Relogin')</script>";
        
        echo "<script>window.open('logout.php','_self')</script>";
        
    }
    
}

?>