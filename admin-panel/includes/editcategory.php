

<?php

//include('includes/db.php');
    if(isset($_GET['editcategory'])){
        
        $cat_id = $_GET['editcategory'];
        
        $edit_cat_query = "select * from categories where id='$cat_id'";
        
        $run_edit = mysqli_query($con,$edit_cat_query);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        
        $category = $row_edit['category'];
        
       // $cat_desc = $row_edit['cat_desc'];
        
    }

    ?>
   <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
      <li class="breadcrumb-item" aria-current="page"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Category</li>
  </ol>
    </nav><hr>

<div class="row">
  <div class="col-md-6">
      <form action="" method="post">
        <div class="form-group">
            <label for="category">Category Name </label>
            <input type="text" class="form-control" placeholder="Enter category" name="cat_name" value="<?php echo $category?>">
        </div>  
        <input type="submit" value="Add Category" name="update" class="btn btn-primary">
      </form>
  </div>
</div>


<?php
    
    if(isset($_POST['update'])){
              
        
        
        $cat_name = $_POST['cat_name'];
        
        $update_cat = "update categories set category='$cat_name' where id='$cat_id'";
        
        $run_cat = mysqli_query($con,$update_cat);
        
        if($run_cat){
            
            echo "<script>alert('Your Category Has Been Updated')</script>";
            
            echo "<script>window.open('index.php?addcategory','_self')</script>";
            
        }
        
    }
?>
