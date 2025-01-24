<?php
    require 'module/_dbconnect.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $sql = "SELECT * from `users` where email='$email'";
        $res = mysqli_query($conn,$sql);
        $numRow = mysqli_num_rows($res);
        if($numRow == 1){
            $row = mysqli_fetch_assoc($res);
            if($password == $row['password'] ){
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['username'] ;
                // echo 'logged in ' . $name;

                header('location: /insta/home.php');
                exit();

                
            }
            
            // echo 'error';
            


        }    
        else{
            session_start();
            $_SESSION['error']="name does not exist";
            header('location: /insta/partials/_login.php');
            exit();
        }
    }

?>
