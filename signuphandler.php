<?php
    require 'module/_dbconnect.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
       
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

       // if(!empty($_POST['sub']))
        {
           
            $file=$_FILES['file']['name'];
            $tmp_name=$_FILES['file']['tmp_name'];
            $location="upload/post/".uniqid().$file."";
            $size=$_FILES['file']['size'];
            $type=$_FILES['file']['type'];
           
            if($type=="application/pdf" or $type=="image/png" or $type=="image/jpg" or $type=="image/jpeg")
            {
              
                // if($size>900000000)
                if(1)
                {
                    $sql = "INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `password`, `gender`, `email`, `created_at`, `updated_at`, `ac_status`, `profile_pic`) VALUES (NULL, '$fname', '$lname', '$username', '$password', '1', '$email', current_timestamp(), '2024-12-25 04:39:25.000000', '1', '$location');";
                  
                    $res = mysqli_query($conn,$sql);
                    if($res){
                        move_uploaded_file($tmp_name,$location);
                        echo "$location<br><br>";
                        header('location: /insta')    ;
                        exit();
                    }
        
                    else{
                        echo 'error';
                        header('location: facebbok.com')    ;
                        exit();
                    }
                    
                }
                else
                {
                    echo "Size problem";
                }
            }
            else
            {
                echo "Type Not Valid, Only PDF Allowed";
            }
        }


        // $existsql = "SELECT * from where user_name='$name'";
        // $res = mysqli_query($conn,$existsql);
        // $numRows = mysqli_num_rows($res);
        // if($numRows > 0){
        //     echo "name is already exists";

        // }
        // else{

            
            // if($pass == $cpass){
            // $hash = password_hash($pass,PASSWORD_DEFAULT);
            //$sql = "INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `password`, `gender`, `email`, `created_at`, `updated_at`, `ac_status`, `profile_pic`) VALUES (NULL, '$fname', '$lname', '$username', '$password', '1', '    $email', current_timestamp(), '2024-12-25 04:39:25.000000', '1', '1');";
            //$res = mysqli_query($conn,$sql);
            //if($res){
                //header('location: google.com')    ;
                //exit();
                
            //}
        
            //else{
                //echo 'error';
                //header('location: facebbok.com')    ;
                //exit();
            //}
        // }
        
    // }
}
?>