<?php

                    require 'module/_dbconnect.php';
                    session_start();
                    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true ){
                        $sql = 'SELECT * FROM `users`';
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($result)){
                            $rid = $row['id'];
                            $fnamex = $row['first_name'];
                            $lnamex = $row['last_name'];
                            $usernamex = $row['username'];
                            $img = $row['profile_pic'];
                        
                            echo '
                                <a href="msg.php?r-id='.$rid.'">
                                    <div class="msg-usr-profile">
                                        <div class="msg-usr-profile-left">
                                            <div class="msg-usr-profile-card">
                                                <img class="msg-usr-profile-img" src="db\profile\\'.$img.'" alt="x">
                                        </div>
                                    </div>
                                    <div class="msg-usr-profile-right">
                                        <div class="msg-usr-profile-usr">'.$usernamex.'</div>
                                            <div class="msg-usr-profile-msg">hi i am software developer</div>
                                        </div>
                                    </div>                               
                                </a>
                            ';
                        
                        }
                    }
                ?>