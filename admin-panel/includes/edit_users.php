<?php

if(isset($_GET['edit_users'])){
        
    $cat_id = $_GET['edit_users'];
    
    $edit_cat_query = "select * from users where id='$cat_id'";
    
    $run_edit = mysqli_query($con,$edit_cat_query);
    
    $row_edit = mysqli_fetch_array($run_edit);
    
    $id =   $row_edit['id'];
    $name = $row_edit['name'];
    $email = $row_edit['email'];
    $password = $row_edit['password'];
    $contact = $row_edit['contact'];
    $status = $row_edit['status'];

    
   // $cat_desc = $row_edit['cat_desc'];
    
}




?>
   <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
      <li class="breadcrumb-item" aria-current="page"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Edit Users</li>
  </ol>
    </nav><hr>

     
<div class="row">
  <div class="col-md-6">
      <form action="" method="post">
        <div class="form-group">
            <label for="category">User Name</label>
            <input type="text" class="form-control" value="<?php echo $name ?>" name="name" >
        </div>  
        <div class="form-group">
            <label for="category">Email</label>
            <input type="email" class="form-control" value="<?php echo $email ?>" name="email">
        </div> 
        <div class="form-group">
            <label for="category">Password</label>
            <input type="password" class="form-control" value="<?php echo $password ?>" name="password">
        </div> 
        
        <div class="form-group">
            <label for="category">Status</label>
            <input type="text" class="form-control" value="<?php echo $status ?>" name="status">
        </div> 
        <div class="form-group">
            <label for="category">Contact</label>
            <input type="text" class="form-control" value="<?php echo $contact ?>" name="contact">
        </div> 

        <input type="submit" value="Update Users" name="update_users" class="btn btn-primary">
      </form>
  </div>
</div>

<?php 

if(isset($_POST['update_users'])){
              $id= $_GET['edit_users'];
              $name = $_POST['name'];
              $email = $_POST['email'];
              $password = $_POST['password'];

              $status= $_POST['status'];
              $contact = $_POST['contact'];

              
              //$cat_desc = $_POST['cat_desc'];
              
              $update_cat = "update users set name='$name',email='$email', password='$password', status='$status', contact='$contact' where id='$id'";
              
              $run_cat = mysqli_query($con,$update_cat);
              
              if($run_cat){
                  
                  echo "<script>alert('Your Details Has Been Updated')</script>";
                  
                  echo "<script>window.open('index.php?view_users','_self')</script>";
                  
              }
              
          }

          ?>