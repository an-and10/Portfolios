
  
  
  
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
            <label for="category">Category Name</label>
            <input type="text" class="form-control" placeholder="Enter category" name="cat_name">
        </div>  
        <input type="submit" value="Add Category" name="cat_submit" class="btn btn-primary">
      </form>
  </div>
  <div class="col-md-6">
      <table class="table table-hover table-bordered table-striped">
          <thread>
              <tr>
                  <th>Sr. No.</th>
                  <th> Category Name</th>
                  <th> Posts</th>
                  <th>Edit</th>
                  <th>Delete</th>
              </tr>
          </thread>
          <tbody>
             <?php   
              global $con;
                $get_cat =  "select * from categories";
                $run_cat = mysqli_query($con,$get_cat);

                while($row_cat = mysqli_fetch_array($run_cat))
                {
                    $cat_id = $row_cat['id'];
                    $cat_name= $row_cat['category'];


                echo " 

                  <tr>


                        <td>   $cat_id         </td>
                         <td>  $cat_name         </td>
                          <td>   12         </td>
                           <td>   <a href='index.php?editcategory=$cat_id'>  Edit     </a>    </td>
                            <td>  <a href='index.php?deletecategory=$cat_id'>  Delete   </a>      </td>
                  </tr>
                  ";
                }
              ?>
             
          </tbody>
      </table>
      
  </div>
</div>




<?php
global $con;
if(isset($_POST['cat_submit'])){
  
  //$cat_title = $_POST['category_title'];
  
  $cat_name = $_POST['cat_name'];
    
    $get_name = "select * from categories where category='$cat_name'";
    
    $run_name = mysqli_query($con,$get_name);
   if(mysqli_num_rows($run_name)>0)
    {   
            
      echo "<script>alert('Your Have Already   Added Category')</script>";
   }

        else
        {
             $insert_cat = "insert into categories (category) values ('$cat_name')";
  
                $run_cat = mysqli_query($con,$insert_cat);
            
            echo "<script>alert('Your New  Category Has Been Added')</script>";
            
        }
    
}

?>

  
