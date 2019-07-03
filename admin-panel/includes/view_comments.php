

   <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
      <li class="breadcrumb-item" aria-current="page"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Posts</li>
  </ol>
    </nav><hr>

    <div class="col-md-12">
      <table class="table table-hover table-bordered table-striped">
          <thread>
              <tr>

                  <th>Comment Id</th>
                  <th> Date</th>
                  <th> Name</th>
                  <th>User Id</th>


                  <th> Post Id</th>
                  <th> Comments</th>


                  <th> Status</th>
                  <th>Re-Direct</th>
              </tr>
          </thread>
          <tbody>
             <?php
              global $con;
                $get_cat =  "select * from comments order by id desc";
                $run_cat = mysqli_query($con,$get_cat);
                    $i=0;
                while($row_cat = mysqli_fetch_array($run_cat))
                {
                    $id = $row_cat['id'];
                    $date= $row_cat['date'];
                    $name = $row_cat['name'];
                    $user_id = $row_cat['user_id'];
                   // $image =$row_cat['image'];
                   // $author_image = $row_cat['author_image'];
                    $post_id = $row_cat['post_id'];
                    $comments =  $row_cat['comment'];
                   // $post_data = $row_cat['post_data'];
                    // $views  = $row_cat['views'];
                    $status =  $row_cat['status'];


                echo "

                  <tr>


                        <td>   $id        </td>
                         <td>  $date       </td>
                          <td>   $name       </td>
                          <td> $user_id </td>

                          <td>   $post_id       </td>
                          <td> $comments </td>


                          <td> $status </td>
                           <td>   <a href='index.php?view_comment=$id'> View     </a>    </td>

                  </tr>
                  ";
                }
              ?>

          </tbody>
      </table>

  </div>
</div>
