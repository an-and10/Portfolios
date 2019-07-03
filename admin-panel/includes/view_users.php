

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
                  <th>User. I</th>
                  <th> Name</th>
                  <th> Email</th>
                  <th>Password</th>
                  <th>Contact </th>
                  <th> Status</th>
                  <th> Edit</th>
                  <th> Delete</th>
                  <th> Profile Image </th>
              </tr>
          </thread>
          <tbody>
             <?php
              global $con;
                $get_cat =  "select * from users";
                $run_cat = mysqli_query($con,$get_cat);
                    $i=0;
                while($row_cat = mysqli_fetch_array($run_cat))
                {
                    $id = $row_cat['id'];
                    $name= $row_cat['name'];
                    $email = $row_cat['email'];
                    $password = $row_cat['password'];
                    $contact =$row_cat['contact'];
                    $status = $row_cat['status'];
                    $image = $row_cat['profile_image'];
                    $i++;

                echo "

                  <tr>


                        <td>   $id        </td>
                         <td>  $name        </td>
                          <td>   $email        </td>
                          <td> $password  </td>
                          <td> $contact  </td>
                          <td> $status</td>
                           <td>   <a href='index.php?edit_users=$id'>  Edit     </a>    </td>
                            <td>  <a href='index.php?delete_users=$id'>  Delete   </a>      </td>
                            <th> <img src='profile_images/$image' width='60' height='60'></th>
                  </tr>
                  ";
                }
              ?>

          </tbody>
      </table>

  </div>
</div>
