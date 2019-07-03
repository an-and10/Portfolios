
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

                  <th>Comment Id</th>
                  <th> Name</th>
                  <th> Post Id</th>
                  <th>Comment Article</th>
                    <th> Status</th>

              </tr>
          </thread>
          <tbody>

    <?php
            if(isset($_GET['view_comment']))
            {

                $id= $_GET['view_comment'];
                $get_cat =  "select * from comments where id=$id";
                $run_cat = mysqli_query($con,$get_cat);
                    $i=0;
                while($row_cat = mysqli_fetch_array($run_cat))
                {
                    $id = $row_cat['id'];

                    $name = $row_cat['name'];
                    $comment = $row_cat['comment'];
                    $post_id = $row_cat['post_id'];

                    $status =  $row_cat['status'];


                    echo "

                    <tr>


                          <td>   $id        </td>
                           <td>  $name      </td>
                            <td> $post_id </td>

                            <td> $comment </td>

                            <td>   <form method='POST' action = ''>
                                    <select class=' custom-select-sm mb-3' name='status'>
                                    <option selected>Select to Update</option>
                                    <option value = '' disabled selected><b>$status</b></option>
                                    <option value='Approved'>Approved</option>
                                    <option value='Report'>Report</option>

                                    <option value='Remove'>Remove</option>

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


    $update_cat = "update comments set status='$status' where id='$id'";

    $run_cat = mysqli_query($con,$update_cat);

    if($run_cat){

        echo "<script>alert('YourComment Has Been Updated')</script>";

        echo "<script>window.open('index.php?view_comments','_self')</script>";

    }

}



?>
