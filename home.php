<?php
  require "module/_dbconnect.php";
  ?>
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
</head>
<body>
    <?php
        require 'module/_nav.php';
    ?>


    <div class="home-block">
        <!-- data -->

        <div class="block-status">


            <!-- 0000000000000000000000000000000000000000000 -->
            <div class="block-status-box">
                <img class="block-status-img" src="img/profile.jpg" alt="x">
                <div class="block-status-txt">@username</div> 
            </div>
            <div class="block-status-box">
                <img class="block-status-img" src="img/profile.jpg" alt="x">
                <div class="block-status-txt">@username</div> 
            </div>
            <div class="block-status-box">
                <img class="block-status-img" src="img/profile.jpg" alt="x">
                <div class="block-status-txt">@username</div> 
            </div>
            <div class="block-status-box">
                <img class="block-status-img" src="img/profile.jpg" alt="x">
                <div class="block-status-txt">@username</div> 
            </div>
            <div class="block-status-box">
                <img class="block-status-img" src="img/profile.jpg" alt="x">
                <div class="block-status-txt">@username</div> 
            </div><div class="block-status-box">
                <img class="block-status-img" src="img/profile.jpg" alt="x">
                <div class="block-status-txt">@username</div> 
            </div><div class="block-status-box">
                <img class="block-status-img" src="img/profile.jpg" alt="x">
                <div class="block-status-txt">@username</div> 
            </div><div class="block-status-box">
                <img class="block-status-img" src="img/profile.jpg" alt="x">
                <div class="block-status-txt">@username</div> 
            </div><div class="block-status-box">
                <img class="block-status-img" src="img/profile.jpg" alt="x">
                <div class="block-status-txt">@username</div> 
            </div><div class="block-status-box">
                <img class="block-status-img" src="img/profile.jpg" alt="x">
                <div class="block-status-txt">@username</div> 
            </div><div class="block-status-box">
                <img class="block-status-img" src="img/profile.jpg" alt="x">
                <div class="block-status-txt">@username</div> 
            </div>
            <div class="block-status-box">
                <img class="block-status-img" src="img/profile.jpg" alt="x">
                <div class="block-status-txt">@username</div> 
            </div>
            <div class="block-status-box">
                <img class="block-status-img" src="img/profile.jpg" alt="x">
                <div class="block-status-txt">@username</div> 
            </div>
            <div class="block-status-box">
                <img class="block-status-img" src="img/profile.jpg" alt="x">
                <div class="block-status-txt">@username</div> 
            </div>
            <div class="block-status-box">
                <img class="block-status-img" src="img/profile.jpg" alt="x">
                <div class="block-status-txt">@username</div> 
            </div>
            <div class="block-status-box">
                <img class="block-status-img" src="img/profile.jpg" alt="x">
                <div class="block-status-txt">@username</div> 
            </div>
            <div class="block-status-box">
                <img class="block-status-img" src="img/profile.jpg" alt="x">
                <div class="block-status-txt">@username</div> 
            </div>
            <!-- 0000000000000000000000000000000000000000000 -->

        </div>



        <div class="block-post">
            <?php
                require 'module/_postview.php';
            ?>
        </div>





    </div>
</body>
</html>