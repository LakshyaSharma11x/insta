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
    <link rel="stylesheet" href="css/friend.css">
    <script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous">
    </script>
</head>
<body>
    <?php
        require 'module/_nav.php';
    ?>

    <div class="friend-block">
        <div class="f-header">
            <div class="f-header-a">

                <div class="f-left">
                    <input type="text" placeholder="search" class="f-input">
                </div>
                <div class="f-right">
                    <input type="submit" value="search" class="f-button">
                </div>
            </div>
        </div>


        <div class="f-body">
                <?php

                    require 'module/_dbconnect.php';
                    session_start();
                    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true ){
                        $sql = 'SELECT * FROM `users`';
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($result)){
                            $fnamex = $row['first_name'];
                            $lnamex = $row['last_name'];
                            $usernamex = $row['username'];
                            $img = $row['profile_pic'];
                        
                            echo '
                                <div class="box">
                                    <img src="db\profile\\'.$img.'" alt="x" class="box-img"/>
                                    <div class="box-name">'.$usernamex.'</div>
                                    <div class="box-but-o">
                                        <!-- <div class="box-but-i"> -->
                                            <button class="box-but-b">Follow</button>
                                            <button class="box-but-b">remove</button>
                                        <!-- </div> -->
                                    </div>
                                </div>

                               
                            ';
                        
                        }
                    }
                ?>

            


        </div>
    </div>
        
</body>


</html>