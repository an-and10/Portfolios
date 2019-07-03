<?php



function count_comments()
{
    $get_comment =  "select * from comments where post_id='$id'";
    $run_comment = mysqli_query($con,$get_comment);
    $count_comment = mysqli_num_rows($run_comment);
    
    return $count_comment;

} 


?>