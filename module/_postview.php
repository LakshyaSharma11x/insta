
<?php
    require "module/_dbconnect.php";
    // session_start();

    // $post_v = 'SELECT * FROM `friend` WHERE user_id="1"';
    // $post_result = mysqli_query($conn,$post_v);
    // // echo $post_result;
    // while($row = mysqli_fetch_assoc($post_result)){
        
    // }


    $current_user = $_SESSION['user_id'];
    $q="select id from friend where user_id='$current_user'";
    $res=mysqli_query($conn,$q);
    $ar=array();
   while($row=mysqli_fetch_array($res))
    {
        $arr[]=$row[0];
    }
    
    print_r($arr);


    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true ){

        $post_sql = 'SELECT * FROM `post`';
        $post_result = mysqli_query($conn,$post_sql);
        while($row = mysqli_fetch_assoc($post_result)){

            $id = $row['id'];
            $text = $row['post_text'];
            $user_id = $row['user_id'];
            $img = $row['post_img'];

            $uimg;
            $usernamex;
            
$q="select id from friend where follower='$user_id' and user_id='$current_user'";
$res=mysqli_query($conn,$q);
$countcheck=mysqli_num_rows($res);
if($countcheck>0)
{


            //for like 
            $like_sql = "SELECT * FROM `likes` WHERE post_id='$id'";
            $like_result = mysqli_query($conn,$like_sql);
            $no_like = mysqli_num_rows($like_result);
            echo "ok",$no_like;
            
            $user_sql = "SELECT * FROM `users` WHERE id='$user_id'";
            $user_result = mysqli_query($conn,$user_sql);
            while($row = mysqli_fetch_assoc($user_result)){
                        
                $uimg = $row['profile_pic'];
                $usernamex = $row['username'];
            }
            
            // $like_click_sql = "INSERT INTO `likes` (`id`, `post_id`, `user_id`, `parent`) VALUES (NULL, '1', '1', '');";
            // $res = mysqli_query($conn,$like_click_sql);
            //

                 echo '
                    <div class="post-card">
                <div class="post-card-header">
                    <div class="post-card-left">
                        <img class="post-card-img-usr" src="db\profile\\'.$uimg.'" alt="x">
                    </div>
                    <div class="post-card-right">
                        <div class="post-card-username">
                            '.$usernamex.'
                        </div>

                        <div class="post-card-txt">
                            <!-- Lakshya Sharma -->
                        </div>
                    </div>
                </div>
                <div class="post-card-body">
                <div>'.$text.'</div>
                    <img  class="post-card-body-post-img" src="db\post\\'.$img.'" alt="x">
                    
                </div>
                <div class="post-card-footer">
                    <div class="post-card-footer-top">
                        <div class="post-button">'.$no_like.'</div>
                        <div class="post-button">unlike</div>
                        
                    </div>
                    <div class="post-card-footer-bottom">
                        <div class="post-card-footer-bottom-left">
                            <input class="post-comment" type="text" placeholder="comment">
                        </div>
                        <div class="post-card-footer-bottom-right">
                            <input class="post-comment-button" type="submit" value="comment">
                        </div>
                    </div>
                </div>
            </div>


           ';
            
        }
    }

    // esle{
        //KHUD KI POST show karne kai liye
    // }

    }
    // INSERT INTO `likes` (`id`, `post_id`, `user_id`, `parent`) VALUES (NULL, '1', '2', '1');
?>
        
 