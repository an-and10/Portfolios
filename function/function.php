<?php


function cal_likes($post_id)
{

	global $con;
	
	$get_query = "select * from posts_like where post_id='$post_id'";
	$run_query = mysqli_query($con,$get_query);

	 $count_likes = mysqli_num_rows($run_query);

	return $count_likes;
}



function cal_posts($customer_id)
{
    $get= "select * from posts where author_id='$customer_id'";
    $run = mysqli_query($con,$get);
    $count = mysqli_num_rows($run);
    return  $count;
}
        

      

?>