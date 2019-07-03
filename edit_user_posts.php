
<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- <script src="js/tinymce/js/tinymce/tinymce.min.js"></script> -->
    <!-- <script>tinymce.init({ selector:'textarea'});</script> -->
    
</head>

    
      <?php
      if(isset($_GET['edit_user_posts']))
      {

          $post_id = $_GET['edit_user_posts'];
        $get_posts = "select * from posts where id='$post_id'";
        $run_posts = mysqli_query($con,$get_posts);
        $row = mysqli_fetch_array($run_posts);
        $title = $row['title'];
        $categories = $row['categories'];
        $author = $row['author'];
        $data = $row['post_data'];
        $images = $row['image'];
        $author_images = $row['author_image'];

      }

        

      ?>

      <body>
        <div class="panel panel-default"><!-- panel panel-default Begin -->
            
           <div class="panel-heading"><!-- panel-heading Begin -->
               
               <h3 class="panel-title"><!-- panel-title Begin -->
                   
                   <i class="fa fa-money fa-fw"></i>Add  Post 
                   
               </h3><!-- panel-title Finish -->
               
           </div> <!-- panel-heading Finish -->
           
           <div class="panel-body"><!-- panel-body Begin -->
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Post Title </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="title" type="text" class="form-control"  value= "<?php echo $title; ?>" required >
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Post Category </label> 
                      
                      <div class="col-md-6" style="color:black"><!-- col-md-6 Begin -->
                          
                          <select name="category" class="form-control" required=""><!-- form-control Begin -->
                              
                              <option> <?php echo $categories ?></option>
                              <option disabled> Select a New Category </option>
                              
                              <?php 
                              
                              $get_p_cats = "select * from categories";
                              $run_p_cats = mysqli_query($con,$get_p_cats);
                              
                              while ($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                  
                                  $id = $row_p_cats['id'];
                                  $category= $row_p_cats['category'];
                                  
                                  echo "
                                  
                                  <option value='$category'> $category </option>
                                  
                                  ";
                                  
                                  
                              }
                              
                              ?>
                              
                          </select><!-- form-control Finish -->
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                       <label class="col-md-3 control-label"> Post Author</label> 
                       
                       <div class="col-md-6"><!-- col-md-6 Begin -->
                           
                           <input name="author" type="text" class="form-control" required value="<?php echo $title ?>">
                           
                       </div><!-- col-md-6 Finish -->
                        
                    </div>
                    <!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Post  image 1 </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_img1" type="file" class="form-control" required value="<?php echo $title ?>" >
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label">Post Image  2 </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_img2" type="file" class="form-control" value="<?php echo $title ?>">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <!-- form-group Finish -->
                   
                   
                            
                    
                   <!-- form-group Finish -->
                  
                   
                   <!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Article </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <textarea name="data" cols="19" rows="6" class="form-control" value="<?php echo $title ?>" ></textarea>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"></label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="update" value="Update Article" type="submit" class="btn btn-primary form-control">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
               </form><!-- form-horizontal Finish -->
               
           </div><!-- panel-body Finish -->
                           
        
         
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script> 
    
</body>
</html>

<?php
if(isset($_POST['update']))
{
  $title = $_POST['title'];
  $category = $_POST['category'];
  $author = $_POST['author'];
  $product_img1 = $_POST['product_img1'];
  $product_img2 = $_POST['product_img2'];
  $data = $_POST['data'];


//$update_post = "update posts set "
}
?>


