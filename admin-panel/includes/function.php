<?php

function cal_posts()
{
  global $con;


    $get_items= "select * from posts";
    $run_items= mysqli_query($con,$get_items);
    $count_posts= mysqli_num_rows($run_items);

    return $count_posts;

}

function cal_users()
{
  global $con;


    $get_items= "select * from users";
    $run_items= mysqli_query($con,$get_items);
    $count_users= mysqli_num_rows($run_items);

    return $count_users;

}


function cal_categories()
{
  global $con;


    $get_items= "select * from categories";
    $run_items= mysqli_query($con,$get_items);
    $count_users= mysqli_num_rows($run_items);

    return $count_users;

}


function cal_comments()
{
  global $con;


    $get_items= "select * from comments";
    $run_items= mysqli_query($con,$get_items);
    $count_users= mysqli_num_rows($run_items);

    return $count_users;

}

function cal_user_request_pending()
{
  global $con;


    $get_items= "select * from users where status!='Appproved'";
    $run_items= mysqli_query($con,$get_items);
    $count_users= mysqli_num_rows($run_items);

    return $count_users;

}

function cal_followers()
{
  global $con;


    $get_items= "select * from subscriptions" ;
    $run_items= mysqli_query($con,$get_items);
    $count_users= mysqli_num_rows($run_items);

    return $count_users;

} 
?>