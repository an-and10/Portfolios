


      <?php require_once('includes/db.php');
          session_start();


      ?>

      <!doctype html>
      <html lang="en">
        <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <!-- Bootstrap CSS -->
          <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/style3.css">
      <link rel="stylesheet" type="text/css" href="footer1.css">
      <link rel="stylesheet" type="text/css" href="css/animated.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
          <title>Anand Blog</title>
        </head>
        <body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Blog</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Welcome: <?php
                  if(isset($_SESSION['email']))
                  {
                      echo $_SESSION['email'];
                  }
                  else
                  {
                  echo "Guest " ;
                  }
                  ?></a></li>
              <li><a href="index.php">Home</a></li>
                <li><a href="index.php">All Post</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
                <ul class="dropdown-menu">
                 <?php
                      global $con;
                    $get = "select * from categories order by id desc limit 0,5";
                    $run =  mysqli_query($con,$get);
                    if(mysqli_num_rows($run)>0)
                    {
                        while($row = mysqli_fetch_array($run))
                        {
                              $category = $row['category'];
                              $cat_id  = $row['id'];
                             echo "<li><a href='index.php?cat_id=$cat_id'>$category</a></li> ";;

                        }
                    }
                    else
                    {
                        echo "<li><a href='#'>$category</a></li> ";
                    }


                  ?>

                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="my_account.php?user_dashboard"><i class="fa fa-file"></i> &nbsp;Dashboard</a></li>
                  <li><a href="my_account.php?add_post"><i class="fa fa-plus"></i> &nbsp;Add Posts</a></li>

                  <li role="separator" class="divider"></li>
                  <li><a href="logout.php"><i class="fa fa-power-off"></i> &nbsp;Logout</a></li>
                </ul>
              </li>
              <li><a href="contact.php">Contact Us</a></li>
                 <li><a href="login.php">Login</a></li>
                  <li><a href="register.php">Register</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
