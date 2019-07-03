      <?php

      include('includes/top.php');
      include('includes/header-index.php');

                function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
              }

      if(isset($_POST['submit']))
      {
          global $con;
          $nameErr = $emailErr = $subjectErr = $messageErr = "";
          $name = $email = $subject = $message =  "";

          if (empty($_POST["name"])) {
              $nameErr = "Name is required";
            } else {
              $name = test_input($_POST["name"]);
            }

            if (empty($_POST["email"])) {
              $emailErr = "Email is required";
            } else {
              $email = test_input($_POST["email"]);
            }
            if (empty($_POST["subject"])) {
                $nameErr = "Subject is required";
              } else {
                $subject = test_input($_POST["subject"]);
              }
              if (empty($_POST["message"])) {
                  $nameErr = "message is required";
                } else {
                  $message = test_input($_POST["message"]);
                }



                // $name =mysqli_escape_real_string(trim($_POST['name']));
                // if(empty($name))
                // {
                //   $msg = "Name is required";
                // }
                // $email =mysqli_escape_real_string(trim($_POST['email']));
                // $message =mysqli_escape_real_string(trim($_POST['message']));
                // $subject =mysqli_escape_real_string(trim($_POST['subject']));
                   $token=(mt_rand(001,1000));
                    $get_data = "INSERT INTO contact(contact_id,name,email,subject,message,date) VALUES ('$token','$name','$email','$subject','$message',NOW())";
                    $run_data= mysqli_query($con,$get_data);

                    echo "<script>alert('Thank you for contacting Us Your Token number for this query is $token')</script>";
                      echo "<script>window.open('index.php','_self')</script>";

}
          ?>

          <style>
          .error {color: #FF0000;}
          </style>

 <section>
         <div class=" contact_us animated fadeInRight">
            <div class="container">
             <h2> Contact Us
         </h2>
         <p> Fell free to leave message</p>
         </div>

             </div>


          <div class="container">

            <div class="row">
              <div class="col-md-8"><!--- col-8 modelas allk  -->
                <div class="well well-sm">
                  <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

           <div class="row ">

               <div class="col-md-12">

                   <div class="form-group">
                       <label for="name">
                           Name <span class="error">* <?php echo $nameErr;?></span></label>
                       <input type="text" class="form-control" name="name" placeholder="Enter name" required="required" />

                   </div>
                   <div class="form-group">
                       <label for="email">
                           Email Address</label>
                       <div class="input-group">
                           <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                           </span>
                           <input type="email" class="form-control" name="email" placeholder="Enter email" required="required" /></div>
                           <span class="error">* <?php echo $emailErr;?></span>
                   </div>
                   <div class="form-group">
                       <label for="subject">
                           Subject</label>
                       <select  name="subject" class="form-control" required="required">
                           <option value="na" selected="">Choose One:</option>
                           <option value="service">General Customer Service</option>
                           <option value="suggestions">Suggestions</option>
                           <option value="product">Product Support</option>
                       </select>
                       <span class="error">* <?php echo $subjectErr;?></span>
                   </div>
               </div>
               <div class="col-md-12">
                   <div class="form-group">
                       <label for="name">
                           Message</label>
                       <textarea name="message" class="form-control" rows="9" cols="25" required="required"
                           placeholder="Message"></textarea>
                           <span class="error">* <?php echo $messageErr;?></span>
                   </div>
               </div>
               <div class="col-md-12">
                   <button type="submit" name="submit" class="btn btn-primary pull-right" >
                       Send Message</button>
               </div>
           </div>
           </form><!-- form Finish -->

                  </div>

              </div>

              <div class="col-md-4">
               <?php include('includes/sidebar2.php'); ?>

              </div>
      </div>






          <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </body>






      </html>


      <style>
      /*.post{
        background-color: black;
      }*/
      </style>
