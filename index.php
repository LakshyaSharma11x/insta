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
                    
                </div>
            </div>
            <div class="wel-right">
                <div class="form-txt">Login</div>
                <form class="form" action="loginhandler.php" method="POST">
                    <div class="form-in-a">
                        <input type="text" placeholder="Email" class="form-in-b" name="email"> 
                    </div>  
                    <div class="form-in-a">
                        <input type="text" placeholder="Password" class="form-in-b" name="password"> 
                    </div>  
                    <div class="form-in-butx">
                        <input type="submit" value="login" class="form-in-but"> 
                    </div>  
                </form>

                <a href="sigin.php" class="form-a">Create new account</a>
            </div>
        </div>
        <div class="line"></div>
        <!-- <hr> -->
        <div class="wel-footer">
            <div class="contributor">
                Powered by LAKSHYA SHARMA
            </div>
        </div>
    </div>
</body>
</html>