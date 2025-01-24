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

            <div class="msg-usr-profile">
                <div class="msg-usr-profile-left">
                    <div class="msg-usr-profile-card">
                        <img class="msg-usr-profile-img" src="/img/profile.jpg" alt="x">
                    </div>
                </div>
                <div class="msg-usr-profile-right">
                    <div class="msg-usr-profile-usr">LAkshya sharma</div>
                    <div class="msg-usr-profile-msg">hi i am software developer</div>
                </div>
            </div>
            <!-- 00000000000000000000000000000000000000000000000000000000000000000000000000 -->
        </div>
        <!-- 000000000000000000  right  -->













        <div class="msg-right">
            <div class="msg-header">
                <div class="msg-header-left">
                    <img class="msg-profile" src="/img/profile.jpg" alt="">
                </div>
                <div class="msg-header-right">
                    <div class="msg-header-right-top">
                        Lakshya Sharma
                    </div>
                    <div class="msg-header-right-bottom">
                        online
                    </div>

                </div>
            </div>
            <div class="msg-body">
                <!-- sender -->
                <div class="msg-upper-box s">
                    <div class="msg-box">
                        hi    
                    </div>
                </div>
                <!-- reciever -->
                <div class="msg-upper-box r">
                    <div class="msg-box">
                        hello    
                    </div>
                </div>
                <!-- center -->
                <div class="msg-upper-box cen">
                    <div class="msg-box ">
                        seen    
                    </div>
                </div>
                <!--  -->
            </div>
            <div class="msg-footer">
                <div class="msg-footer-left">
                    <input class="msg-send-txt" type="text" placeholder="text" name="" id="">
                </div>
                <div class="msg-footer-right">
                    <input class="msg-send-button" type="submit" value="send">
                </div>
            </div>
        </div>

    </div>
</body>
</html>