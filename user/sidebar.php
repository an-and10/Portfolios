      <?php
          global $con;
      if(isset($_SESSION['email']))

      {

        $email = $_SESSION['email'];

        $get = "select * from users where email='$email'";
        $run= mysqli_query($con,$get);
        $row= mysqli_fetch_array($run);
        $name = $row['name'];
        $email = $row['email'];
        $id = $row['id'];
        $status = $row['status'];
        $contact = $row['contact'];
        $image  = $row['profile_image'];

      }
      else
      {
        header('Location: login.php');
      }




      ?>
            <div class="profile-sidebar">
              <!-- SIDEBAR USERPIC -->
              <div class="profile-userpic">
                <img src="profile_images/<?php echo $image ?>" class="img-responsive" alt="">
              </div>
              <!-- END SIDEBAR USERPIC -->
              <!-- SIDEBAR USER TITLE -->
              <div class="profile-usertitle">
                <div class="profile-usertitle-name">
                 <?php echo $name ; ?>
                </div>
                <div class="profile-usertitle-job">
                  <?php echo $email  ;?>
                </div>
              </div>
              <!-- END SIDEBAR USER TITLE -->
              <!-- SIDEBAR BUTTONS -->
              <div class="profile-userbuttons">
                <button type="button" class="btn btn-success btn-sm">User Id: <?php echo $id ?></button>
                <button type="button" class="btn btn-danger btn-sm">Status: <?php echo $status ?></button>
              </div>
              <!-- END SIDEBAR BUTTONS -->
              <!-- SIDEBAR MENU -->
              <div class="profile-usermenu">
                <ul class="nav">

                  <li class="<?php if(isset($_GET['user_dashboard'])) {
          echo 'active';
      }?>">
                    <a href="my_account.php?user_dashboard">
                    <i class="glyphicon glyphicon-user"></i>
                   My Profile </a>
                  </li>
                  <li class="<?php if(isset($_GET['add_post'])) {
          echo 'active';
      }?>">
                    <a href="my_account.php?add_post">
                    <i class="glyphicon glyphicon-flag"></i>
                      Add Posts </a>
                  </li>
                  <li class="<?php if(isset($_GET['edit_account'])) {
          echo 'active';
      }?>">
                    <a href="my_account.php?edit_account">
                    <i class="glyphicon glyphicon-ok"></i>
                    Edit Profile</a>
                  </li>
                  <li class="<?php if(isset($_GET['change_pass'])) {
          echo 'active';
      }?>">
                    <a href="my_account.php?change_pass">
                    <i class="glyphicon glyphicon-flag"></i>
                    Change Password </a>
                  </li>
                  <li class="<?php if(isset($_GET['delete_account'])) {
          echo 'active';
      }?>">
                    <a href="my_account.php?delete_account">
                    <i class="glyphicon glyphicon-flag"></i>
                    Delete Account </a>
                  </li>
                  <li>
                    <a href="logout.php">
                    <i class="glyphicon glyphicon-flag"></i>
                    Logout </a>
                  </li>
                </ul>
              </div>
              <!-- END MENU -->
            </div>
