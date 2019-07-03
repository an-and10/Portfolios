   <html>
    
  

 <footer style="margin-top:30px;">

     <div class="search-text">
         <div class="container">
             <div class="row text-center">
                <form action="" method="post">
                 <div class="form">
                     <h4>SIGN UP TO OUR NEWSLETTER</h4>
                     <div id="" class="form-search form-horizontal">
                         <input type="email" class="input-search" placeholder="Email Address" name="email" >
                        <button type="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" name="submit">Open Modal</button>
                        <!-- <button type="submit" class="btn btn-info btn-lg" name="submit" id="subscribe">Open Modal</button> -->
                        </div>
                 </div>
                </form>
             </div>
         </div>
     </div>

     <div class="footer-top3">
         <div class="container">
             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                 <a href="#"><i class="fa fa-facebook fa-2x"></i>Facebook</a>
             </div>
             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                 <a href="#"><i class="fa fa-twitter fa-2x"></i>Instagram</a>
             </div>
             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                 <a href="#"><i class="fa fa-flickr fa-2x"></i>Whatsapp</a>
             </div>
             
         </div>
     </div>

     <div class="container" style="border-top:1px solid grey;">
         <div class="row text-center">
             <div class="col-lg-6 col-lg-offset-3">
                 <ul class="menu">

                     <li>
                         <a href="#">Home</a>
                     </li>

                     <li>
                         <a href="#">About</a>
                     </li>

                     <li>
                         <a href="#">Blog</a>
                     </li>

                     <li>
                         <a href="#">Gallery</a>
                     </li>

                     <li>
                         <a href="#">Contact</a>
                     </li>

                 </ul>
             </div>
         </div>
     </div>

 </footer>


 <div class="copyright">
     <div class="container">

         <div class="row text-center">
             <p>Copyright © 2017 All rights reserved</p>
         </div>

     </div>
 </div>


 <?php

   
            global $con;
    if(isset($_POST['submit']))
    {   
            $email = mysqli_escape_string($con,$_POST['email']);
            $duplicate = "select * from subscriptions where email='$email'";
            $run_duplicate = mysqli_query($con,$duplicate);
            $row = mysqli_num_rows($run_duplicate);
            
            if($row>0)
            {
                echo " <script>alert('You have Already Subscribed')</script>";

            }
            else
            {
                 $get_insert = "insert into subscriptions(email) values ('$email')";
        $run_insert = mysqli_query($con,$get_insert);
        if($run_insert)
        {
            

                 ?>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
                    
      <body>< <!-- Modal -->


      <div class="container">
        
        <!-- Trigger the modal with a button -->
        <button type="button" id="btn1" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="visibility: hidden;">Open Modal</button>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <p>
 
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div></div>
  <script type="text/javascript">
    document.getElementById('btn1').click();
  </script>
  </body></html>
                
               <?php    
            
        }
        else
        {
            echo "<script>alert('Failed to Connect to the serve. Please try Again later')</script>";
            
        }

            }

       
       
        
           

    }

    


?>

