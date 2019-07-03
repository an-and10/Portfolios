
  
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
                 
                  <th>Post Id</th>
                  <th> Date</th>
                  <th> Title</th>
                  <th>Author</th>
                  
                  
                  <th> Categories</th>
                  <th> tages</th>
                  
                  <th> Views</th>
                  <th> Status</th>
                  <th>Re-Direct</th>
              </tr>
          </thread>
          <tbody>
             <?php   
              global $con;
                $get_cat =  "select * from posts order by id desc";
                $run_cat = mysqli_query($con,$get_cat);
                    $i=0;
                while($row_cat = mysqli_fetch_array($run_cat))
                {   
                    $id = $row_cat['id'];
                    $date= $row_cat['date'];
                    $title = $row_cat['title'];
                    $author = $row_cat['author'];
                   // $image =$row_cat['image'];
                   // $author_image = $row_cat['author_image'];
                    $categories = $row_cat['categories'];
                    $tages =  $row_cat['tages'];
                   // $post_data = $row_cat['post_data'];
                    $views  = $row_cat['views'];
                    $status =  $row_cat['status'];
                    

                echo " 

                  <tr>

                 
                        <td>   $id        </td>
                         <td>  $date       </td>
                          <td>   $title       </td>
                          <td> $author </td>
                         
                          <td>   $categories       </td>
                          <td> $tages </td>
                         
                          <td>   $views      </td>
                          <td> $status </td>
                           <td>   <a href='index.php?view_post=$id'> View     </a>    </td>
                            
                  </tr>
                  ";
                }
              ?>
             
          </tbody>
      </table>
      
  </div>
</div>


