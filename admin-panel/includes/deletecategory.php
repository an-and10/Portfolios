
<?php 
	
	//include('includes/db.php');
    if(isset($_GET['deletecategory'])){
        
        $delete_id = $_GET['deletecategory'];
        
        $delete_pro = "delete from categories where id='$delete_id'";
    
        $run_delete = mysqli_query($con,$delete_pro);
        
        if($run_delete){
            
            echo "<script>alert('One of your Product Category has been Deleted')</script>";
            
            echo "<script>window.open('index.php?addcategory','_self')</script>";
            
        }
        
    }
