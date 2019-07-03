
                     $get_comment =  "select * from comments where post_id='$id'";
                     $run_comment = mysqli_query($con,$get_comment);
                     $count_comment = mysqli_num_rows($run_comment);

                     global $con;
                     $post_id = $_GET['post_id'];
        
                     $get_ip  ="select * from ipdb where ip='$ip'";
                     $run_ip = mysqli_query($con,$get_ip);
                     $check = mysqli_num_rows($run_ip);
                     if($check==0)
                     {
                         $insert_ip = "insert into ipdb (ip) values ('$ip')";
                         $run_ip_query = mysqli_query($con,$insert_ip);
                         if($run_ip_query)
                            {
                                            $update = " update table posts set views= $views+1
                                                            where post_id='$post_id'";
                                            $run_update = mysqli_query($con,$update);
                                            if($run_update)
                                            {
                                                echo "views updated";

                                            }
                                            else {
                                                echo " not updated views";
                                            }

                            
                            }
                            
                        }




                        
                    function getUserIpAddr(){
                        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
                            //ip from share internet
                            $ip = $_SERVER['HTTP_CLIENT_IP'];
                        }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
                            //ip pass from proxy
                            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                        }else{
                            $ip = $_SERVER['REMOTE_ADDR'];
                        }
                        return $ip;
                    }
                        $ip = getUserIpAddr();

                       