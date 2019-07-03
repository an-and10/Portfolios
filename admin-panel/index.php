
        <?php

          include('includes/top.php');


        ?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">
              <div class="col-md-12">
          <?php

               if(isset($_GET['dashboard']))
               {
                   include('includes/dashboard.php');
               }
               if(isset($_GET['addcategory']))
                    include('includes/addcategory.php');



              if(isset($_GET['editcategory']))
                    include('includes/editcategory.php');

              if(isset($_GET['deletecategory']))
                    include('includes/deletecategory.php');

              if(isset($_GET['add_users']))
              include('includes/add_users.php');

              if(isset($_GET['view_users']))
              include('includes/view_users.php');

              if(isset($_GET['edit_users']))
              include('includes/edit_users.php');


              if(isset($_GET['delete_users']))
              include('includes/delete_users.php');

              if(isset($_GET['view_posts']))
              include('includes/view_posts.php');


              if(isset($_GET['view_post']))
              include('includes/view_post.php');

              if(isset($_GET['view_comments']))
              include('includes/view_comments.php');


              if(isset($_GET['view_comment']))
              include('includes/view_comment.php');


              if(isset($_GET['add_posts']))
              include('includes/add_posts.php');

              if(isset($_GET['view_profile']))
              include('includes/view_profile.php');

              if(isset($_GET['add_admin']))
              include('includes/add_admin.php');


              ?>


          </div>

          <!-- Content Row -->
          </div>

      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->


  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
