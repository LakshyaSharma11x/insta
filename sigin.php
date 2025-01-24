<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/root.css">
    <link rel="stylesheet" href="css/welcome.css">
</head>
<body>
    <div class="wel">

        <div class="wel-inner">

            
            <div class="wel-left">
                <div class="l-block">
                    <div class="cam-name">
                        INSTAGRAM
                    </div>
                    <div class="cam-des">
                        connecting people
                    </div>
                    <!-- <div class="cam-des">
                        connecting people
                    </div> -->
                </div>
            </div>
            <div class="wel-right">
                <div class="form-txt">Sigin</div>
                <form class="form" action="signuphandler.php" method="POST" enctype="multipart/form-data">
                    <div class="form-in-a">
                        <input type="text" placeholder="full name" name="fname" class="form-in-b"> 
                    </div>  
                    <div class="form-in-a">
                        <input type="text" placeholder="last name" name="lname" class="form-in-b"> 
                    </div>  
                    <div class="form-in-a">
                        <input type="text" placeholder="username" name="username" class="form-in-b"> 
                    </div>  
                    <div class="form-in-a">
                        <input type="text" placeholder="Email" name="email" class="form-in-b"> 
                    </div>  
                    <div class="form-in-a">
                        <input type="text" placeholder="Password" name="password" class="form-in-b"> 
                    </div>  
                    <div class="form-in-a">
                        <input type="text" placeholder=" conform Password" name="cpassword" class="form-in-b"> 
                    
                    </div>  
                    <div class="form-in-a">
                    
                        <input type="file"  placeholder="image" name="file">
                    </div>  
                    <div class="form-in-butx">
                        <input type="submit" value="siginup" class="form-in-but"> 
                    </div>  
                </form>

                <a href="#" class="form-a">login</a>
            </div>
        </div>
        <div class="line"></div>
        <!-- <hr> -->
        <div class="wel-footer">
            <div class="contributor">
                Manufacturer LAKSHYA SHARMA
            </div>
        </div>
    </div>
</body>
</html>