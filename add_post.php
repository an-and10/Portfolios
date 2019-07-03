

    <!DOCTYPE html>
    <html lang="en">
    <head>

        <script src="js/tinymce/js/tinymce/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea'});</script>

    </head>
    <body>
       <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
          <li class="breadcrumb-item" aria-current="page"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Posts</li>
      </ol>
        </nav><hr>



            <div class="panel panel-default"><!-- panel panel-default Begin -->

               <div class="panel-heading"><!-- panel-heading Begin -->

                   <h3 class="panel-title"><!-- panel-title Begin -->

                       <i class="fa fa-money fa-fw"></i>Add  Post

                   </h3><!-- panel-title Finish -->

               </div> <!-- panel-heading Finish -->

               <div class="panel-body"><!-- panel-body Begin -->

                   <form method="post" class="form-horizontal" enctype="multipart/form-data" action=""><!-- form-horizontal Begin -->

                       <div class="form-group"><!-- form-group Begin -->

                          <label class="col-md-3 control-label"> Post Title </label>

                          <div class="col-md-9"><!-- col-md-6 Begin -->

                              <input name="title" type="text" class="form-control" required="">

                          </div><!-- col-md-6 Finish -->

                       </div><!-- form-group Finish -->

                       <div class="form-group"><!-- form-group Begin -->

                          <label class="col-md-3 control-label"> Post Category </label>

                          <div class="col-md-9" style="color:black"><!-- col-md-6 Begin -->

                              <select name="category" class="form-control" required=""><!-- form-control Begin -->

                                  <option> Select a Post Category </option>

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
                                    <option value ='Others'>Others</option>
                              </select><!-- form-control Finish -->

                          </div><!-- col-md-6 Finish -->

                       </div><!-- form-group Finish -->


                       <div class="form-group"><!-- form-group Begin -->

                           <label class="col-md-3 control-label"> Post Author</label>

                           <div class="col-md-9"><!-- col-md-6 Begin -->

                               <input name="author" type="text" class="form-control" required="">

                           </div><!-- col-md-6 Finish -->

                        </div>
                        <!-- form-group Finish -->

                       <div class="form-group"><!-- form-group Begin -->

                          <label class="col-md-3 control-label"> Post Author Image </label>

                          <div class="col-md-9"><!-- col-md-6 Begin -->

                              <input name="product_img1" type="file" class="form-control" >

                          </div><!-- col-md-6 Finish -->

                       </div><!-- form-group Finish -->

                       <div class="form-group"><!-- form-group Begin -->

                          <label class="col-md-3 control-label">Post Article Image  </label>

                          <div class="col-md-9"><!-- col-md-6 Begin -->

                              <input name="product_img2" type="file" class="form-control">

                          </div><!-- col-md-6 Finish -->

                       </div><!-- form-group Finish -->

                       <!-- form-group Finish -->

                       <div class="form-group"><!-- form-group Begin -->

                          <label class="col-md-3 control-label"> Post Tags </label>

                          <div class="col-md-9"><!-- col-md-6 Begin -->

                              <input name="tags" type="text" class="form-control" required>

                          </div><!-- col-md-6 Finish -->

                       </div>


                       <!-- form-group Finish -->


                       <!-- form-group Finish -->

                       <div class="form-group"><!-- form-group Begin -->

                          <label class="col-md-3 control-label"> Product Article </label>

                          <div class="col-md-9"><!-- col-md-6 Begin -->

                              <textarea name="data" cols="19" rows="6" class="form-control"></textarea>

                          </div><!-- col-md-6 Finish -->

                       </div><!-- form-group Finish -->

                       <div class="form-group"><!-- form-group Begin -->

                          <label class="col-md-3 control-label"></label>

                          <div class="col-md-9"><!-- col-md-6 Begin -->

                              <input name="submit" value="Insert Post" type="submit" class="btn btn-primary form-control">

                          </div><!-- col-md-6 Finish -->

                       </div><!-- form-group Finish -->

                   </form><!-- form-horizontal Finish -->

               </div><!-- panel-body Finish -->



        <script src="js/jquery-331.min.js"></script>
        <script src="js/bootstrap-337.min.js"></script>

    </body>
    </html>


    <?php

            global $con;
    if(isset($_POST['submit']))
    {

        $title = $_POST['title'];
        $category= $_POST['category'];
        $author = $_POST['author'];
        $tags = $_POST['tags'];
        //$date = $_POST['product_keywords'];
        $data = $_POST['data'];
        $author_id=111;
        // $product_color = $_POST['product_color'];
        // $product_company  = $_POST['product_company'];

        $product_img1 = $_FILES['product_img1']['name'];
        $product_img2 = $_FILES['product_img2']['name'];
       // $product_img3 = $_FILES['product_img3']['name'];

        $temp_name1 = $_FILES['product_img1']['tmp_name'];
        $temp_name2 = $_FILES['product_img2']['tmp_name'];
        //$temp_name3 = $_FILES['product_img3']['tmp_name'];

        move_uploaded_file($temp_name1,"product_images/$product_img1");
        move_uploaded_file($temp_name2,"product_images/$product_img2");
       // move_uploaded_file($temp_name3,"product_images/$product_img3");

        // $insert_post = "insert into posts values ( NOW(),'$title','$')"


        echo "<h1>$author</h1>";
        echo "<h1>$title</h1>";
        echo "<h1>$category</h1>";
        echo "<h1>$tags</h1>";
        echo "<h1>$data</h1>";
        echo "<h1>$author_id</h1>";
        echo "<h1>$product_img2</h1>";
        echo "<h1>$product_img1</h1>";

    //
    //$insert_post = "insert into posts (date,title,author,author_id,image,author_image,categories,tages,post_data,views,status) values ('Now','$title','$author','$author_id','$product_img1','$product_img2','$category','$tags','$data','1','Review')";
    //
    //     $run_post = mysqli_query($con,$insert_post);
    //
    //     if($run_post){
    //
    //         echo "<script>alert('Product has been inserted sucessfully')</script>";
    //          echo "<script>window.open('index.php?insert_product','_self')</script>";
    //
    //     }
    //
    //
    // }

    $insert = "insert into posts (date,title,author,author_id,image,author_image,categories,tages,post_data,views,status) values (NOW(),'$title',
    '$author','$author_id','$product_img1','$product_img2','$category','$tags','$data','1','Review')";

    $run = mysqli_query($con,$insert);
    if($run)
    {
      echo "<script>alert('Post has been inserted sucessfully')</script>";
       echo "<script>window.open('index.php?insert_product','_self')</script>";
    }
    else {
      echo "<script>alert('Failed')</script>";
       // echo "<script>window.open('index.php?insert_product','_self')</script>";
    }
  }


    ?>


        </div>
