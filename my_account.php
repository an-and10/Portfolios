<?php

 //
 // if(!isset($_SESSION['email'])){
 //      echo "<script>alert('You have Successfully Register With US!! PLease LOgin to Continue the process')</script>";
 //    // echo "<script>window.open('login.php','_self')</script>";
 //
 // }else{
 //
 //

include("includes/top.php");
include('includes/header-account.php');



?>


<!--New PAge conternt starts-->


     <br><br><br>
<div id="content">
      <div class="container">


         <div class="col-md-3"><!-- col-md-3 Begin -->

         <?php

          include("user/sidebar.php");

          ?>

           </div>

           <div class="col-md-9">
<?php
             if(isset($_GET['view_profile']))
                   {
                       include('view_profile.php');

                   }
                   else
                  {
                    ?>

               <div class="box">
                   <?php

                   if(isset($_GET['add_post']))
                   {
                       include('add_post.php');

                   }
                   if(isset($_GET['edit_user_posts']))
                   {
                       include('edit_user_posts.php');

                   }
                  if(isset($_GET['delete_user_posts']))
                   {
                       include('delete_user_posts.php');

                   }



                   if(isset($_GET['edit_account']))
                   {
                       include('edit_account.php');

                   }
                    if(isset($_GET['user_dashboard']))
                   {
                       include('user_dashboard.php');

                   }

                   if(isset($_GET['view_all_posts']))
                   {
                       include('view_all_posts.php');

                   }

                   if(isset($_GET['change_pass']))
                   {
                       include('change_pass.php');

                   }

                   if(isset($_GET['delete_account']))
                   {
                       include('delete_account.php');

                   }
                 }
                   ?>




               </div>
           </div>
         </div>
    </div>

         <?php
           // / include('footer.php');
            ?>
        </body>

</html>
