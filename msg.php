<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>

    <link rel="stylesheet" href="css/root.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/block.css">
    <link rel="stylesheet" href="css/post.css">
    <link rel="stylesheet" href="css/msg.css">
</head>
<body>
<?php
        require 'module/_nav.php';
    ?>


    <div class="msg-block">
        <!-- 000000000000000000  left  -->
        <div class="msg-left">

            <?php
                require 'module/_msgf.php';
            ?>
            <!-- 00000000000000000000000000000000000000000000000000000000000000000000000000 -->
        </div>
        <!-- 000000000000000000  right  -->
    
        <div class="msg-right">


            <?php
                // session_start();
                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true ){
                    if($_SERVER['REQUEST_METHOD'] == 'GET'){
                        $rid = $_GET['r-id'];
                        $sid = $_SESSION['user_id'];

                        $sql = "SELECT * FROM `users` WHERE id='$rid'";
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($result)){
                            $fnamex = $row['first_name'];
                            $lnamex = $row['last_name'];
                            $usernamex = $row['username'];
                            $img = $row['profile_pic'];
                            
                            echo '
                                <div class="msg-header">
                                    <div class="msg-header-left">
                                        <img class="msg-profile" src="db\profile\\'.$img.'" alt="">
                                    </div>
                                    <div class="msg-header-right">
                                        <div class="msg-header-right-top">
                                            '.$fnamex.'&nbsp;'.$lnamex.'
                                        </div>
                                        <div class="msg-header-right-bottom">
                                            online
                                        </div>
                                    </div>
                                </div>                


                                <div class="msg-body">
                            ';
                        }

                        $showsql = "SELECT * FROM `msg` WHERE (from_usr_id='$rid' and to_usr_id='$sid') or (from_usr_id='$sid' and to_usr_id='$rid');";
                        $result = mysqli_query($conn,$showsql);
                        // if(mysqli_num_rows() > 0){
                        if(1){
                            while($row = mysqli_fetch_assoc($result)){
                                $msg = $row['msg'];
                                $lnamex = $row['read_status'];
                                $usernamex = $row['created_at'];
                                $img = $row['seen_at'];
    
                                if($row['from_usr_id'] === $sid){
                                    echo '
                                        <!-- sender -->
                                        <div class="msg-upper-box s">
                                            <div class="msg-box">
                                                '.$msg.'                                                    
                                            </div>
                                        </div>
                                    ';
                                }
                                else{
                                    echo '
                                        <!-- reciever -->
                                        <div class="msg-upper-box r">
                                            <div class="msg-box">
                                                '.$msg.'                                                                                                    
                                            </div>
                                        </div>
                                    ';
                                }
    
                            }
                        }echo '</div>';
                        
                        




                    }
                    // else
                    // {
                    //     echo 'please login';
                    // }

                    // for sending msg to friend
                    if($_SERVER['REQUEST_METHOD'] == 'POST')
                    {   
                        // echo 'hi';   
                        
                        $msql = $_POST['msg'];
                        
                        $msql = "INSERT INTO `msg` (`id`, `from_usr_id`, `to_usr_id`, `msg`, `read_status`, `created_at`, `seen_at`) VALUES (NULL, '$sid', '$rid', '$mmsg', '0', current_timestamp(), '2025-01-24 17:17:30.000000');";
                        // echo 'hi';   
                  
                        // $x = mysqli_query($conn,$msql);
                        $res = mysqli_query($conn,$msql);
                        if($resx){ 
                            // echo 'hi';
                        }
                    }
                        
                    

                }
            ?>

            <!-- center -->
            <!--
            <div class="msg-upper-box cen">
                    <div class="msg-box ">
                        seen    
                    </div>
                </div>
                </div>
                -->
            <div class="msg-footer">
                <form action="msg.php" method="POST">
                    <div class="msg-footer-left">
                        <input class="msg-send-txt" type="text" placeholder="text" name="msg" id="">
                    </div>
                    <div class="msg-footer-right">
                        <input class="msg-send-button" type="submit" value="send" name="send">
                    </div>
                </form>
            </div>

        </div>

    </div>
</body>
</html>