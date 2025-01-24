<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=home" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=post_add" />

    <link rel="stylesheet" href="css/root.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/block.css">
    <link rel="stylesheet" href="css/post.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/tab.css">
    <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
</head>
<body>
    <?php
        require 'module/_nav.php';
    ?>

    



    
        <?php
            session_start();
            $id=$_SESSION['user_id'];
            // echo $user_idx;
            require "module/_dbconnect.php";
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true ){
                $sql = 'SELECT * FROM `users` WHERE id='$id';';
                $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($result)){
                    $fnamex = $row['first_name'];
                    $lnamex = $row['last_name'];
                    $usernamex = $row['username'];
                    $img = $row['profile_pic'];
                
                    echo '
                        <div class="profile-block">
                            <div class="profile-header">
                                <div class="profile-header-l">
                                    <img class="profile-header-l-img" src="/img/profile.jpg" alt="x">
                                </div>
                                <div class="profile-header-r">
                                    <div class="profile-header-top">
                                        @'.$usernamex.'
                                    </div>
                                    <div class="profile-header-middle">
                                        <div class="profile-header-middle-a">0 posts</div>
                                        <div class="profile-header-middle-b">0 followers</div>
                                        <div class="profile-header-middle-c">0 following</div>
                                    </div>
                                    <div class="profile-header-bottom">
                                        <div class="profile-header-bottom-a">'.$fnamex.'&nbsp;'.$lnamex.'</div>
                                        <div class="profile-header-bottom-b">bio</div>
                                    </div>
                                </div>
                            </div>



                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center p-2">
                                <div><img src="./partials/'.$img.'" alt="./partials/img/profile3.jpg" height="40" class="rounded-circle border" style="width: 40px;height:40px;">
                                </div>
                                <div>&nbsp;&nbsp;</div>
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 style="margin: 0px;font-size: small;"></h6>
                                    <p style="margin:0px;font-size:small" class="text-muted"></p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <button class="btn btn-sm btn-primary">Follow</button>
                
                            </div>
                        </div>
                    ';
                
                }
            }
        ?>


            

        <div class="profile-tab">
            <div class="tab-header">
                <button type="button" data-da="tab1" class="tab-button">Post</button>
                <button type="button" data-da="tab2" class="tab-button">Status</button>
                <button type="button" data-da="tab3" class="tab-button">Share</button>
            </div>
            <div class="tab-body">
                <div class="tab">
                    post
                </div>
                <div class="tab2 tab-hide">
                    status
                </div>
                <div class="tab tab-hide">
                    share
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $("button").click(function(){
        $("div").addClass("hide");
        ty = $(this).attr("data-da");
        $("."+ty+"").removeClass("tab-hide");
        
    })
</script>

</html>