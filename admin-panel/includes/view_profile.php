
<?php

  $email = $_SESSION['email'];
  $get = "select * from admin where email ='$email'";
  $run = mysqli_query($con,$get);
  $row = mysqli_fetch_array($run);
  $name = $row['name'];
  $password = $row['password'];
  $contact = $row['contact'];
  $status= $row['status'];



 ?>





        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
              <li class="breadcrumb-item" aria-current="page"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">View Profile</li>
          </ol>
            </nav><hr>


            <div class="container bootstrap snippet">
        <div class="row ng-scope">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body text-center">
                        <div class="pv-lg"><img class="center-block img-responsive img-circle img-thumbnail thumb96" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Contact"></div>
                        <h3 class="m0 text-bold profile"><?php echo $name ?></h3>
                        <div class="mv-lg profile-description">
                            <p> Description</p>

                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-body">

                        <div class="h4 text-center">Profile Details</div>
                        <div class="row pv-lg">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8">
                                <form class="form-horizontal ng-pristine ng-valid">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="inputContact1">Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" id="inputContact1" type="text" placeholder="" value="<?php echo $name; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="inputContact2">Email</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" id="inputContact2" type="email" value="<?php echo $email ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="inputContact3">Phone</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" id="inputContact3" type="text" value="<?php echo $contact ?>" disabled>
                                        </div>
                                    </div>


                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="inputContact8">Position(ifAppicable)</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" id="inputContact8" type="text" placeholder="No Company" disabled>
                                        </div>
                                    </div>


                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
