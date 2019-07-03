
      <?php

      global $con;



      if(isset($_POST['add_user'])){

          $c_name = $_POST['name'];

          $c_email = $_POST['email'];

          $c_pass = $_POST['password'];

          //$c_country = $_POST['c_country'];

          //$c_city = $_POST['c_city'];

          $c_contact = $_POST['contact'];

          // $c_address = $_POST[''];

          // $c_image = $_FILES['c_image']['name'];

          // $c_image_tmp = $_FILES['c_image']['tmp_name'];

          // $c_ip = getRealIpUser();

          //move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");

                    // $c_email = $_POST['c_email'];


              $duplicate=mysqli_query($con,"select * from admin where email='$c_email'");
              if (mysqli_num_rows($duplicate)>0)
              {
                echo "<script>alert('You have been already Registered ')</script>";

                    echo "<script>window.open('index.php?add_admin','_self')</script>";
              }
              else
              {
                $insert_customer = "insert into admin (name,email,password,status,contact) values ('$c_name','$c_email','$c_pass','Active', '$c_contact')";

                $run_customer = mysqli_query($con,$insert_customer);
                echo "<script>alert('You have Registered ')</script>";



              }

      }


              ?>






      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Admin</li>
        </ol>
          </nav><hr>


      <div class="row">
        <div class="col-md-6">
            <form action="" method="post">
              <div class="form-group">
                  <label for="category">User Name</label>
                  <input type="text" class="form-control" placeholder="Enter name" name="name">
              </div>
              <div class="form-group">
                  <label for="category">Email</label>
                  <input type="email" class="form-control" placeholder="Enter email" name="email">
              </div>
              <div class="form-group">
                  <label for="category">Password</label>
                  <input type="password" class="form-control" placeholder="Enter Password" name="password">
              </div>

              <div class="form-group">
                  <label for="category">Status</label>
                  <input type="text" class="form-control" placeholder="Enter status" name="status">
              </div>
              <div class="form-group">
                  <label for="category">Contact</label>
                  <input type="text" class="form-control" placeholder="Enter contact" name="contact">
              </div>

              <input type="submit" value="Add Admin" name="add_user" class="btn btn-primary">
            </form>
        </div>
        <div class="col-md-6">
            <h3> Admin List</h3>
            <table class="table table-hover table-bordered table-striped">
                <thread>
                    <tr>
                        <th>Sr. No.</th>
                        <th> Name</th>
                        <th> Email</th>
                        <th>Contact</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>
                </thread>
                <tbody>
                   <?php
                    global $con;
                      $get =  "select * from admin order by id desc limit 10";
                      $run = mysqli_query($con,$get);

                      while($cat = mysqli_fetch_array($run))
                      {
                          $id = $cat['id'];
                          $name= $cat['name'];
                          $email = $cat['email'];
                          $contact = $cat['contact'];
                          $status = $cat['status'];



                      echo "

                        <tr>


                              <td>   $id         </td>
                               <td>  $name         </td>
                                <td>   $email        </td>
                                <td>   $contact   </td>
                                <td> $status  </td>
                                 <td>   <a href='index.php?edit_users=$id'>  Edit     </a>    </td>
                                  <td>  <a href='index.php?delete_users=$id'>  Delete   </a>      </td>
                        </tr>
                        ";
                      }
                    ?>

                </tbody>
            </table>

        </div>
      </div>
