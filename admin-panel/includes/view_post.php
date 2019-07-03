
   <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
      <li class="breadcrumb-item" aria-current="page"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Users</li>
  </ol>
    </nav><hr>



    <div class="col-md-12">
      <table class="table table-hover table-bordered table-striped">
          <thread>
              <tr>

                  <th>Post Id</th>
                  <th> Post title</th>
                  <th> Post Image</th>
                  <th>Post Article</th>
                    <th> Status</th>

              </tr>
          </thread>
          <tbody>

    <?php
            if(isset($_GET['view_post']))
            {

                $id= $_GET['view_post'];
                $get_cat =  "select * from posts where id=$id";
                $run_cat = mysqli_query($con,$get_cat);
                    $i=0;
                while($row_cat = mysqli_fetch_array($run_cat))
                {
                    $id = $row_cat['id'];
                    $date= $row_cat['date'];
                    $title = $row_cat['title'];
                    $author = $row_cat['author'];
                    $image =$row_cat['image'];
                    $author_image = $row_cat['author_image'];
                    $categories = $row_cat['categories'];
                    $tages =  $row_cat['tages'];
                    $post_data = $row_cat['post_data'];
                    $views  = $row_cat['views'];
                    $status =  $row_cat['status'];


                    echo "

                    <tr>


                          <td>   $id        </td>
                           <td>  $title       </td>
                            <td><img src='product_images/$image' alt='Article Image'  width='90' height='60'></img></td>
                            <td> $post_data </td>

                            <td>   <form method='POST' action = ''>
                                    <select class=' custom-select-sm mb-3' name='status'>
                                    <option selected>Select to Update</option>
                                    <option value = '' disabled selected><b>$status</b></option>
                                    <option value='Publish'>Publish</option>
                                    <option value='Report'>Report</option>
                                    <option value='Trash'>Trash</option>
                                    <option value='Remove'>Remove</option>
                                    <option value='Draft'>Draft</option>
                                </select>
                                <input type='submit' name='update_status' class='btn btn-primary' value='Update Status' style='font-size:10px;'>
                                </form>
                           </td>



                    </tr>
                    ";
                  }
                }
                ?>

            </tbody>
        </table>

    </div>
  </div>


  <?php

if(isset($_POST['update_status'])){


        $status = $_POST['status'];


    $update_cat = "update posts set status='$status' where id='$id'";

    $run_cat = mysqli_query($con,$update_cat);

    if($run_cat){

        echo "<script>alert('Your Posts Has Been Updated')</script>";

        echo "<script>window.open('index.php?view_posts','_self')</script>";

    }

}



?>
